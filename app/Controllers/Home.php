<?php

namespace App\Controllers;

use Config\Database;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public $ipmodel;

    public function __construct()
    {
        $db = \Config\Database::connect();
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
}
