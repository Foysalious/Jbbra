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
                            Nominee Information
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
            <div class="nominee-information">
					<h5 class="text-center">Nominee Information</h5>
					<form action="">
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Nominee Name</label>
							<div class="col-sm-4 ">
							  <input type="text" class="form-control" id="" name="" placeholder="Enter your Nominee Name" required>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Relation</label>
							<div class="col-sm-4 ">
							  <input type="text" class="form-control" id="" name="" placeholder="Enter your Nominee Relation" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Phone/ Mobile no</label>
							<div class="col-sm-10 ">
							  <input type="number" class="form-control" id="" name="" placeholder="Enter your Nominee Phone/ Mobile no" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Address</label>
							<div class="col-sm-10 ">
								<input type="text" class="form-control" id="" name="" placeholder="Enter your Nominee Address" required>
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