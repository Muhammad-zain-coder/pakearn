<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home');
    } 
    public function Contact()
    {
        return view('ContactUs');
    }
    public function About()
    {
        return view('AboutUs');
    }
}
