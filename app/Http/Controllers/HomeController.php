<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $count = User::orderBy('id','desc')->where('is_admin',0)->count();
        $count1 = User::orderBy('id','desc')->where('is_valid',0)->where('is_admin',0)->count();
        $count2 = User::orderBy('id','desc')->where('is_valid',1)->where('is_admin',0)->count();
        return view('adminHome',compact('count','count1','count2'));   
    }

    public function employeeHome()
    {
        return view('employeeHome');
    }

}
