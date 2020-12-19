<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Address;
// use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Auth;
use Illuminate\Support\Str;

class CanAdressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.form.address');
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
        $address = new Address();

        $address->street = $request->street;
        $address->disctrict = $request->disctrict;
        $address->division = $request->division;
        $address->thana = $request->thana;
        $address->ward = $request->ward;
        $address->area = $request->area;
        $address->post = $request->post;
        $address->email = $request->email;
        $address->phone = $request->phone;
        
        $address->user_id = Auth::user()->id;
        $address->save();
        // Toastr::success('Personal Info');
        return redirect()->route('address');
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
    public function update(Request $request, Address $address)
    {
        $address->street = $request->street;
        $address->disctrict = $request->disctrict;
        $address->division = $request->division;
        $address->thana = $request->thana;
        $address->ward = $request->ward;
        $address->area = $request->area;
        $address->post = $request->post;
        $address->email = $request->email;
        $address->phone = $request->phone;
        
        $address->user_id = Auth::user()->id;
        $address->save();
        // Toastr::success('Personal Info');
        return redirect()->route('address');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        $address->delete();
        Toastr::error('address Deleted');
       return redirect()->route('address');
    }
}
