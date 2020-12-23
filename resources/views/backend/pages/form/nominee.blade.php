@extends('backend.template.layout')
@section('body-content')
<!-- main content start -->









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
						Nominee Information
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
                @if(App\Nominee::count()<1  )
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        add new nominee
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">nominee</h3>
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
									<div class="nominee-information">
											<h5 class="text-center">Nominee Information</h5>
											<form method="post" action="{{ route('nomineeAdd') }}" enctype="multipart/form-data">
											@csrf
												<div class="form-group row">
													<label for="" class="col-sm-2 col-form-label ">Nominee Name</label>
													<div class="col-sm-4 ">
													<input type="text" class="form-control" id="" name="name" placeholder="Enter your Nominee Name" required>
													</div>
													<label for="" class="col-sm-2 col-form-label ">Relation</label>
													<div class="col-sm-4 ">
													<input type="text" class="form-control" id="" name="relation" placeholder="Enter your Nominee Relation" required>
													</div>
												</div>
												<div class="form-group row">
													<label for="" class="col-sm-2 col-form-label ">Phone/ Mobile no</label>
													<div class="col-sm-10 ">
													<input type="text" class="form-control" id="" name="phone" placeholder="Enter your Nominee Phone/ Mobile no" required>
													</div>
												</div>
												<div class="form-group row">
													<label for="" class="col-sm-2 col-form-label ">Address</label>
													<div class="col-sm-10 ">
														<input type="text" class="form-control" id="" name="address" placeholder="Enter your Nominee Address" required>
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
            @endif
            <!-- add row end -->


            <!-- manage row start -->
            <div class="row">

                
                <div class="col-md-12 table-responsive">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <td>Id</td>
                               
                                <td>Name</td>
                                <td>Relation</td>
                                <td>Phone</td>
                                <td>Address</td>
                                
                               
                                <td>action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($nominees as $nominee)
                            <tr>
                                <th>{{ $i }}</th>
                               
                                <td>
                                   {{$nominee->name}}
                                </td>
                                <td>
                                   {{$nominee->relation}}
                                </td>
                                <td>
                                   {{$nominee->phone}}
                                </td>
                                <td>
                                   {{$nominee->address}}
                                </td>
                                
                                <td>
                                <!-- edit start -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{ $nominee->id }}">
                                    edit
                                </button>
                                <div class="modal fade" id="edit{{ $nominee->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">nominee</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <form method="post" action="{{ route('nomineeUpdate',$nominee->id) }}" enctype="multipart/form-data">
											@csrf
												<div class="form-group row">
													<label for="" class="col-sm-2 col-form-label ">Nominee Name</label>
													<div class="col-sm-4 ">
													<input type="text" class="form-control" id="" name="name" placeholder="Enter your Nominee Name"  value='{{$nominee->name}}' required>
													</div>
													<label for="" class="col-sm-2 col-form-label ">Relation</label>
													<div class="col-sm-4 ">
													<input type="text" class="form-control" id="" name="relation" placeholder="Enter your Nominee Relation" value='{{$nominee->relation}}' required>
													</div>
												</div>
												<div class="form-group row">
													<label for="" class="col-sm-2 col-form-label ">Phone/ Mobile no</label>
													<div class="col-sm-10 ">
													<input type="text" class="form-control" id="" name="phone" placeholder="Enter your Nominee Phone/ Mobile no" value='{{$nominee->phone}}' required>
													</div>
												</div>
												<div class="form-group row">
													<label for="" class="col-sm-2 col-form-label ">Address</label>
													<div class="col-sm-10 ">
														<input type="text" class="form-control" id="" name="address" placeholder="Enter your Nominee Address" value='{{$nominee->address}}' required>
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
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $nominee->id }}">
                                    delete
                                </button>
                                <div class="modal fade" id="delete{{ $nominee->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">nominee delete</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('nomineeDelete', $nominee->id) }}" method="post">
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