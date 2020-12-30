@extends('backend.template.layout')

@section('body-content')

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
						All Information
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- page indicator end -->

	<!-- personal field start  -->
	<div class="clearfix">
	<section class="registration-logo container">
		<div class="text-center">
			<div class="logo-image py-4">
				<img src="{{asset('assets/image/01.png')}}" alt="n/a">
			</div>
		</div>
		@foreach(App\Personal::orderBy('id','desc')->where('user_id',$user->id)->get() as $personal) 
		@if($personal->is_valid == 1)
		<h4 class="text-center alert-primary w-100 p-3 ">Approved</h4>
		@else
		<h4 class="text-center alert-danger w-100 p-3">Not-Approved</h4>
		@endif

		<div class="personal-information">
			<h5 class="text-center">Personal Information</h5>
			<!-- <form method="post" action="{{ route('personalupdates',$personal->id) }}" enctype="multipart/form-data">
					@csrf
					<div class="form-group row">
						<label for="first-name" class="col-sm-2 col-form-label ">First name</label>
						<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="first_name"  value='{{$personal->first_name}}'placeholder="Enter your First Name" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="middle-name" class="col-sm-2 col-form-label ">Middle name</label>
						<div class="col-sm-10 ">
						<input type="text" class="form-control" id="" name="middle_name"value='{{$personal->middle_name}}' placeholder="Enter your Middle Name" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="last-name" class="col-sm-2 col-form-label ">Last name</label>
						<div class="col-sm-10 ">
						<input type="text" class="form-control" id="" name="last_name"value='{{$personal->last_name}}' placeholder="Enter your Last Name"  required>
						</div>
					</div>

					<div class="form-group row">
						<label for="father-name" class="col-sm-2 col-form-label ">Father's name</label>
						<div class="col-sm-10 ">
						<input type="text" class="form-control" id="" name="father_name" value='{{$personal->father_name}}' placeholder="Enter your Father's Name"  required>
						</div>
					</div>
					<div class="form-group row">
						<label for="mother-name" class="col-sm-2 col-form-label ">Mother's name</label>
						<div class="col-sm-10 ">
						<input type="text" class="form-control" id="" name="mother_name"value='{{$personal->mother_name}}' placeholder="Enter your Mother's Name"  required>
						</div>
					</div>
					<div class="form-group row">
						<label for="spouse-name" class="col-sm-2 col-form-label ">Spouse's name</label>
						<div class="col-sm-10 ">
						<input type="text" class="form-control" id="" name="spouse_name" value='{{$personal->spouse_name}}' placeholder="Enter your Spouse's Name"  required>
						</div>
					</div>
					<div class="form-group row">
						<label for="national-id" class="col-sm-2 col-form-label ">National ID</label>
						<div class="col-sm-10 ">
						<input type="number" class="form-control" id="" name="nid" placeholder="Enter your National ID Number"  value='{{$personal->nid}}' required>
						<small id="" class="form-text text-muted">Example: 1245871245758</small>
						</div>
					</div>
					<div class="form-group row">
						<label for="birth-country" class="col-sm-2 col-form-label ">Birth country</label>
						<div class="col-sm-10 ">
						<input type="text" class="form-control" id="" name="country" value='{{$personal->country}}' readonly placeholder="Enter your Street Address/ Para" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Birth Date</label>
						<div class="col-sm-10 ">
						<input type="date" class="form-control" id="" name="b_date" value='{{$personal->b_date}}' required>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Age</label>
						<div class="col-sm-4 ">
						<input type="number" class="form-control" id="" name="age" placeholder="Enter your Age" value='{{$personal->age}}' required>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Nationality</label>
						<div class="col-sm-10 ">
						<input type="text" class="form-control" id="" name="nationality" placeholder="Enter your Nationality" value='{{$personal->nationality}}' required>
						</div>
					</div>

					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Gender</label>
						<div class="col-sm-10 ">
						<input type="text" class="form-control" id="" name="gender" value='{{$personal->gender}}' readonly placeholder="Enter your Street Address/ Para" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Marital Status</label>
						<div class="col-sm-10 ">
						<input type="text" class="form-control" id="" name="marital" value='{{$personal->marital}}' readonly placeholder="Enter your Street Address/ Para" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Religion</label>
						<div class="col-sm-10 ">
						<input type="text" class="form-control" id="" name="religion" value='{{$personal->religion}}' readonly placeholder="Enter your Street Address/ Para" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Weight (kg)</label>
						<div class="col-sm-10 ">
						<input type="number" class="form-control" id="" name="weight" placeholder="Enter your Weight" value='{{$personal->weight}}' required>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Height (meter)</label>
						<div class="col-sm-10 ">
						<input type="number" class="form-control" id="" name="height" placeholder="Enter your Height" value='{{$personal->height}}' required>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Number of Son</label>
						<div class="col-sm-10 ">
						<input type="number" class="form-control" id="" name="son" placeholder="Enter your Number of Son" value='{{$personal->son}}' required>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Number of Daughter</label>
						<div class="col-sm-10 ">
						<input type="number" class="form-control" id="" name="daughter" placeholder="Enter your Number of Daughter" value='{{$personal->daughter}}' required>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Passport Issue Date</label>
						<div class="col-sm-10 ">
						<input type="date" class="form-control" id="" name="issue_date" placeholder="Enter your Passport Issue Date" value='{{$personal->issue_date}}' required>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Passport No</label>
						<div class="col-sm-10 ">
						<input type="text/number" class="form-control" id="" name="passNo" placeholder="Enter your Passport No"  value='{{$personal->passNo}}' required>
						<small id="" class="form-text text-muted">Example (A 1234567 or AA 1234567)</small>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Desired Job (Please select three options)</label>
						<div class="col-sm-3 ">
						<input type="text" class="form-control" id="" name="d_job1" value='{{$personal->d_job1}}' readonly placeholder="Enter your Street Address/ Para" required>
						</div>
						<div class="col-sm-3 ">
						<input type="text" class="form-control" id="" name="d_job2" value='{{$personal->d_job2}}' readonly placeholder="Enter your Street Address/ Para" required>
						</div>
						<div class="col-sm-3 ">
						<input type="text" class="form-control" id="" name="d_job3" value='{{$personal->d_job3}}' readonly placeholder="Enter your Street Address/ Para" required>
						</div>
					</div>

					<div class="form-group ">
								<label>User Image *</label>
								<img src="{{ asset('images/personal/'. $personal->image) }}"  width="100px" alt="">
								<input type="file" class="form-control-file" name="image">
					</div>
						</div>

					<div class="form-group row ">
						<label class="col-sm-2 col-form-label ">Validate User </label>
							<div class="col-sm-3">
									<select id="" class="form-control" name="is_valid" required>
										<option value="select" selected>Please Validate</option>
										<option value="0"{{ $personal->is_valid == 0 ? 'selected' : '' }}>Not Approved</option>
										<option value="1"{{ $personal->is_valid == 1 ? 'selected' : '' }}>Approved</option>
										
									</select>
							</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-12 text-center">
						<button type="submit" class="btn btn-info">Submit</button>
						</div>
					</div>
			</form> -->
			<form method="post" action="{{ route('personalupdates',$personal->id) }}" enctype="multipart/form-data">
				<div class="form-group row">
					<label for="first-name" class="col-sm-2 col-form-label ">First name</label>
					<div class="col-sm-10 ">
						<input type="text" class="form-control" id="" name="first_name"  value='{{$personal->first_name}}'placeholder="Enter your First Name" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="middle-name" class="col-sm-2 col-form-label ">Middle name</label>
					<div class="col-sm-10 ">
					<input type="text" class="form-control" id="" name="middle_name"value='{{$personal->middle_name}}' placeholder="Enter your Middle Name" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="last-name" class="col-sm-2 col-form-label ">Last name</label>
					<div class="col-sm-10 ">
					<input type="text" class="form-control" id="" name="last_name"value='{{$personal->last_name}}' placeholder="Enter your Last Name"  required>
					</div>
				</div>

				<div class="form-group row">
						<label for="father-name" class="col-sm-2 col-form-label ">Father's name</label>
						<div class="col-sm-10 ">
						<input type="text" class="form-control" id="" name="father_name" value='{{$personal->father_name}}' placeholder="Enter your Father's Name"  required>
						</div>
				</div>
				<div class="form-group row">
						<label for="mother-name" class="col-sm-2 col-form-label ">Mother's name</label>
						<div class="col-sm-10 ">
						<input type="text" class="form-control" id="" name="mother_name"value='{{$personal->mother_name}}' placeholder="Enter your Mother's Name"  required>
						</div>
				</div>
				<div class="form-group row">
					<label for="spouse-name" class="col-sm-2 col-form-label ">Spouse's name</label>
					<div class="col-sm-10 ">
					<input type="text" class="form-control" id="" name="spouse_name" value='{{$personal->spouse_name}}' placeholder="Enter your Spouse's Name"  required>
					</div>
				</div>
				<div class="form-group row">
					<label for="national-id" class="col-sm-2 col-form-label ">National ID</label>
					<div class="col-sm-10 ">
					<input type="number" class="form-control" id="" name="nid" placeholder="Enter your National ID Number"  value='{{$personal->nid}}' required>
					<small id="" class="form-text text-muted">Example: 1245871245758</small>
					</div>
				</div>
				<div class="form-group row">
					<label for="birth-country" class="col-sm-2 col-form-label ">Birth country</label>
					<div class="col-sm-10 ">
					<input type="text" class="form-control" id="" name="country" value='{{$personal->country}}' readonly placeholder="Enter your Street Address/ Para" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Birth Date</label>
					<div class="col-sm-10 ">
					<input type="date" class="form-control" id="" name="b_date" value='{{$personal->b_date}}' required>
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Age</label>
					<div class="col-sm-4 ">
					<input type="number" class="form-control" id="" name="age" placeholder="Enter your Age" value='{{$personal->age}}' required>
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Nationality</label>
					<div class="col-sm-10 ">
					<input type="text" class="form-control" id="" name="nationality" placeholder="Enter your Nationality" value='{{$personal->nationality}}' required>
					</div>
				</div>

				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Gender</label>
					<div class="col-sm-10 ">
					<input type="text" class="form-control" id="" name="gender" value='{{$personal->gender}}' readonly placeholder="Enter your Street Address/ Para" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Marital Status</label>
					<div class="col-sm-10 ">
					<input type="text" class="form-control" id="" name="marital" value='{{$personal->marital}}' readonly placeholder="Enter your Street Address/ Para" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Religion</label>
					<div class="col-sm-10 ">
					<input type="text" class="form-control" id="" name="religion" value='{{$personal->religion}}' readonly placeholder="Enter your Street Address/ Para" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Weight (kg)</label>
					<div class="col-sm-10 ">
					<input type="number" class="form-control" id="" name="weight" placeholder="Enter your Weight" value='{{$personal->weight}}' required>
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Height (meter)</label>
					<div class="col-sm-10 ">
					<input type="number" class="form-control" id="" name="height" placeholder="Enter your Height" value='{{$personal->height}}' required>
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Number of Son</label>
					<div class="col-sm-10 ">
					<input type="number" class="form-control" id="" name="son" placeholder="Enter your Number of Son" value='{{$personal->son}}' required>
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Number of Daughter</label>
					<div class="col-sm-10 ">
					<input type="number" class="form-control" id="" name="daughter" placeholder="Enter your Number of Daughter" value='{{$personal->daughter}}' required>
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Passport Issue Date</label>
					<div class="col-sm-10 ">
					<input type="date" class="form-control" id="" name="issue_date" placeholder="Enter your Passport Issue Date" value='{{$personal->issue_date}}' required>
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Passport No</label>
					<div class="col-sm-10 ">
					<input type="text/number" class="form-control" id="" name="passNo" placeholder="Enter your Passport No"  value='{{$personal->passNo}}' required>
					<small id="" class="form-text text-muted">Example (A 1234567 or AA 1234567)</small>
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Desired Job (Please select three options)</label>
					<div class="col-sm-3 ">
					<input type="text" class="form-control" id="" name="d_job1" value='{{$personal->d_job1}}' readonly placeholder="Enter your Street Address/ Para" required>
					</div>
					<div class="col-sm-3 ">
					<input type="text" class="form-control" id="" name="d_job2" value='{{$personal->d_job2}}' readonly placeholder="Enter your Street Address/ Para" required>
					</div>
					<div class="col-sm-3 ">
					<input type="text" class="form-control" id="" name="d_job3" value='{{$personal->d_job3}}' readonly placeholder="Enter your Street Address/ Para" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">User Image *</label>
					<img src="{{ asset('images/personal/'. $personal->image) }}"  width="100px" alt="">
					<input type="file" class="form-control-file col-sm-7" name="image">
				</div>

				<div class="form-group row ">
						<label class="col-sm-2 col-form-label ">Validate User </label>
							<div class="col-sm-3">
									<select id="" class="form-control" name="is_valid" required>
										<option value="select" selected>Please Validate</option>
										<option value="0"{{ $personal->is_valid == 0 ? 'selected' : '' }}>Not Approved</option>
										<option value="1"{{ $personal->is_valid == 1 ? 'selected' : '' }}>Approved</option>
										
									</select>
							</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-12 text-center">
					<button type="submit" class="btn btn-info">Submit</button>
					</div>
				</div>

			</form>
			<div class="personal-fild">
				
				@endforeach
				<div class="col-md-12 text-center my-5">
					<a href="{{ route('Notverified')}}" class="btn btn-danger px-5">Back</a>
				</div>
					
			</div>
		</div>
	</section>

	</div>

	<!-- personal field end -->

    <!-- dashbaord statistics seciton start -->
    <section class="registration-logo container">
            <div class="text-center">
                <div class="logo-image py-4">
                    <img src="{{asset('assets/image/01.png')}}" alt="n/a">
                </div>
			</div>
			@foreach(App\Address::orderBy('id','asc')->where('user_id',$user->id)->get() as $Address) 
			@if($Address->is_valid == 1)
			<h4 class="text-center alert-primary w-100 p-3 ">Approved</h4>
			@else
			<h4 class="text-center alert-danger w-100 p-3">Not-Approved</h4>
			@endif
			<br>
			<br>
			<br>
			<div class="address-fild">
					<h5 class="text-center">Address</h5>
					
					<form method="post" action="{{ route('addressUpdates',$Address->id) }}" enctype="multipart/form-data">
					@csrf
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Street Address/ Para</label>
							<div class="col-sm-10 ">
							  <input type="text" class="form-control" id="" name="street" value='{{$Address->street}}' placeholder="Enter your Street Address/ Para" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Division</label>
							<div class="col-sm-4 ">
							<input type="text" class="form-control" id="" name="division" value='{{$Address->division}}' readonly placeholder="Enter your Street Address/ Para" required>
							</div>
							<label for="" class="col-sm-2 col-form-label ">District</label>
							<div class="col-sm-4 ">
							<input type="text" class="form-control" id="" name="disctrict" value='{{$Address->disctrict}}' readonly placeholder="Enter your Street Address/ Para" required>	
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
							<input type="text" class="form-control" id="" name="ward" value='{{$Address->ward}}' readonly placeholder="Enter your Street Address/ Para" required>	
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Area/ Village</label>
							<div class="col-sm-4 ">
							<input type="text" class="form-control" id="" name="area" value='{{$Address->area}}' readonly placeholder="Enter your Street Address/ Para" required>								
							</div>
							<label for="" class="col-sm-2 col-form-label ">Post Office</label>
							<div class="col-sm-4">
								<input type="number" class="form-control" id="" value='{{$Address->post}}' name="post" placeholder="Enter your Postal code" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Email</label>
							<div class="col-sm-4 ">
								<input type="email" class="form-control" id="" name="email" value='{{$Address->email}}' placeholder="Enter your Email Address" required>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Phone/ Mobile</label>
							<div class="col-sm-4 ">
								<input type="text" class="form-control" id="" name="phone" value='{{$Address->phone}}' placeholder="Enter your Phone/ Mobile no" required>
							</div>
						</div>
                        <div class="form-group row ">
                          <label class="col-sm-2 col-form-label ">Validate User </label>
                                <div class="col-sm-3">
                                        <select id="" class="form-control" name="is_valid" required>
                                            <option value="select" selected>Please Validate</option>
                                            <option value="0"{{ $Address->is_valid == 0 ? 'selected' : '' }}>Not Approved</option>
                                            <option value="1"{{ $Address->is_valid == 1 ? 'selected' : '' }}>Approved</option>
                                            
                                        </select>
                                </div> 
						</div>
						<div class="form-group row">
							<div class="col-sm-12 text-center">
							  <button type="submit" class="btn btn-info">Submit</button>
							</div>
						</div>
					</form>
					@endforeach
			</div>
	</section>


    <section class="registration-logo container">
            	<div class="text-center">
                	<div class="logo-image py-4">
                    <img src="{{asset('assets/image/01.png')}}" alt="n/a">
                	</div>
				</div>
			@foreach(App\Education::orderBy('id','desc')->where('user_id',$user->id)->get() as $education) 
			@if($education->is_valid == 1)
			<h4 class="text-center alert-primary w-100 p-3 ">Approved</h4>
			@else
			<h4 class="text-center alert-danger w-100 p-3">Not-Approved</h4>
			@endif
			
			<br>
			<br>
			<br>
            <div class="educational-information">
					<h5 class="text-center">Educational Information</h5>
				
					<form method="post" action="{{ route('educationUpdates',$education->id) }}" enctype="multipart/form-data">
					@csrf
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Degree Name</label>
							<div class="col-sm-4 ">
							<input type="text" class="form-control" id="" name="area" value='{{$education->name}}' readonly placeholder="Enter your Street Address/ Para" required>	
							</div>
							<label for="" class="col-sm-2 col-form-label ">Passing Year</label>
							<div class="col-sm-4 ">
							  <input type="number" class="form-control" id="" name="p_year" value='{{$education->p_year}}' placeholder="Enter your Passing Year" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Board</label>
							<div class="col-sm-4 ">
							<input type="text" class="form-control" id="" name="board" value='{{$education->board}}' readonly placeholder="Enter your Street Address/ Para" required>	
							</div>
							<label for="" class="col-sm-2 col-form-label ">Subject</label>
							<div class="col-sm-4 ">
							<input type="text" class="form-control" id="" name="subject" value='{{$education->subject}}' readonly placeholder="Enter your Street Address/ Para" required>	
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Grade/Division </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="" name="grade"  value='{{$education->grade}}' placeholder="Enter your Street Address/ Para" required>
							</div>
						</div>
						<div class="form-group row ">
                          <label class="col-sm-2 col-form-label ">Validate User </label>
                                <div class="col-sm-3">
                                        <select id="" class="form-control" name="is_valid" required>
                                            <option value="select" selected>Please Validate</option>
                                            <option value="0"{{ $education->is_valid == 0 ? 'selected' : '' }}>Not Approved</option>
                                            <option value="1"{{ $education->is_valid == 1 ? 'selected' : '' }}>Approved</option>
                                            
                                        </select>
                                </div>
							</div>
						<div class="form-group row">
							<div class="col-sm-12 text-center">
							  <button type="submit" class="btn btn-info">Submit</button>
							</div>
						  </div>
					</form>
					@endforeach
				</div>

    	<section class="registration-logo container">
				<div class="text-center">
					<div class="logo-image py-4">
						<img src="{{asset('assets/image/01.png')}}" alt="n/a">
					</div>
				</div>
				@foreach(App\Experience::orderBy('id','desc')->where('user_id',$user->id)->get() as $experience) 
				@if($experience->is_valid == 1)
				<h4 class="text-center alert-primary w-100 p-3 ">Approved</h4>
				@else
				<h4 class="text-center alert-danger w-100 p-3">Not-Approved</h4>
				@endif
			<br>
			<br>
			<br>
            <div class="experience-information">
					<h5 class="text-center">Experience Skill</h5>
				
					
					<form method="post" action="{{ route('experienceUpdates',$experience->id) }}" enctype="multipart/form-data">
					@csrf
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Company Name</label>
							<div class="col-sm-4 ">
								<input type="text" class="form-control" id="" name="name" value='{{$experience->name}}' placeholder="Enter the company name" required>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Post Held</label>
							<div class="col-sm-4 ">
								<input type="text" class="form-control" id="" name="post"value='{{$experience->post}}'  placeholder="Enter the Post Held" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Serve From</label>
							<div class="col-sm-4 ">
								<input type="date" class="form-control" id="" name="from"value='{{$experience->from}}'   required>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Serve Till</label>
							<div class="col-sm-4 ">
								<input type="date/text" class="form-control" id="" name="till" value='{{$experience->till}}' placeholder="Enter the Serve Till Date" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Address</label>
							<div class="col-sm-10 ">
								<input type="date/text" class="form-control" id="" name="address" value='{{$experience->address}}' placeholder="Enter the company Address" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Phone/Mobile*</label>
							<div class="col-sm-4 ">
								<input type="text" class="form-control" id="" name="phone" value='{{$experience->phone}}' required>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Contact Person</label>
							<div class="col-sm-4 ">
								<input type="text" class="form-control" id="" name="cPerson" value='{{$experience->cPerson}}' placeholder="Enter the content person Information" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Email</label>
							<div class="col-sm-10 ">
								<input type="email" class="form-control" id="" name="email" value='{{$experience->email}}' placeholder="Enter the email address" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Responsibility</label>
							<div class="col-sm-10 ">
								<input type="text" class="form-control" id="" name="responsibilty" value='{{$experience->responsibilty}}' placeholder="Enter your Responsibility" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Achievement</label>
							<div class="col-sm-10 ">
								<input type="text" class="form-control" id="" name="achivements" value='{{$experience->achivements}}'  placeholder="Enter your Achievements" required>
							</div>
						</div>
						<div class="form-group row ">
                          <label class="col-sm-2 col-form-label ">Validate User </label>
                                <div class="col-sm-3">
                                        <select id="" class="form-control" name="is_valid" required>
                                            <option value="select" selected>Please Validate</option>
                                            <option value="0"{{ $experience->is_valid == 0 ? 'selected' : '' }}>Not Approved</option>
                                            <option value="1"{{ $experience->is_valid == 1 ? 'selected' : '' }}>Approved</option>
                                            
                                        </select>
                                </div>
							</div>
						<div class="form-group row">
							<div class="col-sm-12 text-center">
							  <button type="submit" class="btn btn-info">Submit</button>
							</div>
						  </div>
					</form>
					@endforeach
				</div>
            </section>

                <section class="registration-logo container">
            <div class="text-center">
                <div class="logo-image py-4">
                    <img src="{{asset('assets/image/01.png')}}" alt="n/a">
                </div>
			</div>
			@foreach(App\Language::orderBy('id','desc')->where('user_id',$user->id)->get() as $language) 
			@if($language->is_valid == 1)
			<h4 class="text-center alert-primary w-100 p-3 ">Approved</h4>
			@else
			<h4 class="text-center alert-danger w-100 p-3">Not-Approved</h4>
			@endif

			<br>
			<br>
			<br>

			<div class="language-information">
					<h5 class="text-center">Language Skill</h5>
				
					<form method="post" action="{{ route('languageUpdates',$language->id) }}" enctype="multipart/form-data">
					@csrf
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Language</label>
							<div class="col-sm-4 ">
							<input type="text" class="form-control" id="" name="language" value='{{$language->language}}' readonly placeholder="Enter your Street Address/ Para" required>	
							</div>
							<label for="" class="col-sm-2 col-form-label ">Oral Skill</label>
							<div class="col-sm-4 ">
							<input type="text" class="form-control" id="" name="oral" value='{{$language->oral}}' readonly placeholder="Enter your Street Address/ Para" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Writing Skill</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="writing" value='{{$language->writing}}' readonly placeholder="Enter your Street Address/ Para" required>
							</div>
						</div>
                        <div class="form-group row ">
                          <label class="col-sm-2 col-form-label ">Validate User </label>
                                <div class="col-sm-3">
                                        <select id="" class="form-control" name="is_valid" required>
                                            <option value="select" selected>Please Validate</option>
                                            <option value="0"{{ $language->is_valid == 0 ? 'selected' : '' }}>Not Approved</option>
                                            <option value="1"{{ $language->is_valid == 1 ? 'selected' : '' }}>Approved</option>
                                            
                                        </select>
                                </div>
							</div>
						<div class="form-group row">
							<div class="col-sm-12 text-center">
							  <button type="submit" class="btn btn-info">Submit</button>
							</div>
						  </div>
					</form>
					@endforeach
		</div>
	</session>
    <!-- dashbaord statistics seciton start -->
    <section class="registration-logo container">
            <div class="text-center">
                <div class="logo-image py-4">
                    <img src="{{asset('assets/image/01.png')}}" alt="n/a">
                </div>
			</div>
			@foreach(App\Mailing::orderBy('id','desc')->where('user_id',$user->id)->get() as $mailing) 
			@if($mailing->is_valid == 1)
			<h4 class="text-center alert-primary w-100 p-3 ">Approved</h4>
			@else
			<h4 class="text-center alert-danger w-100 p-3">Not-Approved</h4>
			@endif



			<br>
			<br>
			<br>
			<div class="mailing-information">
			<h5 class="text-center">Mailing Information</h5>
			<div class="mailing-information">	
				<form method="post" action="{{ route('mailingUpdates',$mailing->id) }}" enctype="multipart/form-data">
						@csrf
							<div class="form-group row">
								<label for="" class="col-sm-2 col-form-label ">Street Address/ Para</label>
								<div class="col-sm-10 ">
								<input type="text" class="form-control" id="" name="street" value='{{$mailing->street}}' placeholder="Enter your Street Address/ Para" required>
								</div>
							</div>
							<div class="form-group row">
								<label for="" class="col-sm-2 col-form-label ">Division</label>
								<div class="col-sm-4 ">
								<input type="text" class="form-control" id="" name="division" value='{{$mailing->division}}' readonly placeholder="Enter your Street Address/ Para" required>
								</div>
								<label for="" class="col-sm-2 col-form-label ">District</label>
								<div class="col-sm-4 ">
								<input type="text" class="form-control" id="" name="district" value='{{$mailing->district}}' readonly placeholder="Enter your Street Address/ Para" required>
								</div>
							</div>
							<div class="form-group row">
								<label for="" class="col-sm-2 col-form-label ">Thana/ Upazilla	</label>
								<div class="col-sm-4 ">
								<input type="text" class="form-control" id="" name="thana" value='{{$mailing->thana}}' readonly placeholder="Enter your Street Address/ Para" required>
								</div>
								<label for="" class="col-sm-2 col-form-label ">Ward/ Union</label>
								<div class="col-sm-4 ">
								<input type="text" class="form-control" id="" name="ward" value='{{$mailing->ward}}' readonly placeholder="Enter your Street Address/ Para" required>
								</div>
							</div>
							<div class="form-group row">
								<label for="" class="col-sm-2 col-form-label ">Area/ Village</label>
								<div class="col-sm-4 ">
								<input type="text" class="form-control" id="" name="area" value='{{$mailing->area}}' readonly placeholder="Enter your Street Address/ Para" required>
								</div>
								<label for="" class="col-sm-2 col-form-label ">Post Office</label>
								<div class="col-sm-4">
									<input type="number" class="form-control" id="" name="post"value='{{$mailing->post}}' placeholder="Enter your Postal code" required>
								</div>
							</div>
							<div class="form-group row">
								<label for="" class="col-sm-2 col-form-label ">Email</label>
								<div class="col-sm-4 ">
									<input type="email" class="form-control" id="" name="email" value='{{$mailing->email}}' placeholder="Enter your Email Address" required>
								</div>
								<label for="" class="col-sm-2 col-form-label ">Phone/ Mobile</label>
								<div class="col-sm-4 ">
									<input type="text" class="form-control" id="" name="phone" value='{{$mailing->phone}}' placeholder="Enter your Phone/ Mobile no" required>
								</div>
							</div>
							<div class="form-group row ">
							<label class="col-sm-2 col-form-label ">Validate User </label>
									<div class="col-sm-3">
											<select id="" class="form-control" name="is_valid" required>
												<option value="select" selected>Please Validate</option>
												<option value="0"{{ $mailing->is_valid == 0 ? 'selected' : '' }}>Not Approved</option>
												<option value="1"{{ $mailing->is_valid == 1 ? 'selected' : '' }}>Approved</option>
												
											</select>
									</div>
								</div>
							<div class="form-group row">
								<div class="col-sm-12 text-center">
								<button type="submit" class="btn btn-info">Submit</button>
								</div>
							</div>
				</form>
				@endforeach
			</div>
		</section>

        <section class="registration-logo container">
            <div class="text-center">
                <div class="logo-image py-4">
                    <img src="{{asset('assets/image/01.png')}}" alt="n/a">
                </div>
			</div>
			@foreach(App\Nominee::orderBy('id','desc')->where('user_id',$user->id)->get() as $nominee) 
			@if($nominee->is_valid == 1)
			<h4 class="text-center alert-primary w-100 p-3 ">Approved</h4>
			@else
			<h4 class="text-center alert-danger w-100 p-3">Not-Approved</h4>
			@endif

			<br>
			<br>
			<br>
            <div class="nominee-information">
					<h5 class="text-center">Nominee Information</h5>
					
					<form method="post" action="{{ route('nomineeUpdates',$nominee->id) }}" enctype="multipart/form-data">
					@csrf
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Nominee Name</label>
							<div class="col-sm-4 ">
							  <input type="text" class="form-control" id="" name="name"  value='{{$nominee->name}}' placeholder="Enter your Nominee Name" required>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Relation</label>
							<div class="col-sm-4 ">
							  <input type="text" class="form-control" id="" name="relation" value='{{$nominee->relation}}' placeholder="Enter your Nominee Relation" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Phone/ Mobile no</label>
							<div class="col-sm-10 ">
							  <input type="text" class="form-control" id="" name="phone" value='{{$nominee->phone}}' placeholder="Enter your Nominee Phone/ Mobile no" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Address</label>
							<div class="col-sm-10 ">
								<input type="text" class="form-control" id="" name="address"  value='{{$nominee->address}}' placeholder="Enter your Nominee Address" required>
							</div>
						</div>
                        <div class="form-group row ">
                          <label class="col-sm-2 col-form-label ">Validate User </label>
                                <div class="col-sm-3">
                                        <select id="" class="form-control" name="is_valid" required>
                                            <option value="select" selected>Please Validate</option>
                                            <option value="0"{{ $nominee->is_valid == 0 ? 'selected' : '' }}>Not Approved</option>
                                            <option value="1"{{ $nominee->is_valid == 1 ? 'selected' : '' }}>Approved</option>
                                            
                                        </select>
                                </div>
							</div>

						<div class="form-group row">
							<div class="col-sm-12 text-center">
							  <button type="submit" class="btn btn-info">Submit</button>
							</div>
						  </div>
					</form>
					@endforeach
				
		</div>
	</section>

</div>

@endsection
