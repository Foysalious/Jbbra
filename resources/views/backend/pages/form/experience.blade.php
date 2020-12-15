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
                            Experience Information
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
            <div class="experience-information">
					<h5 class="text-center">Experience Skill</h5>
					<form action="">
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Company Name</label>
							<div class="col-sm-4 ">
								<input type="text" class="form-control" id="" name="" placeholder="Enter the company name" required>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Post Held</label>
							<div class="col-sm-4 ">
								<input type="text" class="form-control" id="" name="" placeholder="Enter the Post Held" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Serve From</label>
							<div class="col-sm-4 ">
								<input type="date" class="form-control" id="" name="" required>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Serve Till</label>
							<div class="col-sm-4 ">
								<input type="date/text" class="form-control" id="" name=""  placeholder="Enter the Serve Till Date" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Address</label>
							<div class="col-sm-10 ">
								<input type="date/text" class="form-control" id="" name=""  placeholder="Enter the company Address" required>
							</div>
						</div>
						
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Phone/Mobile*</label>
							<div class="col-sm-4 ">
								<input type="number" class="form-control" id="" name="" required>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Contact Person</label>
							<div class="col-sm-4 ">
								<input type="text" class="form-control" id="" name=""  placeholder="Enter the content person Information" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Email</label>
							<div class="col-sm-10 ">
								<input type="email" class="form-control" id="" name=""  placeholder="Enter the email address" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Responsibility</label>
							<div class="col-sm-10 ">
								<input type="email" class="form-control" id="" name=""  placeholder="Enter your Responsibility" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Achievement</label>
							<div class="col-sm-10 ">
								<input type="email" class="form-control" id="" name=""  placeholder="Enter your Achievements" required>
							</div>
						</div>
						
						<div class="form-group row">
							<div class="col-sm-10">
							  <button type="submit" class="btn btn-info">Submit</button>
							</div>
						  </div>
					</form>
				</div>
                </section>
                @endsection