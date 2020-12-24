
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
                                                        <option value="select">Select</option>
												
                                                            <option value="Afghanistan">Afghanistan</option>
                                                        
                                                            <option value="Albania">Albania</option>
                                                        
                                                            <option value="Algeria">Algeria</option>
                                                        
                                                            <option value="American Samoa">American Samoa</option>
                                                        
                                                            <option value="Andorra">Andorra</option>
                                                        
                                                            <option value="Angola">Angola</option>
                                                        
                                                            <option value="Anguilla">Anguilla</option>
                                                        
                                                            <option value="Antarctica">Antarctica</option>
                                                        
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                        
                                                            <option value="Argentina">Argentina</option>
                                                        
                                                            <option value="Armenia">Armenia</option>
                                                        
                                                            <option value="Aruba">Aruba</option>
                                                        
                                                            <option value="Australia">Australia</option>
                                                        
                                                            <option value="Austria">Austria</option>
                                                        
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                        
                                                            <option value="Bahamas">Bahamas</option>
                                                        
                                                            <option value="Bahrain">Bahrain</option>
                                                        
                                                            <option value="Bangladesh">Bangladesh</option>
                                                        
                                                            <option value="Barbados">Barbados</option>
                                                        
                                                            <option value="Belarus">Belarus</option>
                                                        
                                                            <option value="Belgium">Belgium</option>
                                                        
                                                            <option value="Belize">Belize</option>
                                                        
                                                            <option value="Benin">Benin</option>
                                                        
                                                            <option value="Bermuda">Bermuda</option>
                                                        
                                                            <option value="Bhutan">Bhutan</option>
                                                        
                                                            <option value="Bolivia">Bolivia</option>
                                                        
                                                            <option value="Bosnia-Herzegovina">Bosnia-Herzegovina</option>
                                                        
                                                            <option value="Botswana">Botswana</option>
                                                        
                                                            <option value="Bouvet Island">Bouvet Island</option>
                                                        
                                                            <option value="Brazil">Brazil</option>
                                                        
                                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                        
                                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                        
                                                            <option value="Bulgaria">Bulgaria</option>
                                                        
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                        
                                                            <option value="Burundi">Burundi</option>
                                                        
                                                            <option value="Cambodia">Cambodia</option>
                                                        
                                                            <option value="Cameroon">Cameroon</option>
                                                        
                                                            <option value="Canada">Canada</option>
                                                        
                                                            <option value="Cape Verde">Cape Verde</option>
                                                        
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                        
                                                            <option value="Central African Republic">Central African Republic</option>
                                                        
                                                            <option value="Chad">Chad</option>
                                                        
                                                            <option value="Chile">Chile</option>
                                                        
                                                            <option value="China">China</option>
                                                        
                                                            <option value="Christmas Island">Christmas Island</option>
                                                        
                                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                        
                                                            <option value="Colombia">Colombia</option>
                                                        
                                                            <option value="Comoros">Comoros</option>
                                                        
                                                            <option value="Congo">Congo</option>
                                                        
                                                            <option value="Congo (formerly Zaire)">Congo (formerly Zaire)</option>
                                                        
                                                            <option value="Cook Islands">Cook Islands</option>
                                                        
                                                            <option value="Costa Rica">Costa Rica</option>
                                                        
                                                            <option value="Croatia">Croatia</option>
                                                        
                                                            <option value="Cuba">Cuba</option>
                                                        
                                                            <option value="Cyprus">Cyprus</option>
                                                        
                                                            <option value="Czech Republic">Czech Republic</option>
                                                        
                                                            <option value="Denmark">Denmark</option>
                                                        
                                                            <option value="Djibouti">Djibouti</option>
                                                        
                                                            <option value="Dominica">Dominica</option>
                                                        
                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                        
                                                            <option value="East Timor">East Timor</option>
                                                        
                                                            <option value="Ecuador">Ecuador</option>
                                                        
                                                            <option value="Egypt">Egypt</option>
                                                        
                                                            <option value="El Salvador">El Salvador</option>
                                                        
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        
                                                            <option value="Eritrea">Eritrea</option>
                                                        
                                                            <option value="Estonia">Estonia</option>
                                                        
                                                            <option value="Ethiopia">Ethiopia</option>
                                                        
                                                            <option value="Falkland Islands(Malvinas)">Falkland Islands(Malvinas)</option>
                                                        
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                        
                                                            <option value="Fiji">Fiji</option>
                                                        
                                                            <option value="Finland">Finland</option>
                                                        
                                                            <option value="France">France</option>
                                                        
                                                            <option value="France (European Territory)">France (European Territory)</option>
                                                        
                                                            <option value="French Southern Territories">French Southern Territories</option>
                                                        
                                                            <option value="Gabon">Gabon</option>
                                                        
                                                            <option value="Gambia">Gambia</option>
                                                        
                                                            <option value="Georgia">Georgia</option>
                                                        
                                                            <option value="Germany">Germany</option>
                                                        
                                                            <option value="Ghana">Ghana</option>
                                                        
                                                            <option value="Gibraltar">Gibraltar</option>
                                                        
                                                            <option value="Great Britain">Great Britain</option>
                                                        
                                                            <option value="Greece">Greece</option>
                                                        
                                                            <option value="Greenland">Greenland</option>
                                                        
                                                            <option value="Grenada">Grenada</option>
                                                        
                                                            <option value="Guadeloupe (French)">Guadeloupe (French)</option>
                                                        
                                                            <option value="Guam (U.S.)">Guam (U.S.)</option>
                                                        
                                                            <option value="Guatemala">Guatemala</option>
                                                        
                                                            <option value="Guernsey (Channel Islands)">Guernsey (Channel Islands)</option>
                                                        
                                                            <option value="Guinea">Guinea</option>
                                                        
                                                            <option value="Guinea Bissau">Guinea Bissau</option>
                                                        
                                                            <option value="Guyana">Guyana</option>
                                                        
                                                            <option value="Guyana (French)">Guyana (French)</option>
                                                        
                                                            <option value="Haiti">Haiti</option>
                                                        
                                                            <option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
                                                        
                                                            <option value="Honduras">Honduras</option>
                                                        
                                                            <option value="Hong Kong">Hong Kong</option>
                                                        
                                                            <option value="Hungary">Hungary</option>
                                                        
                                                            <option value="Iceland">Iceland</option>
                                                        
                                                            <option value="India">India</option>
                                                        
                                                            <option value="Indonesia">Indonesia</option>
                                                        
                                                            <option value="Iran">Iran</option>
                                                        
                                                            <option value="Iraq">Iraq</option>
                                                        
                                                            <option value="Ireland">Ireland</option>
                                                        
                                                            <option value="Isle of Man">Isle of Man</option>
                                                        
                                                            <option value="Israel">Israel</option>
                                                        
                                                            <option value="Italy">Italy</option>
                                                        
                                                            <option value="Ivory Coast">Ivory Coast</option>
                                                        
                                                            <option value="Jamaica">Jamaica</option>
                                                        
                                                            <option value="Japan">Japan</option>
                                                        
                                                            <option value="Jersey (Channel Islands)">Jersey (Channel Islands)</option>
                                                        
                                                            <option value="Jordan">Jordan</option>
                                                        
                                                            <option value="Kazakstan">Kazakstan</option>
                                                        
                                                            <option value="Kenya">Kenya</option>
                                                        
                                                            <option value="Kiribati">Kiribati</option>
                                                        
                                                            <option value="Korea (North)">Korea (North)</option>
                                                        
                                                            <option value="Korea (South)">Korea (South)</option>
                                                        
                                                            <option value="Kosovo">Kosovo</option>
                                                        
                                                            <option value="Kuwait">Kuwait</option>
                                                        
                                                            <option value="Kyrgyz Republic">Kyrgyz Republic</option>
                                                        
                                                            <option value="Laos">Laos</option>
                                                        
                                                            <option value="Latvia">Latvia</option>
                                                        
                                                            <option value="Lebanon">Lebanon</option>
                                                        
                                                            <option value="Lesotho">Lesotho</option>
                                                        
                                                            <option value="Liberia">Liberia</option>
                                                        
                                                            <option value="Libya">Libya</option>
                                                        
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                        
                                                            <option value="Lithuania">Lithuania</option>
                                                        
                                                            <option value="Luxembourg">Luxembourg</option>
                                                        
                                                            <option value="Macau">Macau</option>
                                                        
                                                            <option value="Macedonia">Macedonia</option>
                                                        
                                                            <option value="Madagascar">Madagascar</option>
                                                        
                                                            <option value="Malawi">Malawi</option>
                                                        
                                                            <option value="Malaysia">Malaysia</option>
                                                        
                                                            <option value="Maldives">Maldives</option>
                                                        
                                                            <option value="Mali">Mali</option>
                                                        
                                                            <option value="Malta">Malta</option>
                                                        
                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                        
                                                            <option value="Martinique (French)">Martinique (French)</option>
                                                        
                                                            <option value="Mauritania">Mauritania</option>
                                                        
                                                            <option value="Mauritius">Mauritius</option>
                                                        
                                                            <option value="Mayotte">Mayotte</option>
                                                        
                                                            <option value="Mexico">Mexico</option>
                                                        
                                                            <option value="Micronesia">Micronesia</option>
                                                        
                                                            <option value="Moldova">Moldova</option>
                                                        
                                                            <option value="Monaco">Monaco</option>
                                                        
                                                            <option value="Mongolia">Mongolia</option>
                                                        
                                                            <option value="Montserrat">Montserrat</option>
                                                        
                                                            <option value="Morocco">Morocco</option>
                                                        
                                                            <option value="Mozambique">Mozambique</option>
                                                        
                                                            <option value="Myanmar">Myanmar</option>
                                                        
                                                            <option value="Namibia">Namibia</option>
                                                        
                                                            <option value="Nauru">Nauru</option>
                                                        
                                                            <option value="Nepal">Nepal</option>
                                                        
                                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                                        
                                                            <option value="Netherlands">Netherlands</option>
                                                        
                                                            <option value="New Caledonia (French)">New Caledonia (French)</option>
                                                        
                                                            <option value="New Zealand">New Zealand</option>
                                                        
                                                            <option value="Nicaragua">Nicaragua</option>
                                                        
                                                            <option value="Niger">Niger</option>
                                                        
                                                            <option value="Nigeria">Nigeria</option>
                                                        
                                                            <option value="Niue">Niue</option>
                                                        
                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                        
                                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                        
                                                            <option value="Norway">Norway</option>
                                                        
                                                            <option value="Oman">Oman</option>
                                                        
                                                            <option value="Pakistan">Pakistan</option>
                                                        
                                                            <option value="Palau">Palau</option>
                                                        
                                                            <option value="Panama">Panama</option>
                                                        
                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                        
                                                            <option value="Paraguay">Paraguay</option>
                                                        
                                                            <option value="Peru">Peru</option>
                                                        
                                                            <option value="Philippines">Philippines</option>
                                                        
                                                            <option value="Pitcairn">Pitcairn</option>
                                                        
                                                            <option value="Poland">Poland</option>
                                                        
                                                            <option value="Polynesia (French)">Polynesia (French)</option>
                                                        
                                                            <option value="Portugal">Portugal</option>
                                                        
                                                            <option value="Puerto Rico (U.S.)">Puerto Rico (U.S.)</option>
                                                        
                                                            <option value="Qatar">Qatar</option>
                                                        
                                                            <option value="Reunion (French)">Reunion (French)</option>
                                                        
                                                            <option value="Romania">Romania</option>
                                                        
                                                            <option value="Russian Federation">Russian Federation</option>
                                                        
                                                            <option value="Rwanda">Rwanda</option>
                                                        
                                                            <option value="Saint Lucia">Saint Lucia</option>
                                                        
                                                            <option value="San Marino">San Marino</option>
                                                        
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                        
                                                            <option value="Senegal">Senegal</option>
                                                        
                                                            <option value="Servia">Servia</option>
                                                        
                                                            <option value="Seychelles">Seychelles</option>
                                                        
                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                        
                                                            <option value="Singapore">Singapore</option>
                                                        
                                                            <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                                        
                                                            <option value="Slovenia">Slovenia</option>
                                                        
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                        
                                                            <option value="Somalia">Somalia</option>
                                                        
                                                            <option value="South Africa">South Africa</option>
                                                        
                                                            <option value="South Georgia and South Sandwich Islands">South Georgia and South Sandwich Islands</option>
                                                        
                                                            <option value="South Sudan">South Sudan</option>
                                                        
                                                            <option value="Soviet Union">Soviet Union</option>
                                                        
                                                            <option value="Spain">Spain</option>
                                                        
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                        
                                                            <option value="St. Helena">St. Helena</option>
                                                        
                                                            <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                                        
                                                            <option value="St. Tome and Principe">St. Tome and Principe</option>
                                                        
                                                            <option value="St. Vincent and Grenadines">St. Vincent and Grenadines</option>
                                                        
                                                            <option value="St.Kitts Nevis Anguilla">St.Kitts Nevis Anguilla</option>
                                                        
                                                            <option value="Sudan">Sudan</option>
                                                        
                                                            <option value="Suriname">Suriname</option>
                                                        
                                                            <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                                        
                                                            <option value="Swaziland">Swaziland</option>
                                                        
                                                            <option value="Sweden">Sweden</option>
                                                        
                                                            <option value="Switzerland">Switzerland</option>
                                                        
                                                            <option value="Syria">Syria</option>
                                                        
                                                            <option value="Tadjikistan">Tadjikistan</option>
                                                        
                                                            <option value="Taiwan">Taiwan</option>
                                                        
                                                            <option value="Tanzania">Tanzania</option>
                                                        
                                                            <option value="Thailand">Thailand</option>
                                                        
                                                            <option value="Togo">Togo</option>
                                                        
                                                            <option value="Tokelau">Tokelau</option>
                                                        
                                                            <option value="Tonga">Tonga</option>
                                                        
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                        
                                                            <option value="Tunisia">Tunisia</option>
                                                        
                                                            <option value="Turkey">Turkey</option>
                                                        
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                        
                                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                        
                                                            <option value="Tuvalu">Tuvalu</option>
                                                        
                                                            <option value="Uganda">Uganda</option>
                                                        
                                                            <option value="Ukraine">Ukraine</option>
                                                        
                                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                                        
                                                            <option value="United Kingdom">United Kingdom</option>
                                                        
                                                            <option value="United States">United States</option>
                                                        
                                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                        
                                                            <option value="Uruguay">Uruguay</option>
                                                        
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                        
                                                            <option value="Vanuatu">Vanuatu</option>
                                                        
                                                            <option value="Vatican City State">Vatican City State</option>
                                                        
                                                            <option value="Venezuela">Venezuela</option>
                                                        
                                                            <option value="Vietnam">Vietnam</option>
                                                        
                                                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                        
                                                            <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                                        
                                                            <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                                        
                                                            <option value="Western Sahara">Western Sahara</option>
                                                        
                                                            <option value="Western Samoa">Western Samoa</option>
                                                        
                                                            <option value="Yemen">Yemen</option>
                                                        
                                                            <option value="Yugoslavia">Yugoslavia</option>
                                                        
                                                            <option value="Zambia">Zambia</option>
                                                        
                                                            <option value="Zimbabwe">Zimbabwe</option>								
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