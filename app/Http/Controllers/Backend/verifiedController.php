<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
// use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Auth;
use Illuminate\Support\Str;

class verifiedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $verified = User::orderBy('id','desc')->where('is_valid',1)->get();
        return view('backend.pages.verified.manage',compact('verified'));

    }

    public function notVerified()
    {
        $verified = User::orderBy('id','desc')->where('is_valid',0)->get();
        return view('backend.pages.notVerified.manage',compact('verified'));

    }

    public function approved(User $user, Request $request)
    {
        $user->is_valid= 1;
        $user->save();
        $request->session()->flash('Approved');

        return redirect()->route('Notverified');
    }

    public function disApproved(User $user, Request $request)
    {
        $user->is_valid= 0;
        $user->save();
        $request->session()->flash('Approved');

        return redirect()->route('verified');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        // Toastr::error('personal Information Deleted');
        return redirect()->route('verified');
    }
}
