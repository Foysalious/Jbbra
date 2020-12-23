@extends('backend.template.layout')
@section('body-content')
<!-- main content start -->
<div class="main-content">
    <div class="container-fluid">

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
						Experience Information
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        add new experience
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">experience</h3>
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
							<div class="experience-information">
									<h5 class="text-center">Experience Skill</h5>
									<form method="post" action="{{ route('experienceAdd') }}" enctype="multipart/form-data">
									@csrf
										<div class="form-group row">
											<label for="" class="col-sm-2 col-form-label ">Company Name</label>
											<div class="col-sm-4 ">
												<input type="text" class="form-control" id="" name="name" placeholder="Enter the company name" required>
											</div>
											<label for="" class="col-sm-2 col-form-label ">Post Held</label>
											<div class="col-sm-4 ">
												<input type="text" class="form-control" id="" name="post" placeholder="Enter the Post Held" required>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-2 col-form-label ">Serve From</label>
											<div class="col-sm-4 ">
												<input type="date" class="form-control" id="" name="from" required>
											</div>
											<label for="" class="col-sm-2 col-form-label ">Serve Till</label>
											<div class="col-sm-4 ">
												<input type="date/text" class="form-control" id="" name="till"  placeholder="Enter the Serve Till Date" required>
											</div>
										</div>

										<div class="form-group row">
											<label for="" class="col-sm-2 col-form-label ">Address</label>
											<div class="col-sm-10 ">
												<input type="date/text" class="form-control" id="" name="address"  placeholder="Enter the company Address" required>
											</div>
										</div>
										
										<div class="form-group row">
											<label for="" class="col-sm-2 col-form-label ">Phone/Mobile*</label>
											<div class="col-sm-4 ">
												<input type="text" class="form-control" id="" name="phone" required>
											</div>
											<label for="" class="col-sm-2 col-form-label ">Contact Person</label>
											<div class="col-sm-4 ">
												<input type="text" class="form-control" id="" name="cPerson"  placeholder="Enter the content person Information" required>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-2 col-form-label ">Email</label>
											<div class="col-sm-10 ">
												<input type="email" class="form-control" id="" name="email"  placeholder="Enter the email address" required>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-2 col-form-label ">Responsibility</label>
											<div class="col-sm-10 ">
												<input type="text" class="form-control" id="" name="responsibilty"  placeholder="Enter your Responsibility" required>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-2 col-form-label ">Achievement</label>
											<div class="col-sm-10 ">
												<input type="text" class="form-control" id="" name="achivements"  placeholder="Enter your Achievements" required>
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
                                <td>Post</td>
                                <td>From</td>
                                <td>Till</td>
                                <td>Address</td>
                                <td>Phone</td>
                                <td>cPerson</td>
                                <td>Email</td>
                                <td>Responsibility</td>
                                <td>Achivements</td>
                                
                               
                                <td>action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($experiences as $experience)
                            <tr>
                                <th>{{ $i }}</th>
                               
                                <td>
                                   {{$experience->name}}
                                </td>
                                <td>
                                   {{$experience->post}}
                                </td>
                                <td>
                                   {{$experience->from}}
                                </td>
                                <td>
                                   {{$experience->till}}
                                </td>
                                <td>
                                   {{$experience->address}}
                                </td>
                                <td>
                                   {{$experience->phone}}
                                </td>
                                <td>
                                   {{$experience->cperson}}
                                </td>
                                <td>
                                   {{$experience->email}}
                                </td>
                                <td>
                                   {{$experience->responsibility}}
                                </td>
                                <td>
                                   {{$experience->achivements}}
                                </td>
                                
                                <td>
                                <!-- edit start -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{ $experience->id }}">
                                    edit
                                </button>
                                <div class="modal fade" id="edit{{ $experience->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">experience</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <form method="post" action="{{ route('experienceUpdate',$experience->id) }}" enctype="multipart/form-data">
									@csrf
										<div class="form-group row">
											<label for="" class="col-sm-2 col-form-label ">Company Name</label>
											<div class="col-sm-4 ">
												<input type="text" class="form-control" id="" name="name" placeholder="Enter the company name" value='{{$experience->name}}' required>
											</div>
											<label for="" class="col-sm-2 col-form-label ">Post Held</label>
											<div class="col-sm-4 ">
												<input type="text" class="form-control" id="" name="post" placeholder="Enter the Post Held" value='{{$experience->post}}' required>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-2 col-form-label ">Serve From</label>
											<div class="col-sm-4 ">
												<input type="date" class="form-control" id="" name="from" required>
											</div>
											<label for="" class="col-sm-2 col-form-label ">Serve Till</label>
											<div class="col-sm-4 ">
												<input type="date/text" class="form-control" id="" name="till"  placeholder="Enter the Serve Till Date" value='{{$experience->till}}'  required>
											</div>
										</div>

										<div class="form-group row">
											<label for="" class="col-sm-2 col-form-label ">Address</label>
											<div class="col-sm-10 ">
												<input type="date/text" class="form-control" id="" name="address"  placeholder="Enter the company Address" value='{{$experience->address}}' required>
											</div>
										</div>
										
										<div class="form-group row">
											<label for="" class="col-sm-2 col-form-label ">Phone/Mobile*</label>
											<div class="col-sm-4 ">
												<input type="text" class="form-control" id="" name="phone" value='{{$experience->phone}}'  required>
											</div>
											<label for="" class="col-sm-2 col-form-label ">Contact Person</label>
											<div class="col-sm-4 ">
												<input type="text" class="form-control" id="" name="cPerson"  placeholder="Enter the content person Information" value='{{$experience->cPerson}}' required>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-2 col-form-label ">Email</label>
											<div class="col-sm-10 ">
												<input type="email" class="form-control" id="" name="email"  placeholder="Enter the email address" value='{{$experience->email}}'  required>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-2 col-form-label ">Responsibility</label>
											<div class="col-sm-10 ">
												<input type="text" class="form-control" id="" name="responsibilty"  placeholder="Enter your Responsibility" value='{{$experience->responsibilty}}' required>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-2 col-form-label ">Achievement</label>
											<div class="col-sm-10 ">
												<input type="text" class="form-control" id="" name="achivements"  placeholder="Enter your Achievements" value='{{$experience->achivements}}'  required>
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
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $experience->id }}">
                                    delete
                                </button>
                                <div class="modal fade" id="delete{{ $experience->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">experience delete</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('experienceDelete', $experience->id) }}" method="post">
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