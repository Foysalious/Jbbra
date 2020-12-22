<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Nominee;
// use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Auth;
use Illuminate\Support\Str;

class CanNomineeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nominees = Nominee::orderBy('id','desc')->get();
        return view('backend.pages.form.nominee',compact('nominees'));
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
        $nominee = new Nominee();

        $nominee->name = $request->name;
        $nominee->relation = $request->relation;
        $nominee->phone = $request->phone;
        $nominee->address = $request->address;
        
        $nominee->user_id = Auth::user()->id;
        $nominee->save();
        // Toastr::success('Personal Info');
        return redirect()->route('nominee');
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
    public function update(Request $request, Nominee $nominee)
    {
       

        $nominee->name = $request->name;
        $nominee->relation = $request->relation;
        $nominee->phone = $request->phone;
        $nominee->address = $request->address;
        
        $nominee->user_id = Auth::user()->id;
        $nominee->save();
        // Toastr::success('Personal Info');
        return redirect()->route('nominee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nominee $nominee)
    {
        $nominee->delete();
        Toastr::error('nominee Deleted');
       return redirect()->route('nominee');
    }
}
