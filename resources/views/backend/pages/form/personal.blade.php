
@extends('backend.template.layout')
@section('body-content')
<!-- main content start -->
<div class="main-content">
    <div class="container-fluid">
        
      
<!-- main content start -->
<div class="main-content">
    <div class="container-fluid">
        
        <!-- page indicator start -->
        <section class="page-indicator">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li>
                            <i class="fas fa-bars"></i>
                        </li>
                        <li>
						personal
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page indicator end -->
        </div>
        </div>
        <!-- dashbaord statistics seciton start -->
        <section class="statistics">

            <!-- add row start -->
            <div class="row add-row">
                <div class="col-md-12 text-right">
                @if(App\Personal::count()<1  )
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        add new persona
                    </button>
                @endif
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">Personal</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
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
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>   

                </div>
            </div>
            <!-- add row end -->


            <!-- manage row start -->
            <div class="row">

                
                <div class="col-md-12 table-responsive">
                    <table class="table table-striped clera-fix" id="myTable">
                        <thead>
                            <tr>
                                <td>Id</td>
                            
                                <td>First_Name</td>
                                <td>Last_Name</td>
                                <td>Middle_Name</td>
                                <td>Father_Name</td>
                                <td>Mother_Name</td>
                                <td>Spouse_Name</td>
                                <td>Nid</td>
                                <td>Country</td>
                                <td>B_Date</td>
                                <td>Age</td>
                                <td>Nationality</td>
                                <td>Gender</td>
                                <td>Marital</td>
                                <td>Religion</td>
                                <td>Weight</td>
                                <td>Height</td>
                                <td>Son</td>
                                <td>Daughter</td>
                                <td>Issue_Date</td>
                                <td>PassNo</td>
                                <td>D_Job1</td>
                                <td>D_Job2</td>
                                <td>D_Job3</td>
                                <td>Image</td>

                                <td>action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($personals as $personal)
                            <tr>
                                <th>{{ $i }}</th>
                            
                                <td>
                                {{$personal->first_name}}
                                </td>
                                <td>
                                {{$personal->last_name}}
                                </td>
                                <td>
                                {{$personal->middle_name}}
                                </td>
                                <td>
                                {{$personal->father_name}}
                                </td>
                                <td>
                                {{$personal->mother_name}}
                                </td>
                                <td>
                                {{$personal->spouse_name}}
                                </td>
                                <td>
                                {{$personal->nid}}
                                </td>
                                <td>
                                {{$personal->country}}
                                </td>
                                <td>
                                {{$personal->b_date}}
                                </td>
                                <td>
                                {{$personal->age}}
                                </td>
                                <td>
                                {{$personal->nationality}}
                                </td>
                                <td>
                                {{$personal->gender}}
                                </td>
                                <td>
                                {{$personal->marital}}
                                </td>
                                <td>
                                {{$personal->religion}}
                                </td>
                                <td>
                                {{$personal->weight}}
                                </td>
                                <td>
                                {{$personal->height}}
                                </td>
                                <td>
                                {{$personal->son}}
                                </td>
                                <td>
                                {{$personal->daughter}}
                                </td>
                                <td>
                                {{$personal->issue_date}}
                                </td>
                                <td>
                                {{$personal->passno}}
                                </td>
                                <td>
                                {{$personal->d_job1}}
                                </td>
                                <td>
                                {{$personal->d_job2}}
                                </td>
                                <td>
                                {{$personal->d_job3}}
                                </td>
                                <td>
                                {{$personal->image}}
                                </td>
                            
                            
                                
                                <td>
                                <!-- edit start -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{ $personal->id }}">
                                    edit
                                </button>
                                <div class="modal fade" id="edit{{ $personal->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">personal</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <form method="post" action="{{ route('personalupdate',$personal->id) }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group row">
                                                    <label for="first-name" class="col-sm-2 col-form-label ">First name</label>
                                                    <div class="col-sm-10 ">
                                                    <input type="text" class="form-control" id="" name="first_name" placeholder="Enter your First Name" value='{{$personal->first_name}}' required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="middle-name" class="col-sm-2 col-form-label ">Middle name</label>
                                                    <div class="col-sm-10 ">
                                                    <input type="text" class="form-control" id="" name="middle_name" placeholder="Enter your Middle Name" value='{{$personal->middle_name}}' required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="last-name" class="col-sm-2 col-form-label ">Last name</label>
                                                    <div class="col-sm-10 ">
                                                    <input type="text" class="form-control" id="" name="last_name" placeholder="Enter your Last Name"  value='{{$personal->last_name}}' required>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label for="father-name" class="col-sm-2 col-form-label ">Father's name</label>
                                                    <div class="col-sm-10 ">
                                                    <input type="text" class="form-control" id="" name="father_name" placeholder="Enter your Father's Name"  value='{{$personal->father_name}}' required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="mother-name" class="col-sm-2 col-form-label ">Mother's name</label>
                                                    <div class="col-sm-10 ">
                                                    <input type="text" class="form-control" id="" name="mother_name" placeholder="Enter your Mother's Name" value='{{$personal->mother_name}}' required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="spouse-name" class="col-sm-2 col-form-label ">Spouse's name</label>
                                                    <div class="col-sm-10 ">
                                                    <input type="text" class="form-control" id="" name="spouse_name" placeholder="Enter your Spouse's Name" value='{{$personal->spouse_name}}' required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="national-id" class="col-sm-2 col-form-label ">National ID</label>
                                                    <div class="col-sm-10 ">
                                                    <input type="number" class="form-control" id="" name="nid" placeholder="Enter your National ID Number" value='{{$personal->nid}}' required>
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
                                                    <input type="number" class="form-control" id="" name="weight" placeholder="Enter your Weight"  value='{{$personal->weight}}' required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-2 col-form-label">Height (meter)</label>
                                                    <div class="col-sm-10 ">
                                                    <input type="number" class="form-control" id="" name="height" placeholder="Enter your Height"  value='{{$personal->height}}' required>
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
                                                    <input type="text/number" class="form-control" id="" name="passNo" placeholder="Enter your Passport No" value='{{$personal->passNo}}' required>
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
                                                    <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1" value='{{$personal->image}}' require>
                                                </div>

                                                <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-info">Submit</button>
                                                </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- edit end -->

                                <!-- delete start -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $personal->id }}">
                                    delete
                                </button>
                                <div class="modal fade" id="delete{{ $personal->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">personal delete</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('personalDelete', $personal->id) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-success">yes</button>
                                            </form>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- delete end -->

                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- manage row end -->

        </section>
        <!-- dashbaord statistics seciton end -->

    

<!-- main content end -->

@endsection