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
        helper(['form']);
        $data = [
            'title' => 'User Signing',
        ];
        return view('login', $data);
    }

    public function auth()
    {
        $email = $this->request->getpost('email');
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
                    'Phonenumber' => [
                        'rules' => 'required|min_length[11]|max_length[13]|is_unique[users.mobile]|integer',
                        'errors' =>[
                            'required' =>'Mobile number is required',
                            'min_length' =>'Enter a valid number',
                            'max_length' =>'Enter a valid number',
                            'is_unique' =>'Entered number is already registered',
                            'integer' =>'Enter a valid number',
                        ]
                    ],
                    'password' => 'required|min_length[8]',
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
                    'Phonenumber' => [
                        'rules' => 'required|min_length[11]|max_length[13]|is_unique[users.mobile]|integer',
                        'errors' =>[
                            'required' =>'Mobile number is required',
                            'min_length' =>'Enter a valid number',
                            'max_length' =>'Enter a valid number',
                            'is_unique' =>'Entered number is already registered',
                            'integer' =>'Enter a valid number',
                        ]
                    ],
                    'password' => 'required|min_length[8]',
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
        helper(['form']);
            $LoggedinId = $this->session->get('id');
            $userinfo = $this->UserModel->find($LoggedinId);
           
            if ($userinfo['status'] == 'active') {
                $data = [
                    'title' => 'widthrawal Request',
                    'userinfo' => $userinfo,
                ];
                $data['validation'] = null;
                if ($this->request->getMethod() == 'post') {
                    $rules = [
                        'account' => 'required|numeric',
                        'bank' => 'required',
                        'amount' => 'required|numeric',
                    ];
                    if ($this->validate($rules)) {
                        $LoggedinId = $this->session->get('id');
                        $widthdata = [
                            'user_id' => $LoggedinId,
                            'account' => $this->request->getPost('account'),
                            'bank' => $this->request->getPost('bank'),
                            'amount' => $this->request->getPost('amount'),
                        ];
                        $this->widthrawal->save($widthdata);
                        $this->session->setFlashdata('success', 'Withdrawal Request Sent Successfully ');
                        return redirect()->to('auth/dashboard');

                    } else {
                        $data['validation'] = $this->validator;
                    }
                }
                return view('widthrawal', $data);
            } else {
                return redirect()->to('auth/dashboard');
            }
    }

    public function dashboard()
    {
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

    public function paymentDashboard()
    {
            $LoggedinId = $this->session->get('id');
            $userinfo = $this->UserModel->find($LoggedinId);
            if($userinfo['status'] === 'active') {
                return redirect()->to('auth/dashboard');
            }
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
                            'min_length' => 'Enter Valid Tid',
                            'max_length' => 'Enter Valid Tid',
                            'numeric' => 'Enter Valid Tid'

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