<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use App\Experience;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Auth;
use Illuminate\Support\Str;

class CanExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = Experience::orderBy('id','desc')->get();
        return view('backend.pages.form.experience',compact('experiences'));
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
        $experience = new Experience();

        $experience->name = $request->name;
        $experience->post = $request->post;
        $experience->from = $request->from;
        $experience->till = $request->till;
        $experience->address = $request->address;
        $experience->phone = $request->phone;
        $experience->cPerson = $request->cPerson;
        $experience->email = $request->email;
        $experience->responsibilty = $request->responsibilty;
        $experience->achivements = $request->achivements;
        $experience->user_id = Auth::user()->id;
        $experience->save();
        // Toastr::success('Personal Info');
        return redirect()->route('experience');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $experience)
    {
        $experience->name = $request->name;
        $experience->post = $request->post;
        $experience->from = $request->from;
        $experience->till = $request->till;
        $experience->address = $request->address;
        $experience->phone = $request->phone;
        $experience->cPerson = $request->cPerson;
        $experience->email = $request->email;
        $experience->responsibilty = $request->responsibilty;
        $experience->achivements = $request->achivements;
        $experience->is_valid = $request->is_valid;
        $experience->save();
        // Toastr::success('Personal Info');
        return redirect()->route('experience');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();
        Toastr::error('Experience Deleted');
       return redirect()->route('experience');
    }

    public function updates(Request $request, Experience $experience)
    {
        $experience->name = $request->name;
        $experience->post = $request->post;
        $experience->from = $request->from;
        $experience->till = $request->till;
        $experience->address = $request->address;
        $experience->phone = $request->phone;
        $experience->cPerson = $request->cPerson;
        $experience->email = $request->email;
        $experience->responsibilty = $request->responsibilty;
        $experience->achivements = $request->achivements;
        $experience->is_valid = $request->is_valid;
        $experience->save();
        // Toastr::success('Personal Info');
        return Redirect::back()->with('message','Operation Successful !');
    }
}
