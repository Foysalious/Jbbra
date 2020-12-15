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
			<div class="personal-information">
				<h5 class="text-center">Personal Information</h5>
				<div class="personal-fild">
					<form method="" action="">
	
						<div class="form-group row">
							<label for="first-name" class="col-sm-2 col-form-label ">First name</label>
							<div class="col-sm-10 ">
							  <input type="text" class="form-control" id="" name="first-name" placeholder="Enter your First Name" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="middle-name" class="col-sm-2 col-form-label ">Middle name</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="middle-name" placeholder="Enter your Middle Name" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="last-name" class="col-sm-2 col-form-label ">Last name</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="last-name" placeholder="Enter your Last Name"  required>
							</div>
						</div>
						
						<div class="form-group row">
							<label for="father-name" class="col-sm-2 col-form-label ">Father's name</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="father-name" placeholder="Enter your Father's Name"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="mother-name" class="col-sm-2 col-form-label ">Mother's name</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="mother-name" placeholder="Enter your Mother's Name"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="spouse-name" class="col-sm-2 col-form-label ">Spouse's name</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="spouse-name" placeholder="Enter your Spouse's Name"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="national-id" class="col-sm-2 col-form-label ">National ID</label>
							<div class="col-sm-10 ">
							<input type="number" class="form-control" id="" name="national-id" placeholder="Enter your National ID Number"  required>
							<small id="" class="form-text text-muted">Example: 1245871245758</small>
							</div>
						</div>
						<div class="form-group row">
							<label for="birth-country" class="col-sm-2 col-form-label ">Birth country</label>
							<div class="col-sm-10 ">
								<select id="inputState" class="form-control" name="birth-country">
									<option selected> Select </option>
									<option value="">....</option>									
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="name" class="col-sm-2 col-form-label ">Birth District</label>
							<div class="col-sm-10 ">
								<select id="inputState" class="form-control" name="birth-district">
									<option selected>Select</option>
											<option value="">...</option>                                     
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Birth Date</label>
							<div class="col-sm-10 ">
							<input type="date" class="form-control" id="" name=""  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Age</label>
							<div class="col-sm-4 ">
							<input type="number" class="form-control" id="" name="" placeholder="Enter your Age"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Nationality</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="" placeholder="Enter your Nationality"  required>
							</div>
						</div>

						<fieldset class="form-group">
						  <div class="row">
							<legend class="col-form-label col-sm-2 pt-0">Sex</legend>
							<div class="col-sm-10">
							  <div class="form-check">
								<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" name="">
								<label class="form-check-label" for="gridRadios1">
								  Maile
								</label>
							  </div>
							  <div class="form-check">
								<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2" name="">
								<label class="form-check-label" for="gridRadios2">
								  Femaile
								</label>
							  </div>
							</div>
						  </div>
						</fieldset>

						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Marital Status</label>
							<div class="col-sm-10 ">
								<select id="" class="form-control" name="" required>
									<option value="" selected>Select</option>
									<option value="" >Married</option>
									<option value="" >Unmarried</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Religion</label>
							<div class="col-sm-10 ">
								<select id="" class="form-control" name="" required>
									<option value="" selected>Select</option>
									<option value="" >Islam</option>
									<option value="" >Hinduism</option>
									<option value="" >Christianity</option>
									<option value="" >Buddhism</option>
									<option value="" >Others</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Weight (kg)</label>
							<div class="col-sm-10 ">
							<input type="number" class="form-control" id="" name="" placeholder="Enter your Weight"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Height (meter)</label>
							<div class="col-sm-10 ">
							<input type="number" class="form-control" id="" name="" placeholder="Enter your Height"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Number of Son</label>
							<div class="col-sm-10 ">
							<input type="number" class="form-control" id="" name="" placeholder="Enter your Number of Son"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Number of Daughter</label>
							<div class="col-sm-10 ">
							<input type="number" class="form-control" id="" name="" placeholder="Enter your Number of Daughter"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Passport Issue Date</label>
							<div class="col-sm-10 ">
							<input type="date" class="form-control" id="" name="" placeholder="Enter your Passport Issue Date"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Passport No</label>
							<div class="col-sm-10 ">
							<input type="text/number" class="form-control" id="" name="" placeholder="Enter your Passport No"  required>
							<small id="" class="form-text text-muted">Example (A 1234567 or AA 1234567)</small>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Desired Job (Please select three options)</label>
							<div class="col-sm-3 ">
								<select id="" class="form-control" name="" required>
									<option value="select" selected>Desired Job 1</option>
									<option value="">...</option>												
								  </select>
							</div>
							<div class="col-sm-3 ">
								<select id="" class="form-control" name="" required>
									<option value="select" selected>Desired Job 1</option>
									<option value="">...</option>	
								  </select>
							</div>
							<div class="col-sm-3 ">
								<select id="" class="form-control" name="" required>
									<option value="select" selected>Desired Job 1</option>
									<option value="">...</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleFormControlFile1">Upload your Image File</label>
							<input type="file" class="form-control-file" id="exampleFormControlFile1">
						  </div>

						<div class="form-group row">
						  <div class="col-sm-10">
							<button type="submit" class="btn btn-info">Submit</button>
						  </div>
						</div>
					  </form>
				</div>
				
				
				
				
			</div> 
        </section>
        <!-- dashbaord statistics seciton end -->

    </div>
</div>
<!-- main content end -->
@endsection