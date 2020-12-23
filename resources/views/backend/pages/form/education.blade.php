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
						Educational Information
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page indicator end -->

        <!-- dashbaord statistics seciton start -->
        <section class="statistics">

          
            <!-- add row start -->
            <div class="row add-row">
                <div class="col-md-12 text-right">
                @if(App\Education::count()<2  )
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        add new education
                    </button>
                @endif
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">education</h3>
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
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <td>Id</td>
                               
                                <td>Name</td>
                                <td>P_Year</td>
                                <td>Board</td>
                                <td>Subject</td>
                                <td>Grade</td>
                                
                               
                                <td>action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($educations as $education)
                            <tr>
                                <th>{{ $i }}</th>
                               
                                <td>
                                   {{$education->name}}
                                </td>
                                <td>
                                   {{$education->p_Year}}
                                </td>
                                <td>
                                   {{$education->board}}
                                </td>
                                <td>
                                   {{$education->subject}}
                                </td>
                                <td>
                                   {{$education->grade}}
                                </td>
                                
                                <td>
                                <!-- edit start -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{ $education->id }}">
                                    edit
                                </button>
                                <div class="modal fade" id="edit{{ $education->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">education</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <form method="post" action="{{ route('educationUpdate',$education->id) }}" enctype="multipart/form-data">
											@csrf
												<div class="form-group row">
													<label for="" class="col-sm-2 col-form-label">Degree Name</label>
													<div class="col-sm-4 ">
														<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="name">
															<option selected>Select</option>
															<option value="SSC">SSC</option>
															<option value="HSC">HSC</option>
														</select>
													</div>
													<label for="" class="col-sm-2 col-form-label ">Passing Year</label>
													<div class="col-sm-4 ">
													<input type="number" class="form-control" id="" name="p_year" placeholder="Enter your Passing Year" value='{{$education->p_year}}' required>
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
														<input type="text" class="form-control" id="" name="grade" placeholder="Enter your Street Address/ Para" value='{{$education->grade}}' required>
													</div>
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
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $education->id }}">
                                    delete
                                </button>
                                <div class="modal fade" id="delete{{ $education->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">education delete</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('educationDelete', $education->id) }}" method="post">
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

    </div>
</div>
<!-- main content end -->
@endsection