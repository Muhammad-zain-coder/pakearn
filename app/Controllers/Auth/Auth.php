<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\WidthrawalModel;
use CodeIgniter\Config\BaseConfig;
use Config\Database;
use Config\Services;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;

class Auth extends BaseController
{
    public $session;
    public $email;
    public $UserModel;
    public $dModel;
    public $db;
    private $widthrawal;

    public function __construct()
    {
        helper('form');
        $this->widthrawal = new WidthrawalModel();
        $this->UserModel = new UserModel();
        $this->session = Services::session();
        $this->db = Database::connect();
    }

    public function index()
    {
        if ($this->session->get('logged_in')) {
            return redirect()->to('auth/dashboard');
        }
        helper(['form']);
        $data = [
            'title' => 'User Signing',
        ];
        return view('login', $data);
    }

    public function auth()
    {
        if ($this->session->get('logged_in')) {
            return redirect()->to('auth/dashboard');
        }
        $email = $this->request->getPost('email');
        $password = $this->request->getpost('pass');
        $data = $this->UserModel->where('email', $email)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'logged_in' => TRUE
                ];
                $this->session->set($ses_data);
                return redirect()->to('auth/dashboard');
            } else {
                $this->session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('auth/login');
            }
        } else {
            $this->session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('auth/login');
        }
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('auth/login');
    }

    public function register($refral = null)
    {

        if ($this->session->get('logged_in')) {
            return redirect()->to('auth/dashboard');
        }
        if ($refral === null) {
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
                if ($this->validate($rules)) {
                    $userdata = [
                        'fname' => $this->request->getPost('fname'),
                        'lname' => $this->request->getPost('lname'),
                        'username' => $this->request->getPost('username'),
                        'email' => $this->request->getPost('email'),
                        'mobile' => $this->request->getPost('Phonenumber'),
                        'refrencer' => $this->request->getPost('refrence'),
                        'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                    ];
                    $this->UserModel->save($userdata);

                    $this->session->setFlashdata('success', 'You have successfully Registered');
                    return redirect()->to('auth/login');

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
                if ($this->validate($rules)) {
                    $userdata = [
                        'fname' => $this->request->getPost('fname'),
                        'lname' => $this->request->getPost('lname'),
                        'username' => $this->request->getPost('username'),
                        'email' => $this->request->getPost('email'),
                        'mobile' => $this->request->getPost('Phonenumber'),
                        'refrencer' => $this->request->getPost('refrence'),
                        'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                    ];
                    $this->UserModel->save($userdata);
                    $this->session->setFlashdata('success', 'You have successfully Registered');
                    return redirect()->to('auth/login');

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
        if (!$this->session->has("logged_in")) {
            return redirect()->to('auth/login');
        } else {
            $LoggedinId = $this->session->get('id');
            $userinfo = $this->UserModel->find($LoggedinId);
            $refral_name = $userinfo['username'];
            $query = $this->db->query("SELECT * FROM users WHERE status='active' AND refrencer = '$refral_name'");
            $results = $query->getResult();
            $refral_counter = count($results);
            $earnings = $refral_counter * 500;
            $data = [
                'title' => 'Dashboard',
                'userInfo' => $userinfo,
                'refral_countrer' => $refral_counter,
                'earnings' => $earnings,
            ];
            $query = $this->db->query("UPDATE users SET Referral={$refral_counter},earnings={$earnings}  WHERE id={$LoggedinId}");

            return view('dashboard', $data);
        }
    }

    public function paymentDashboard()
    {
        if (!$this->session->has("logged_in")) {
            return redirect()->to('auth/login');
        } else {
            $LoggedinId = $this->session->get('id');

            $userinfo = $this->UserModel->find($LoggedinId);

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
                if ($this->validate($rules)) {
                    $LoggedinId = $this->session->get('id');
                    $updateData = [
                        'user_id' => $LoggedinId,
                        'ticket' => $this->request->getPost('ticket'),
                    ];

                    $this->UserModel->update($LoggedinId, $updateData);
                    $this->session->setFlashdata('success', 'Package updated Successfully');
                    return redirect()->to('auth/dashboard');

                } else {
                    $data['validation'] = $this->validator;
                }
            }

            return view('paymentDashboard', $data);

        }
        return view('paymentDashboard', $data);

    }

    public function update()
    {
        $userinfo = $this->UserModel->find($LoggedinId);
        $LoggedinId = $this->session->get('id');

        $update_data = [
            'f_name' => $this->request->getPost('f_name'),
            'email' => $this->request->getPost('email'),
            'mobile' => $this->request->getPost('mobile'),
            'city' => $this->request->getPost('city'),
            'country' => $this->request->getPost('country'),
            'bio' => $this->request->getPost('bio'),
            'address' => $this->request->getPost('address'),
            'avatar' => $this->request->getPost('avatar'),

        ];
        $this->UserModel->update($LoggedinId, $update_data);
    }

    public function paymentGateways()
    {
        $data = [
            'title' => 'Payment Gateways'
        ];
        return view('paymentGateways', $data);
    }
}