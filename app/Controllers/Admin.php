<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Admin extends BaseController
{
    public function __construct()
    {
        helper(['form']);
    }

    public function login()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('admin/dashboard');
        }
        helper(['form']);
        $data = [
            'title' => 'Admin Login',
        ];
        return view('admin/login', $data);
    }

    public function authenticate()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('admin/dashboard');
        }
        $session = session();
        $model = new AdminModel();
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
                return redirect()->to('admin/dashboard');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('admin/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('admin/login');
        }
    }

    public function dashboard()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('admin/login');
        }
        $db = \Config\Database::connect();
        $session = session();
        $userModel = new \App\Models\AdminModel();
        $LoggedinId = $session->get('id');
        $userinfo = $userModel->find($LoggedinId);
        $query = $db->query("SELECT * FROM users WHERE status='active' AND ticket != ''");
        $results = $query->getResult();
        $data = [
            'title' => 'Dashboard',
            'userinfo' => $userinfo,
            'users_data' => $results
        ];
        return view('admin/dashboard', $data);
    }

    public function pendingClients()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('admin/login');
        }
        $db = \Config\Database::connect();
        $session = session();
        $AdminModel = new \App\Models\AdminModel();
        $UserModel = new \App\Models\UserModel();
        $LoggedinId = $session->get('id');
        $userinfo = $AdminModel->find($LoggedinId);
        $query = $db->query("SELECT * FROM users WHERE status='inactive' AND ticket != ''");
        $results = $query->getResult();
        $data = [
            'title' => 'Pending clients',
            'userinfo' => $userinfo,
            'users_data' => $results
        ];
        return view('admin/pendingClients', $data);
    }

    public function edit($id)
    {
//        var_dump($id);
//        die();
        $model = new \App\Models\UserModel();

        $modelData = $model->find($id);
        $data = [
            'title' => 'edit user data',
            'UserModel' => $modelData
        ];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'status' => 'required',
            ];

            $db = \Config\Database::connect();
            $userModel = new UserModel();
            if ($this->validate($rules)) {
                $userdata = [

                    'status' => $this->request->getPost('status'),
                ];

                $query = $db->query("UPDATE users SET status='active', deposit='1000'  WHERE id={$id}");
                $session = session();
                $session->setFlashdata('msg', 'Account is updated successfully');
                return redirect()->to('admin/pendingClients');

            } else {
                $data['validation'] = $this->validator;
            }
        }
        return view('admin/edit', $data);
    }

    public function logout()
    {
        $data = [
            'title' => 'Thanks you are sucessfully logout'
        ];
        $session = session();
        $session->destroy();
        return redirect()->to('admin/login');
    }
public function widthrawal(){
    if (!session()->get('logged_in')) {
        return redirect()->to('admin/login');
    }
    $db = \Config\Database::connect();
    $session = session();
    $userModel = new \App\Models\AdminModel();
    $LoggedinId = $session->get('id');
    $userinfo = $userModel->find($LoggedinId);
    $query = $db->query("SELECT * FROM withdrawal");
    $results = $query->getResult();
//    $userData = $username->getResult();
    $data = [
        'title' => 'widthrawal Requests',
        'userinfo' => $userinfo,
        'users_data' => $results,
//        'username_data'=>$userData
    ];
        return view('admin/widthrawal',$data);
}
    public function widthrawalEdit($id)
    {
        $model = new \App\Models\UserModel();
        $db = \Config\Database::connect();
        $modelData =  $db->query("Select * FROM withdrawal WHERE id={$id}");
        $userdetails =  $db->query("Select * FROM users WHERE id={$id}");
        $results= $modelData->getResult();
        $userDetails= $userdetails->getResult();
        $updatedEarnings = $results[0]->amount-$userDetails[0]->earnings;
        $payoutAmount=$results[0]->amount;
        $data = [
            'title' => 'edit user data',
            'UserModel' => $results
        ];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'status' => 'required',
            ];


            $userModel = new UserModel();
            if ($this->validate($rules)) {
                $userdata = [

                    'status' => $this->request->getPost('status'),
                ];

                $query = $db->query("UPDATE withdrawal SET status='approved' WHERE id={$id}");
                $query = $db->query("UPDATE users SET earnings=$updatedEarnings, payouts=$payoutAmount WHERE id={$id}");
                $session = session();
                $session->setFlashdata('msg', 'Account is updated successfully');
                return redirect()->to('admin/widthrawal');

            } else {
                $data['validation'] = $this->validator;
            }
        }
        return view('admin/widthrawalEdit', $data);
    }

}