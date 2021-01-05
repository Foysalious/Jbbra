<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mailing;
use Redirect;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Auth;
use Illuminate\Support\Str;

class CanMailingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mailings = Mailing::orderBy('id','desc')->where('user_id',Auth::user()->id)->get();
        return view('backend.pages.form.mailing',compact('mailings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mailing = new Mailing();

        $mailing->street = $request->street;
        $mailing->district = $request->district;
        $mailing->division = $request->division;
        $mailing->thana = $request->thana;
        $mailing->ward = $request->ward;
        $mailing->area = $request->area;
        $mailing->post = $request->post;
        $mailing->email = $request->email;
        $mailing->phone = $request->phone;
        
        $mailing->user_id = Auth::user()->id;
        $mailing->save();
        // Toastr::success('Personal Info');
        return redirect()->route('mailing');
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
    public function update(Request $request,Mailing $mailing)
    {
        $mailing->street = $request->street;
        $mailing->district = $request->district;
        $mailing->division = $request->division;
        $mailing->thana = $request->thana;
        $mailing->ward = $request->ward;
        $mailing->area = $request->area;
        $mailing->post = $request->post;
        $mailing->email = $request->email;
        $mailing->phone = $request->phone;
        if(Auth::user()->is_admin == 1){
        $mailing->is_valid = $request->is_valid;
        }
        $mailing->save();
        // Toastr::success('Personal Info');
        return redirect()->route('mailing');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mailing $mailing)
    {
        $mailing->delete();
        Toastr::error('mailing Deleted');
       return redirect()->route('mailing');
    }

    public function updates(Request $request,Mailing $mailing)
    {
        $mailing->street = $request->street;
        $mailing->district = $request->district;
        $mailing->division = $request->division;
        $mailing->thana = $request->thana;
        $mailing->ward = $request->ward;
        $mailing->area = $request->area;
        $mailing->post = $request->post;
        $mailing->email = $request->email;
        $mailing->phone = $request->phone;
        
        $mailing->is_valid = $request->is_valid;
        $mailing->save();
        // Toastr::success('Personal Info');
        return Redirect::back()->with('message','Operation Successful !');
    }
}
