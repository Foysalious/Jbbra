<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use App\Education;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Auth;
use Illuminate\Support\Str;


class CanEducationalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = Education::orderBy('id','desc')->get();
        return view('backend.pages.form.education',compact('educations'));
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
        $education = new Education();

        $education->name = $request->name;
        $education->p_year = $request->p_year;
        $education->board = $request->board;
        $education->subject = $request->subject;
        $education->grade = $request->grade;
        $education->user_id = Auth::user()->id;
        $education->save();
        // Toastr::success('Personal Info');
        return redirect()->route('education');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        $education->name = $request->name;
        $education->p_year = $request->p_year;
        $education->board = $request->board;
        $education->subject = $request->subject;
        $education->grade = $request->grade;
        $education->is_valid = $request->is_valid;
       
        $education->save();
        // Toastr::success('Personal Info');
        return redirect()->route('education');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        $education->delete();
         Toastr::error('personal Information Deleted');
        return redirect()->route('education');
    }

    public function updates(Request $request, Education $education)
    {
        $education->name = $request->name;
        $education->p_year = $request->p_year;
        $education->board = $request->board;
        $education->subject = $request->subject;
        $education->grade = $request->grade;
        $education->is_valid = $request->is_valid;
       
        $education->save();
        // Toastr::success('Personal Info');
        return Redirect::back()->with('message','Operation Successful !');
    }
}
