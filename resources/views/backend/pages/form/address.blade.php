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
                            Personal Information
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
				<div class="address-fild">
					<h5 class="text-center">Address</h5>
					<form method="post" action="{{ route('addressAdd') }}" enctype="multipart/form-data">
					@csrf
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Street Address/ Para</label>
							<div class="col-sm-10 ">
							  <input type="text" class="form-control" id="" name="street" placeholder="Enter your Street Address/ Para" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Division</label>
							<div class="col-sm-4 ">
								<select type="text" class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="division">
									<option selected>Select</option>
									<option value="Test">Test</option>
								  </select>
							</div>
							<label for="" class="col-sm-2 col-form-label ">District</label>
							<div class="col-sm-4 ">
								<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="disctrict">
									<option selected>Test</option>
									<option value="Test">Test</option>
								  </select>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Thana/ Upazilla	</label>
							<div class="col-sm-4 ">
								<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="thana">
									<option selected>Select</option>
									<option value="Test">Test</option>
								  </select>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Ward/ Union</label>
							<div class="col-sm-4 ">
								<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="ward">
									<option selected>Select</option>
									<option value="Test">Test</option>
								  </select>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Area/ Village</label>
							<div class="col-sm-4 ">
								<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="area">
									<option selected>Select</option>
									<option value="Test">Test</option>
								  </select>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Post Office</label>
							<div class="col-sm-4">
								<input type="number" class="form-control" id="" name="post" placeholder="Enter your Postal code" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Email</label>
							<div class="col-sm-4 ">
								<input type="email" class="form-control" id="" name="email" placeholder="Enter your Email Address" required>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Phone/ Mobile</label>
							<div class="col-sm-4 ">
								<input type="text" class="form-control" id="" name="phone" placeholder="Enter your Phone/ Mobile no" required>
							</div>
						</div>

						<div class="form-group row">
							<div class="col-sm-10">
							  <button type="submit" class="btn btn-info">Submit</button>
							</div>
						  </div>
						  </form>
						  

                @endsection
