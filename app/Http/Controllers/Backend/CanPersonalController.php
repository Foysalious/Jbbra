<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Personal;
use Redirect;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Auth;
use Illuminate\Support\Str;

class CanPersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personals = Personal::orderBy('id','desc')->get();
        return view('backend.pages.form.personal',compact('personals'));
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
        $personal = new personal();

        $personal->first_name = $request->first_name;
        $personal->last_name = $request->last_name;
        $personal->middle_name = $request->middle_name;
        $personal->father_name = $request->father_name;
        $personal->mother_name = $request->mother_name;
        $personal->spouse_name = $request->spouse_name;
        $personal->nid = $request->nid;
        $personal->country = $request->country;
        $personal->b_date = $request->b_date;
        $personal->age = $request->age;
        $personal->nationality = $request->nationality;
        $personal->gender = $request->gender;
        $personal->marital = $request->marital;
        $personal->religion = $request->religion;
        $personal->weight = $request->weight;
        $personal->height = $request->height;
        $personal->son = $request->son;
        $personal->daughter = $request->daughter;
        $personal->issue_date = $request->issue_date;
        $personal->passNo = $request->passNo;
        $personal->d_job1 = $request->d_job1;
        $personal->d_job2 = $request->d_job2;
        $personal->d_job3 = $request->d_job3;
        $personal->user_id = Auth::user()->id;
        if( $request->image ){
            $image  = $request->file('image');
            $img    = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/personal/' . $img);
            Image::make($image)->save($location);
            $personal->image = $img;
        }
        $personal->save();
        // Toastr::success('Personal Info');
        return redirect()->route('personal');
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
    public function update(Personal $personal,Request $request)
    {
        $personal->first_name = $request->first_name;
        $personal->last_name = $request->last_name;
        $personal->middle_name = $request->middle_name;
        $personal->father_name = $request->father_name;
        $personal->mother_name = $request->mother_name;
        $personal->spouse_name = $request->spouse_name;
        $personal->nid = $request->nid;
        $personal->country = $request->country;
        $personal->b_date = $request->b_date;
        $personal->age = $request->age;
        $personal->nationality = $request->nationality;
        $personal->gender = $request->gender;
        $personal->marital = $request->marital;
        $personal->religion = $request->religion;
        $personal->weight = $request->weight;
        $personal->height = $request->height;
        $personal->son = $request->son;
        $personal->daughter = $request->daughter;
        $personal->issue_date = $request->issue_date;
        $personal->passNo = $request->passNo;
        $personal->d_job1 = $request->d_job1;
        $personal->d_job2 = $request->d_job2;
        $personal->d_job3 = $request->d_job3;
       

        if( $request->image ){
            if( File::exists('images/personal/'. $personal->image) ){
                File::delete('images/personal/'. $personal->image);
            }
            $image  = $request->file('image');
            $img    = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/personal/' . $img);
            Image::make($image)->save($location);
            $personal->image = $img;
        }
        $personal->save();
        // Toastr::success('Personal Updated');
        return redirect()->route('personal');
    }
 
    /** 
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personal $personal)
    {
        if( File::exists('images/personal/'. $personal ->image) ){
            File::delete('images/personal/'. $personal->image);
        }
        $personal->delete();
        Toastr::error('personal Information Deleted');
        return redirect()->route('personal');
    }
    public function updates(Personal $personal,Request $request)
    {
        $personal->first_name = $request->first_name;
        $personal->last_name = $request->last_name;
        $personal->middle_name = $request->middle_name;
        $personal->father_name = $request->father_name;
        $personal->mother_name = $request->mother_name;
        $personal->spouse_name = $request->spouse_name;
        $personal->nid = $request->nid;
        $personal->country = $request->country;
        $personal->b_date = $request->b_date;
        $personal->age = $request->age;
        $personal->nationality = $request->nationality;
        $personal->gender = $request->gender;
        $personal->marital = $request->marital;
        $personal->religion = $request->religion;
        $personal->weight = $request->weight;
        $personal->height = $request->height;
        $personal->son = $request->son;
        $personal->daughter = $request->daughter;
        $personal->issue_date = $request->issue_date;
        $personal->passNo = $request->passNo;
        $personal->d_job1 = $request->d_job1;
        $personal->d_job2 = $request->d_job2;
        $personal->d_job3 = $request->d_job3;
        $personal->is_valid = $request->is_valid;

        if( $request->image ){
            if( File::exists('images/personal/'. $personal->image) ){
                File::delete('images/personal/'. $personal->image);
            }
            $image  = $request->file('image');
            $img    = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/personal/' . $img);
            Image::make($image)->save($location);
            $personal->image = $img;
        }
        $personal->save();
        // Toastr::success('Personal Updated');
        return Redirect::back()->with('message','Operation Successful !');
    }
    
}
