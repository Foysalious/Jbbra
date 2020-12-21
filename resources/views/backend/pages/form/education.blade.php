@extends('backend.template.layout')
@section('body-content')
<!-- main content start -->
<div class="main-content">
    <div class="container-fluid">
        
        <!-- page indicator start -->
        <section class="page-indicator">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li>
                            <i class="fas fa-home"></i>
                        </li>
                        <li>
                            Educational Information
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page indicator end -->

        <!-- dashbaord statistics seciton start -->
        <section class="registration-logo container">
            <div class="text-center">
                <div class="logo-image py-4">
                    <img src="{{asset('assets/image/01.png')}}" alt="n/a">
                </div>
			</div> 
 
			<br>
			<br>
			<br>
            <div class="educational-information">
					<h5 class="text-center">Educational Information</h5>
					<form method="post" action="{{ route('educationAdd') }}" enctype="multipart/form-data">
					@csrf
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Degree Name</label>
							<div class="col-sm-4 ">
								<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="name">
									<option selected>Select</option>
									<option value="SSC">SSC</option>
									<option value="HSC">HSC</option>
								  </select>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Passing Year</label>
							<div class="col-sm-4 ">
							  <input type="number" class="form-control" id="" name="p_year" placeholder="Enter your Passing Year" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Board</label>
							<div class="col-sm-4 ">
								<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="board">
									<option selected>Select</option>
									<option value="Dhaka">Dhaka</option>
									<option value="Chittagong">Chittagong</option>
								  </select>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Subject</label>
							<div class="col-sm-4 ">
								<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="subject">
									<option selected>---Please Select a Option---</option>
									<option value="Science">Science</option>
									<option value="Commerce">Commerce</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Grade/Division </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="" name="grade" placeholder="Enter your Street Address/ Para" required>
							</div>
						</div>
						
						<div class="form-group row">
							<div class="col-sm-10">
							  <button type="submit" class="btn btn-info">Submit</button>
							</div>
						  </div>
					</form>
				</div>
                @endsection