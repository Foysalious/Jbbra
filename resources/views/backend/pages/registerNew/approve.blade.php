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

        <!-- dashbaord statistics seciton start -->
        <section class="registration-logo container">
            <div class="text-center">
                <div class="logo-image py-4">
                    <img src="{{asset('assets/image/01.png')}}" alt="n/a">
                </div>
			</div>
			@if($user->Address->is_valid == 1)
			<h4 class="text-center alert-primary w-100 p-3 ">Approved</h4>
			@else
			<h4 class="text-center alert-danger w-100 p-3">Not-Approved</h4>
			@endif
			<br>
			<br>
			<br>
				<div class="address-fild">
					<h5 class="text-center">Address</h5>
					
					<form method="post" action="{{ route('addressUpdate',$user->address->id) }}" enctype="multipart/form-data">
					@csrf
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Street Address/ Para</label>
							<div class="col-sm-10 ">
							  <input type="text" class="form-control" id="" name="street" value='{{$user->address->street}}' placeholder="Enter your Street Address/ Para" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Division</label>
							<div class="col-sm-4 ">
							<input type="text" class="form-control" id="" name="division" value='{{$user->address->division}}' readonly placeholder="Enter your Street Address/ Para" required>
							</div>
							<label for="" class="col-sm-2 col-form-label ">District</label>
							<div class="col-sm-4 ">
							<input type="text" class="form-control" id="" name="disctrict" value='{{$user->address->disctrict}}' readonly placeholder="Enter your Street Address/ Para" required>	
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
							<input type="text" class="form-control" id="" name="ward" value='{{$user->address->ward}}' readonly placeholder="Enter your Street Address/ Para" required>	
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Area/ Village</label>
							<div class="col-sm-4 ">
							<input type="text" class="form-control" id="" name="area" value='{{$user->address->area}}' readonly placeholder="Enter your Street Address/ Para" required>								
							</div>
							<label for="" class="col-sm-2 col-form-label ">Post Office</label>
							<div class="col-sm-4">
								<input type="number" class="form-control" id="" value='{{$user->address->post}}' name="post" placeholder="Enter your Postal code" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Email</label>
							<div class="col-sm-4 ">
								<input type="email" class="form-control" id="" name="email" value='{{$user->address->email}}' placeholder="Enter your Email Address" required>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Phone/ Mobile</label>
							<div class="col-sm-4 ">
								<input type="text" class="form-control" id="" name="phone" value='{{$user->address->phone}}' placeholder="Enter your Phone/ Mobile no" required>
							</div>
						</div>
                        <div class="form-group row ">
                          <label class="col-sm-2 col-form-label ">Validate User </label>
                                <div class="col-sm-3">
                                        <select id="" class="form-control" name="is_valid" required>
                                            <option value="select" selected>Please Validate</option>
                                            <option value="0"{{ $user->Address->is_valid == 0 ? 'selected' : '' }}>Not Approved</option>
                                            <option value="1"{{ $user->Address->is_valid == 1 ? 'selected' : '' }}>Approved</option>
                                            
                                        </select>
                                </div>
							</div>
						<div class="form-group row">
							<div class="col-sm-10">
							  <button type="submit" class="btn btn-info">Submit</button>
							</div>
						  </div>
						  </form>

                          <section class="registration-logo container">
            <div class="text-center">
                <div class="logo-image py-4">
                    <img src="{{asset('assets/image/01.png')}}" alt="n/a">
                </div>
			</div>
			@if($user->Education->is_valid == 1)
			<h4 class="text-center alert-primary w-100 p-3 ">Approved</h4>
			@else
			<h4 class="text-center alert-danger w-100 p-3">Not-Approved</h4>
			@endif
			
			<br>
			<br>
			<br>
            <div class="educational-information">
					<h5 class="text-center">Educational Information</h5>
				
					<form method="post" action="{{ route('educationUpdate',$user->education->id) }}" enctype="multipart/form-data">
					@csrf
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Degree Name</label>
							<div class="col-sm-4 ">
							<input type="text" class="form-control" id="" name="area" value='{{$user->education->name}}' readonly placeholder="Enter your Street Address/ Para" required>	
							</div>
							<label for="" class="col-sm-2 col-form-label ">Passing Year</label>
							<div class="col-sm-4 ">
							  <input type="number" class="form-control" id="" name="p_year" value='{{$user->education->p_year}}' placeholder="Enter your Passing Year" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Board</label>
							<div class="col-sm-4 ">
							<input type="text" class="form-control" id="" name="board" value='{{$user->education->board}}' readonly placeholder="Enter your Street Address/ Para" required>	
							</div>
							<label for="" class="col-sm-2 col-form-label ">Subject</label>
							<div class="col-sm-4 ">
							<input type="text" class="form-control" id="" name="subject" value='{{$user->education->subject}}' readonly placeholder="Enter your Street Address/ Para" required>	
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Grade/Division </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="" name="grade"  value='{{$user->education->grade}}' placeholder="Enter your Street Address/ Para" required>
							</div>
						</div>
						<div class="form-group row ">
                          <label class="col-sm-2 col-form-label ">Validate User </label>
                                <div class="col-sm-3">
                                        <select id="" class="form-control" name="is_valid" required>
                                            <option value="select" selected>Please Validate</option>
                                            <option value="0"{{ $user->education->is_valid == 0 ? 'selected' : '' }}>Not Approved</option>
                                            <option value="1"{{ $user->education->is_valid == 1 ? 'selected' : '' }}>Approved</option>
                                            
                                        </select>
                                </div>
							</div>
						<div class="form-group row">
							<div class="col-sm-10">
							  <button type="submit" class="btn btn-info">Submit</button>
							</div>
						  </div>
					</form>
				</div>

                <section class="registration-logo container">
            <div class="text-center">
                <div class="logo-image py-4">
                    <img src="{{asset('assets/image/01.png')}}" alt="n/a">
                </div>
			</div>
		
			@if($user->Experience->is_valid == 1)
			<h4 class="text-center alert-primary w-100 p-3 ">Approved</h4>
			@else
			<h4 class="text-center alert-danger w-100 p-3">Not-Approved</h4>
			@endif
			<br>
			<br>
			<br>
            <div class="experience-information">
					<h5 class="text-center">Experience Skill</h5>
					
					<form method="post" action="{{ route('experienceUpdate',$user->experience->id) }}" enctype="multipart/form-data">
					@csrf
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Company Name</label>
							<div class="col-sm-4 ">
								<input type="text" class="form-control" id="" name="name" value='{{$user->experience->name}}' placeholder="Enter the company name" required>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Post Held</label>
							<div class="col-sm-4 ">
								<input type="text" class="form-control" id="" name="post"value='{{$user->experience->post}}'  placeholder="Enter the Post Held" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Serve From</label>
							<div class="col-sm-4 ">
								<input type="date" class="form-control" id="" name="from"value='{{$user->experience->from}}'   required>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Serve Till</label>
							<div class="col-sm-4 ">
								<input type="date/text" class="form-control" id="" name="till" value='{{$user->experience->till}}' placeholder="Enter the Serve Till Date" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Address</label>
							<div class="col-sm-10 ">
								<input type="date/text" class="form-control" id="" name="address" value='{{$user->experience->address}}' placeholder="Enter the company Address" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Phone/Mobile*</label>
							<div class="col-sm-4 ">
								<input type="text" class="form-control" id="" name="phone" value='{{$user->experience->phone}}' required>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Contact Person</label>
							<div class="col-sm-4 ">
								<input type="text" class="form-control" id="" name="cPerson" value='{{$user->experience->cPerson}}' placeholder="Enter the content person Information" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Email</label>
							<div class="col-sm-10 ">
								<input type="email" class="form-control" id="" name="email" value='{{$user->experience->email}}' placeholder="Enter the email address" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Responsibility</label>
							<div class="col-sm-10 ">
								<input type="text" class="form-control" id="" name="responsibilty" value='{{$user->experience->responsibilty}}' placeholder="Enter your Responsibility" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Achievement</label>
							<div class="col-sm-10 ">
								<input type="text" class="form-control" id="" name="achivements" value='{{$user->experience->achivements}}'  placeholder="Enter your Achievements" required>
							</div>
						</div>
						<div class="form-group row ">
                          <label class="col-sm-2 col-form-label ">Validate User </label>
                                <div class="col-sm-3">
                                        <select id="" class="form-control" name="is_valid" required>
                                            <option value="select" selected>Please Validate</option>
                                            <option value="0"{{ $user->experience->is_valid == 0 ? 'selected' : '' }}>Not Approved</option>
                                            <option value="1"{{ $user->experience->is_valid == 1 ? 'selected' : '' }}>Approved</option>
                                            
                                        </select>
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

                <section class="registration-logo container">
            <div class="text-center">
                <div class="logo-image py-4">
                    <img src="{{asset('assets/image/01.png')}}" alt="n/a">
                </div>
			</div>
			@if($user->Language->is_valid == 1)
			<h4 class="text-center alert-primary w-100 p-3 ">Approved</h4>
			@else
			<h4 class="text-center alert-danger w-100 p-3">Not-Approved</h4>
			@endif

			<br>
			<br>
			<br>

				<div class="language-information">
					<h5 class="text-center">Language Skill</h5>
					<form method="post" action="{{ route('languageUpdate',$user->language->id) }}" enctype="multipart/form-data">
					@csrf
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Language</label>
							<div class="col-sm-4 ">
							<input type="text" class="form-control" id="" name="language" value='{{$user->language->language}}' readonly placeholder="Enter your Street Address/ Para" required>	
							</div>
							<label for="" class="col-sm-2 col-form-label ">Oral Skill</label>
							<div class="col-sm-4 ">
							<input type="text" class="form-control" id="" name="oral" value='{{$user->language->oral}}' readonly placeholder="Enter your Street Address/ Para" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Writing Skill</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="writing" value='{{$user->language->writing}}' readonly placeholder="Enter your Street Address/ Para" required>
							</div>
						</div>
                        <div class="form-group row ">
                          <label class="col-sm-2 col-form-label ">Validate User </label>
                                <div class="col-sm-3">
                                        <select id="" class="form-control" name="is_valid" required>
                                            <option value="select" selected>Please Validate</option>
                                            <option value="0"{{ $user->language->is_valid == 0 ? 'selected' : '' }}>Not Approved</option>
                                            <option value="1"{{ $user->language->is_valid == 1 ? 'selected' : '' }}>Approved</option>
                                            
                                        </select>
                                </div>
							</div>
						<div class="form-group row">
							<div class="col-sm-10">
							  <button type="submit" class="btn btn-info">Submit</button>
							</div>
						  </div>
					</form>
				</div>

                <!-- dashbaord statistics seciton start -->
        <section class="registration-logo container">
            <div class="text-center">
                <div class="logo-image py-4">
                    <img src="{{asset('assets/image/01.png')}}" alt="n/a">
                </div>
			</div>
		
			@if($user->Mailing->is_valid == 1)
			<h4 class="text-center alert-primary w-100 p-3 ">Approved</h4>
			@else
			<h4 class="text-center alert-danger w-100 p-3">Not-Approved</h4>
			@endif



			<br>
			<br>
			<br>
			<div class="mailing-information">
			<h5 class="text-center">Mailing Information</h5>
						
			<form method="post" action="{{ route('mailingUpdate',$user->mailing->id) }}" enctype="multipart/form-data">
					@csrf
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Street Address/ Para</label>
							<div class="col-sm-10 ">
							  <input type="text" class="form-control" id="" name="street" value='{{$user->mailing->street}}' placeholder="Enter your Street Address/ Para" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Division</label>
							<div class="col-sm-4 ">
							<input type="text" class="form-control" id="" name="division" value='{{$user->mailing->division}}' readonly placeholder="Enter your Street Address/ Para" required>
							</div>
							<label for="" class="col-sm-2 col-form-label ">District</label>
							<div class="col-sm-4 ">
							<input type="text" class="form-control" id="" name="district" value='{{$user->mailing->district}}' readonly placeholder="Enter your Street Address/ Para" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Thana/ Upazilla	</label>
							<div class="col-sm-4 ">
							<input type="text" class="form-control" id="" name="thana" value='{{$user->mailing->thana}}' readonly placeholder="Enter your Street Address/ Para" required>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Ward/ Union</label>
							<div class="col-sm-4 ">
							<input type="text" class="form-control" id="" name="ward" value='{{$user->mailing->ward}}' readonly placeholder="Enter your Street Address/ Para" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Area/ Village</label>
							<div class="col-sm-4 ">
							<input type="text" class="form-control" id="" name="area" value='{{$user->mailing->area}}' readonly placeholder="Enter your Street Address/ Para" required>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Post Office</label>
							<div class="col-sm-4">
								<input type="number" class="form-control" id="" name="post"value='{{$user->mailing->post}}' placeholder="Enter your Postal code" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Email</label>
							<div class="col-sm-4 ">
								<input type="email" class="form-control" id="" name="email" value='{{$user->mailing->email}}' placeholder="Enter your Email Address" required>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Phone/ Mobile</label>
							<div class="col-sm-4 ">
								<input type="text" class="form-control" id="" name="phone" value='{{$user->mailing->phone}}' placeholder="Enter your Phone/ Mobile no" required>
							</div>
						</div>
                        <div class="form-group row ">
                          <label class="col-sm-2 col-form-label ">Validate User </label>
                                <div class="col-sm-3">
                                        <select id="" class="form-control" name="is_valid" required>
                                            <option value="select" selected>Please Validate</option>
                                            <option value="0"{{ $user->mailing->is_valid == 0 ? 'selected' : '' }}>Not Approved</option>
                                            <option value="1"{{ $user->mailing->is_valid == 1 ? 'selected' : '' }}>Approved</option>
                                            
                                        </select>
                                </div>
							</div>
						<div class="form-group row">
							<div class="col-sm-10">
							  <button type="submit" class="btn btn-info">Submit</button>
							</div>
						  </div>
					</form>
				</div>

                <section class="registration-logo container">
            <div class="text-center">
                <div class="logo-image py-4">
                    <img src="{{asset('assets/image/01.png')}}" alt="n/a">
                </div>
			</div>
			@if($user->Nominee->is_valid == 1)
			<h4 class="text-center alert-primary w-100 p-3 ">Approved</h4>
			@else
			<h4 class="text-center alert-danger w-100 p-3">Not-Approved</h4>
			@endif

			<br>
			<br>
			<br>
            <div class="nominee-information">
					<h5 class="text-center">Nominee Information</h5>
					<form method="post" action="{{ route('nomineeUpdate',$user->nominee->id) }}" enctype="multipart/form-data">
					@csrf
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Nominee Name</label>
							<div class="col-sm-4 ">
							  <input type="text" class="form-control" id="" name="name"  value='{{$user->nominee->name}}' placeholder="Enter your Nominee Name" required>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Relation</label>
							<div class="col-sm-4 ">
							  <input type="text" class="form-control" id="" name="relation" value='{{$user->nominee->relation}}' placeholder="Enter your Nominee Relation" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Phone/ Mobile no</label>
							<div class="col-sm-10 ">
							  <input type="text" class="form-control" id="" name="phone" value='{{$user->nominee->phone}}' placeholder="Enter your Nominee Phone/ Mobile no" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Address</label>
							<div class="col-sm-10 ">
								<input type="text" class="form-control" id="" name="address"  value='{{$user->nominee->address}}' placeholder="Enter your Nominee Address" required>
							</div>
						</div>
                        <div class="form-group row ">
                          <label class="col-sm-2 col-form-label ">Validate User </label>
                                <div class="col-sm-3">
                                        <select id="" class="form-control" name="is_valid" required>
                                            <option value="select" selected>Please Validate</option>
                                            <option value="0"{{ $user->nominee->is_valid == 0 ? 'selected' : '' }}>Not Approved</option>
                                            <option value="1"{{ $user->nominee->is_valid == 1 ? 'selected' : '' }}>Approved</option>
                                            
                                        </select>
                                </div>
							</div>

						<div class="form-group row">
							<div class="col-sm-10">
							  <button type="submit" class="btn btn-info">Submit</button>
							</div>
						  </div>
					</form>
				</div>

                <section class="registration-logo container">
            <div class="text-center">
                <div class="logo-image py-4">
                    <img src="{{asset('assets/image/01.png')}}" alt="n/a">
                </div>
			</div>
			
			@if($user->Personal->is_valid == 1)
			<h4 class="text-center alert-primary w-100 p-3 ">Approved</h4>
			@else
			<h4 class="text-center alert-danger w-100 p-3">Not-Approved</h4>
			@endif

			<div class="personal-information">
				<h5 class="text-center">Personal Information</h5>
				<div class="personal-fild">
					<form method="post" action="{{ route('personalupdate',$user->personal->id) }}" enctype="multipart/form-data">
						@csrf
						<div class="form-group row">
							<label for="first-name" class="col-sm-2 col-form-label ">First name</label>
							<div class="col-sm-10 ">
							  <input type="text" class="form-control" id="" name="first_name"  value='{{$user->personal->first_name}}'placeholder="Enter your First Name" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="middle-name" class="col-sm-2 col-form-label ">Middle name</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="middle_name"value='{{$user->personal->middle_name}}' placeholder="Enter your Middle Name" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="last-name" class="col-sm-2 col-form-label ">Last name</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="last_name"value='{{$user->personal->last_name}}' placeholder="Enter your Last Name"  required>
							</div>
						</div>

						<div class="form-group row">
							<label for="father-name" class="col-sm-2 col-form-label ">Father's name</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="father_name" value='{{$user->personal->father_name}}' placeholder="Enter your Father's Name"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="mother-name" class="col-sm-2 col-form-label ">Mother's name</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="mother_name"value='{{$user->personal->mother_name}}' placeholder="Enter your Mother's Name"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="spouse-name" class="col-sm-2 col-form-label ">Spouse's name</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="spouse_name" value='{{$user->personal->spouse_name}}' placeholder="Enter your Spouse's Name"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="national-id" class="col-sm-2 col-form-label ">National ID</label>
							<div class="col-sm-10 ">
							<input type="number" class="form-control" id="" name="nid" placeholder="Enter your National ID Number"  value='{{$user->personal->nid}}' required>
							<small id="" class="form-text text-muted">Example: 1245871245758</small>
							</div>
						</div>
						<div class="form-group row">
							<label for="birth-country" class="col-sm-2 col-form-label ">Birth country</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="country" value='{{$user->personal->country}}' readonly placeholder="Enter your Street Address/ Para" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Birth Date</label>
							<div class="col-sm-10 ">
							<input type="date" class="form-control" id="" name="b_date" value='{{$user->personal->b_date}}' required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Age</label>
							<div class="col-sm-4 ">
							<input type="number" class="form-control" id="" name="age" placeholder="Enter your Age" value='{{$user->personal->age}}' required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Nationality</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="nationality" placeholder="Enter your Nationality" value='{{$user->personal->nationality}}' required>
							</div>
						</div>

						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Gender</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="gender" value='{{$user->personal->gender}}' readonly placeholder="Enter your Street Address/ Para" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Marital Status</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="marital" value='{{$user->personal->marital}}' readonly placeholder="Enter your Street Address/ Para" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Religion</label>
							<div class="col-sm-10 ">
							<input type="text" class="form-control" id="" name="religion" value='{{$user->personal->religion}}' readonly placeholder="Enter your Street Address/ Para" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Weight (kg)</label>
							<div class="col-sm-10 ">
							<input type="number" class="form-control" id="" name="weight" placeholder="Enter your Weight" value='{{$user->personal->weight}}' required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Height (meter)</label>
							<div class="col-sm-10 ">
							<input type="number" class="form-control" id="" name="height" placeholder="Enter your Height" value='{{$user->personal->height}}' required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Number of Son</label>
							<div class="col-sm-10 ">
							<input type="number" class="form-control" id="" name="son" placeholder="Enter your Number of Son" value='{{$user->personal->son}}' required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Number of Daughter</label>
							<div class="col-sm-10 ">
							<input type="number" class="form-control" id="" name="daughter" placeholder="Enter your Number of Daughter" value='{{$user->personal->daughter}}' required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Passport Issue Date</label>
							<div class="col-sm-10 ">
							<input type="date" class="form-control" id="" name="issue_date" placeholder="Enter your Passport Issue Date" value='{{$user->personal->issue_date}}' required>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Passport No</label>
							<div class="col-sm-10 ">
							<input type="text/number" class="form-control" id="" name="passNo" placeholder="Enter your Passport No"  value='{{$user->personal->passNo}}' required>
							<small id="" class="form-text text-muted">Example (A 1234567 or AA 1234567)</small>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Desired Job (Please select three options)</label>
							<div class="col-sm-3 ">
							<input type="text" class="form-control" id="" name="d_job1" value='{{$user->personal->d_job1}}' readonly placeholder="Enter your Street Address/ Para" required>
							</div>
							<div class="col-sm-3 ">
							<input type="text" class="form-control" id="" name="d_job2" value='{{$user->personal->d_job2}}' readonly placeholder="Enter your Street Address/ Para" required>
							</div>
							<div class="col-sm-3 ">
							<input type="text" class="form-control" id="" name="d_job3" value='{{$user->personal->d_job3}}' readonly placeholder="Enter your Street Address/ Para" required>
							</div>
						</div>

                        <div class="form-group">
                                   <label>User Image *</label>
                                    <img src="{{ asset('images/personal/'. $user->personal->image) }}"  width="100px" alt="">
                                    <input type="file" class="form-control-file" name="image">
                          </div>
						  </div>

                          <div class="form-group row ">
                          <label class="col-sm-2 col-form-label ">Validate User </label>
                                <div class="col-sm-3">
                                        <select id="" class="form-control" name="is_valid" required>
                                            <option value="select" selected>Please Validate</option>
                                            <option value="0"{{ $user->nominee->personal == 0 ? 'selected' : '' }}>Not Approved</option>
                                            <option value="1"{{ $user->nominee->personal == 1 ? 'selected' : '' }}>Approved</option>
                                            
                                        </select>
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
