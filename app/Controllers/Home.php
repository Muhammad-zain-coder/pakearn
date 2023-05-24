<?php

namespace App\Controllers;

use Config\Database;
use App\Models\ContactModel;
use App\Controllers\BaseController;

class Home extends BaseController
{
    private $ContactModel;
    public function __construct()
    {
        helper('form');
        $this->ContactModel = new ContactModel();
    }

    public function index()
    {
        $data = [
            'title' => 'PakEarn-Earn the best Profit with us',
        ];
        return view('index', $data);
    }

    public function payment()
    {
        $data = [
            'title' => 'Payment Methods'
        ];
        echo view('payment', $data);
    }

    public function howtouse()
    {
        $data = [
            'title' => 'How To Use'
        ];
        echo view('how-to-use', $data);
    }
    public function contact()
    {
        $data=[
            'title' => 'Contact Us'
        ];
        $data['validation'] = null;
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'name' => 'required',
                'email' => 'required|valid_email|is_unique[users.email]',
                'phone' => [
                    'rules' => 'required|min_length[11]|max_length[13]|integer',
                    'errors' =>[
                        'required' =>'Mobile number is required',
                        'min_length' =>'Enter a valid number',
                        'max_length' =>'Enter a valid number',
                        'integer' =>'Enter a valid number',
                    ]
                    ],
                    'message'=>'required',
            ];
            
            if ($this->validate($rules)) {
                $contactData = [
                    'name' => $this->request->getPost('name'),
                    'email' => $this->request->getPost('email'),
                    'phone' => $this->request->getPost('phone'),
                    'message' => $this->request->getPost('message'),
                ];
                $this->ContactModel->save($contactData);
                return redirect()->to('/');

            } else {
                $data['validation'] = $this->validator;
            }
        }
        return view('contact',$data);
    }
    public function terms() 
    {
        $data = [
            'title' => 'Terms and condition',
        ];
        return view('terms',$data);
    }
    public function privacy()
    {
        $data=[
            'title' => 'Privacy Policy',
        ];
        return view('policy', $data);
    } public function about()
    {
        $data=[
            'title' => 'About Us',
        ];
        return view('about', $data);
    }
}
