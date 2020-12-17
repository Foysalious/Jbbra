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
                            dashboard
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
					<form method="post" action="{{ route('personalAdd') }}" enctype="multipart/form-data">
						@csrf
						<div class="form-group row">
							<label for="first-name" class="col-sm-2 col-form-label ">First name</label>
							<div class="col-sm-10 ">
							  <input type="text" class="form-control" id="" name="first_name" placeholder="Enter your First Name" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="middle-name" class="col-sm-2 col-form-label ">Middle name</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="middle_name" placeholder="Enter your Middle Name" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="last-name" class="col-sm-2 col-form-label ">Last name</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="last_name" placeholder="Enter your Last Name"  required>
							</div>
						</div>
						
						<div class="form-group row">
							<label for="father-name" class="col-sm-2 col-form-label ">Father's name</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="father_name" placeholder="Enter your Father's Name"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="mother-name" class="col-sm-2 col-form-label ">Mother's name</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="mother_name" placeholder="Enter your Mother's Name"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="spouse-name" class="col-sm-2 col-form-label ">Spouse's name</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="spouse_name" placeholder="Enter your Spouse's Name"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="national-id" class="col-sm-2 col-form-label ">National ID</label>
							<div class="col-sm-10 ">
							<input type="number" class="form-control" id="" name="nid" placeholder="Enter your National ID Number"  required>
							<small id="" class="form-text text-muted">Example: 1245871245758</small>
							</div>
						</div>
						<div class="form-group row">
							<label for="birth-country" class="col-sm-2 col-form-label ">Birth country</label>
							<div class="col-sm-10 ">
								<select id="inputState" class="form-control" name="country">
									<option selected> Select </option>
									<option value="bangladesh">Bangladesh</option>									
									<option value="india">India</option>									
								</select>
							</div>
						</div>
					
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Birth Date</label>
							<div class="col-sm-10 ">
							<input type="date" class="form-control" id="" name="b_date"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Age</label>
							<div class="col-sm-4 ">
							<input type="number" class="form-control" id="" name="age" placeholder="Enter your Age"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Nationality</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="nationality" placeholder="Enter your Nationality"  required>
							</div>
						</div>

						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Gender</label>
							<div class="col-sm-10 ">
								<select id="" class="form-control" name="gender" required>
									<option value="" selected>Select</option>
									<option value="Male" >Male</option>
									<option value="Female" >Female</option>
								</select>
							</div>
						</div>

						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Marital Status</label>
							<div class="col-sm-10 ">
								<select id="" class="form-control" name="marital" required>
									<option value="" selected>Select</option>
									<option value="Married" >Married</option>
									<option value="Unmarried" >Unmarried</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Religion</label>
							<div class="col-sm-10 ">
								<select id="" class="form-control" name="religion" required>
									<option value="" selected>Select</option>
									<option value="Islam" >Islam</option>
									<option value="Hinduism" >Hinduism</option>
									<option value="Christianity" >Christianity</option>
									<option value="Buddhism" >Buddhism</option>
									<option value="Others" >Others</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Weight (kg)</label>
							<div class="col-sm-10 ">
							<input type="number" class="form-control" id="" name="weight" placeholder="Enter your Weight"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Height (meter)</label>
							<div class="col-sm-10 ">
							<input type="number" class="form-control" id="" name="height" placeholder="Enter your Height"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Number of Son</label>
							<div class="col-sm-10 ">
							<input type="number" class="form-control" id="" name="son" placeholder="Enter your Number of Son"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Number of Daughter</label>
							<div class="col-sm-10 ">
							<input type="number" class="form-control" id="" name="daughter" placeholder="Enter your Number of Daughter"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Passport Issue Date</label>
							<div class="col-sm-10 ">
							<input type="date" class="form-control" id="" name="issue_date" placeholder="Enter your Passport Issue Date"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Passport No</label>
							<div class="col-sm-10 ">
							<input type="text/number" class="form-control" id="" name="passNo" placeholder="Enter your Passport No"  required>
							<small id="" class="form-text text-muted">Example (A 1234567 or AA 1234567)</small>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Desired Job (Please select three options)</label>
							<div class="col-sm-3 ">
								<select id="" class="form-control" name="d_job1" required>
									<option value="select" selected>Desired Job 1</option>
									<option value="0">Web Developer</option>	
									<option value="1">Software Engineer</option>	
								  </select>
							</div>
							<div class="col-sm-3 ">
								<select id="" class="form-control" name="d_job2" required>
									<option value="select" selected>Desired Job 1</option>
									<option value="0">Web Developer</option>	
									<option value="1">Software Engineer</option>	
								  </select>
							</div>
							<div class="col-sm-3 ">
								<select id="" class="form-control" name="d_job3" required>
									<option value="select" selected>Desired Job 1</option>
									<option value="0">Web Developer</option>	
									<option value="1">Software Engineer</option>	
								  </select>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleFormControlFile1">Upload your Image File</label>
							<input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
						  </div>

						<div class="form-group row">
						  <div class="col-sm-10">
							<button type="submit" class="btn btn-info">Submit</button>
						  </div>
						</div>
					  </form>
				</div>
				
        </section>
        <!-- dashbaord statistics seciton end -->

    </div>
</div>
<!-- main content end -->
@endsection