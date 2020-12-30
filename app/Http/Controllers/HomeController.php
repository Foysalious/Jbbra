<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
Use App\Address;
Use App\Education;
Use App\Experience;
Use App\language;
Use App\Mailing;
Use App\Nominee;
Use App\Personal;
use Auth;

use Barryvdh\DomPDF\ServiceProvider;
use PDF;

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

        if (Address::orderBy('id','desc')->where('is_valid',1)->where('user_id',Auth::user()->id)->first()) {
            $addressBar=10;
        }
        else{
            $addressBar=0;
        }

        if (Education::orderBy('id','desc')->where('is_valid',1)->where('user_id',Auth::user()->id)->first()) {
            $educationBar=10;
        }
        else{
            $educationBar=0;
        }
        if (Experience::orderBy('id','desc')->where('is_valid',1)->where('user_id',Auth::user()->id)->first()) {
            $experience=15;
        }
        else{
            $experience=0;
        }
        if (Language::orderBy('id','desc')->where('is_valid',1)->where('user_id',Auth::user()->id)->first()) {
            $languageBar=10;
        }
        else{
            $languageBar=0;
        }
        if (Mailing::orderBy('id','desc')->where('is_valid',1)->where('user_id',Auth::user()->id)->first()) {
            $mailBar=20;
        }
        else{
            $mailBar=0;
        }
        if (Nominee::orderBy('id','desc')->where('is_valid',1)->where('user_id',Auth::user()->id)->first()) {
            $NomineeBar=15;
        }
        else{
            $NomineeBar=0;
        }
        if (Personal::orderBy('id','desc')->where('is_valid',1)->where('user_id',Auth::user()->id)->first()) {
            $PersonalBar=20;
        }
        else{
            $PersonalBar=0;
        }
        return view('backend.dashboard',compact('addressBar','educationBar','languageBar','mailBar','NomineeBar','PersonalBar','experience'));
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
    public function CandidatePDF()
    {
        $users = User::orderBy('id','desc')->where('is_admin',0)->where('is_valid',1)->get();

        $prds = compact('users');

        $pdf= PDF::loadView('verifiedUsers', $prds);
        return $pdf->stream('VerifiedCandidate.pdf');
    }
}
