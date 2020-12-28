<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function about()
    {
       return view('frontend.about-us');
      
    }
    public function contact()
    {
       return view('frontend.contact');
      
    }
    public function emp_home()
    {
       return view('frontend.employers-home');
      
    }
    public function emp_dash()
    {
       return view('frontend.employers-dashboard');
      
    }
    public function faq()
    {
       return view('frontend.faq');
      
    }
    public function guide()
    {
       return view('frontend.guidance');
      
    }
    public function home()
    {
       return view('frontend.index');
      
    }
    public function login1()
    {
       return view('frontend.login');
      
    }
    public function register1()
    {
       return view('frontend.register');
      
    }
}
