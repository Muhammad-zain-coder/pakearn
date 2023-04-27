<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\WidthrawalModel;
use CodeIgniter\Config\BaseConfig;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;

class Auth extends BaseController
{
    public $session;
    public $email;
    public $LoginModel;
    public $dModel;

    public function __construct()
    {
        helper('form');
        $UserModel = new UserModel();
        $widthrawal = new WidthrawalModel();
        $this->LoginModel = new UserModel();
        $this->session = \Config\Services::session();
        $session = session();
    }

    public function index()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('dashboard');
        }
        helper(['form']);
        $data = [
            'title' => 'Login - Pakearn',
        ];
        return view('login', $data);
    }

    public function auth()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('dashboard');
        }
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');
        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('dashboard');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('login');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('login');
    }

    public function register($refral = null)
    {

        if (session()->get('logged_in')) {
            return redirect()->to('dashboard');
        }
        if ($refral === null) {
            $data = [];
            $data = [
                'title' => 'User Registration',
                'refral' => $refral,
            ];
            $data['validation'] = null;
            if ($this->request->getMethod() == 'post') {
                $rules = [
                    'fname' => [
                        'label'  => 'fname',
                        'rules'  => 'required',
                        'errors' => [
                            'required' => 'Firstname is required'
                        ]
                    ],
                    'lname' => [
                        'label'  => 'lname',
                        'rules'  => 'required',
                        'errors' => [
                            'required' => 'Lastname is required'
                        ]
                    ],
                    'username' => 'required|is_unique[users.username]',
                    'email' => 'required|valid_email|is_unique[users.email]',
                    'Phonenumber' =>[
                        'label'  => 'Phonenumber',
                        'rules'  => 'required|min_length[6]|max_length[12]|is_unique[users.mobile]|integer',
                        'errors' => [
                            'required' => 'Mobile number is required',
                            'integer' => 'Phone number must be a number',
                        ],
                    ],
                    'password' => 'required|min_length[4]|max_length[12]',
                ];
                $db = \Config\Database::connect();
                $userModel = new UserModel();
                if ($this->validate($rules)) {
                    $userdata = [
                        'fname' => $this->request->getVar('fname'),
                        'lname' => $this->request->getVar('lname'),
                        'username' => $this->request->getVar('username'),
                        'email' => $this->request->getVar('email'),
                        'mobile' => $this->request->getVar('Phonenumber'),
                        'refrencer' => $this->request->getVar('refrence'),
                        'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                    ];
                    $userModel->save($userdata);
                    $session = session();
                    $session->setFlashdata('success', 'You have successfully Registered');
                    return redirect()->to('login');

                } else {
                    $data['validation'] = $this->validator;
                }
            }

        } else {
            $data = [
                'title' => 'User Registration',
                'refral' => $refral,
            ];
            $data['validation'] = null;
            if ($this->request->getMethod() == 'post') {
                $rules = [
                    'fname' => 'required',
                    'lname' => 'required',
                    'username' => 'required|is_unique[users.username]',
                    'email' => 'required|valid_email|is_unique[users.email]',
                    'Phonenumber' => 'required|min_length[6]|max_length[12]|is_unique[users.mobile]',
                    'password' => 'required|min_length[4]|max_length[12]',
                ];
                $db = \Config\Database::connect();
                $userModel = new UserModel();
                if ($this->validate($rules)) {
                    $userdata = [
                        'fname' => $this->request->getVar('fname'),
                        'lname' => $this->request->getVar('lname'),
                        'username' => $this->request->getVar('username'),
                        'email' => $this->request->getVar('email'),
                        'mobile' => $this->request->getVar('Phonenumber'),
                        'refrencer' => $this->request->getVar('refrence'),
                        'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                    ];
                    $userModel->save($userdata);
                    $session = session();
                    $session->setFlashdata('success', 'You have successfully Registered');
                    return redirect()->to('login');

                } else {
                    $data['validation'] = $this->validator;
                }
            }

        }
        return view('register', $data);
    }

    public function widthrawal()
    {
        $session = session();
        if (!session()->has("logged_in")) {
            return redirect()->to('login');
        } else {
            $userModel = new \App\Models\UserModel();
            $LoggedinId = $session->get('id');
            $userinfo = $userModel->find($LoggedinId);
            if ($userinfo['status'] == 'active') {
                $data = [
                    'title' => 'widthrawal Request',
                    'userinfo' =>$userinfo,
                ];
                $data['validation'] = null;
                if ($this->request->getMethod() == 'post') {
                    $rules = [
                        'account' => 'required',
                        'bank' => 'required',
                        'amount' => 'required',
                    ];
                    $db = \Config\Database::connect();
                    $widthrawal = new WidthrawalModel();
                    $session = session();
                    if ($this->validate($rules)) {
                        $LoggedinId = $session->get('id');
                        $widthdata = [
                            'user_id' => $LoggedinId,
                            'account' => $this->request->getVar('account'),
                            'bank' => $this->request->getVar('bank'),
                            'amount' => $this->request->getVar('amount'),
                        ];
                        $widthrawal->save($widthdata);
                        $session = session();
                        $session->setFlashdata('success', 'Withdrawal Request Sent Successfully ');
                        return redirect()->to('dashboard');

                    } else {
                        $data['validation'] = $this->validator;
                    }
                }

                return view('widthrawal', $data);
            } else {
                return redirect()->to('dashboard');
            }
        }
    }

    public function dashboard()
    {
        $session = session();
        if (!session()->has("logged_in")) {
            return redirect()->to('login');
        } else {
            $userModel = new \App\Models\UserModel();
            $LoggedinId = $session->get('id');
            $userinfo = $userModel->find($LoggedinId);
            $refral_name = $userinfo['username'];
            $db = \Config\Database::connect();
            $query = $db->query("SELECT * FROM users WHERE status='active' AND refrencer = '$refral_name'");
            $results = $query->getResult();
            $refral_counter = count($results);
            $earnings = $refral_counter * 500;
            $data = [
                'title' => 'Dashboard',
                'userInfo' => $userinfo,
                'refral_countrer' => $refral_counter,
                'earnings' => $earnings,
            ];
            $query = $db->query("UPDATE users SET Referral={$refral_counter},earnings={$earnings}  WHERE id={$LoggedinId}");

            return view('dashboard', $data);
        }
    }

    public function update()
    {
        $session = session();
        $userModel = new \App\Models\UserModel();
        $LoggedinId = $session->get('id');
        $userinfo = $userModel->find($LoggedinId);
        $LoggedinId = $session->get('id');
        $update_data = [
            'f_name' => $this->request->getVar('f_name'),
            'email' => $this->request->getVar('email'),
            'mobile' => $this->request->getVar('mobile'),
            'city' => $this->request->getVar('city'),
            'country' => $this->request->getVar('country'),
            'bio' => $this->request->getVar('bio'),
            'address' => $this->request->getVar('address'),
            'avatar' => $this->request->getVar('avatar'),

        ];
        $userModel->update($LoggedinId, $update_data);
    }

    public function paymentDashboard()
    {
        $session = session();
        if (!session()->has("logged_in")) {
            return redirect()->to('login');
        } else {
            $userModel = new \App\Models\UserModel();
            $LoggedinId = $session->get('id');

            $userinfo = $userModel->find($LoggedinId);

            $data = [];
            $data = [

                'title' => 'Credit Pay',
                'userinfo' => $userinfo,
            ];
            $data['validation'] = null;
            if ($this->request->getMethod() == 'post') {
                $a = 124564656;
                $rules = [
                    'ticket' => [
                        'rules' => 'required|min_length[6]|max_length[18]|numeric',
                        'errors' => [
                            'required' => 'Tid is required',
                            'min_length' => 'Please enter correct Tid',
                            'max_length' => 'Please enter correct Tid',
                            'numeric' => 'Please enter Numbers only'

                        ],
                    ],
                ];
                $db = \Config\Database::connect();
                $userModel = new \App\Models\UserModel();
                $session = session();
                if ($this->validate($rules)) {
                    $LoggedinId = $session->get('id');
                    $updateData = [
                        'user_id' => $LoggedinId,
                        'ticket' => $this->request->getVar('ticket'),
                    ];

                    $userModel->update($LoggedinId, $updateData);
                    $session = session();
                    $session->setFlashdata('success', 'Package updated Successfully');
                    return redirect()->to('dashboard');

                } else {
                    $data['validation'] = $this->validator;
                }
            }

            return view('paymentDashboard', $data);

        }
        return view('paymentDashboard', $data);

    }

    public function paymentGateways()
    {
        $data = [
            'title' => 'Payment Gateways'
        ];
        return view('paymentGateways', $data);
    }
}