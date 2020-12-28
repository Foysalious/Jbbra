@extends('backend.template.layout')
@section('body-content')
<!-- main content start -->




<!-- main content start -->
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="conatainer-fluid">
            <!-- page indicator start -->
                <section class="page-indicator">
                    <div class="row">
                        <div class="col-md-12">
                            <ul>
                                <li>
                                    <i class="fas fa-bars"></i>
                                </li>
                                <li>
                                Mailing Information
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
                        @if(App\Mailing::count()<1  )
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                add new Category
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="exampleModalLabel">category</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="post" action="{{ route('mailingAdd') }}" enctype="multipart/form-data">
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
                                                                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="division">
                                                                                <option selected>Select</option>
                                                                                @foreach(App\Division::orderBy('id','desc')->get() as $division) 
																	                <option value="{{$division->name}}">{{$division->name}}</option>
																	            @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <label for="" class="col-sm-2 col-form-label ">District</label>
                                                                        <div class="col-sm-4 ">
                                                                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="district">
                                                                                <option selected>Select</option>
                                                                                @foreach(App\District::orderBy('id','desc')->get() as $district) 
																	                <option value="{{$district->name}}">{{$district->name}}</option>
																	            @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-2 col-form-label ">Thana/ Upazilla	</label>
                                                                        <div class="col-sm-4 ">
                                                                            <input type="number" class="form-control" id="" name="thana" placeholder="Enter your ward code" required>
                                                                        </div>
                                                                        <label for="" class="col-sm-2 col-form-label ">Ward/ Union</label>
                                                                        <div class="col-sm-4 ">
                                                                                <input type="number" class="form-control" id="" name="ward" placeholder="Enter your ward code" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-2 col-form-label ">Area/ Village</label>
                                                                        <div class="col-sm-4 ">
                                                                            <input type="number" class="form-control" id="" name="area" placeholder="Enter your area code" required>
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
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                    @endif
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
                                    
                                        <td>Street</td>
                                        <td>District</td>
                                        <td>Division</td>
                                        <td>Thana</td>
                                        <td>Ward</td>
                                        <td>Areas</td>
                                        <td>Post</td>
                                        <td>Email</td>
                                        <td>Phone</td>
                                        
                                    
                                        <td>action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach($mailings as $mailing)
                                    <tr>
                                        <th>{{ $i }}</th>
                                    
                                        <td>
                                        {{$mailing->street}}
                                        </td>
                                        <td>
                                        {{$mailing->district}}
                                        </td>
                                        <td>
                                        {{$mailing->division}}
                                        </td>
                                        <td>
                                        {{$mailing->thana}}
                                        </td>
                                        <td>
                                        {{$mailing->ward}}
                                        </td>
                                        <td>
                                        {{$mailing->area}}
                                        </td>
                                        <td>
                                        {{$mailing->post}}
                                        </td>
                                        <td>
                                        {{$mailing->email}}
                                        </td>
                                        <td>
                                        {{$mailing->phone}}
                                        </td>
                                        
                                        <td>
                                        <!-- edit start -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{ $mailing->id }}">
                                            edit
                                        </button>
                                        <div class="modal fade" id="edit{{ $mailing->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="exampleModalLabel">mailing</h3>
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
                                                        <h5 class="text-center">Mailing Information</h5>
                                                        <form method="post" action="{{ route('mailingUpdate',$mailing->id) }}" enctype="multipart/form-data">
                                                                @csrf
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-2 col-form-label ">Street Address/ Para</label>
                                                                        <div class="col-sm-10 ">
                                                                        <input type="text" class="form-control" id="" name="street" placeholder="Enter your Street Address/ Para" value='{{$mailing->street}}' required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-2 col-form-label ">Division</label>
                                                                        <div class="col-sm-4 ">
                                                                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="division">
                                                                                <option selected>Select</option>
                                                                                @foreach(App\Division::orderBy('id','desc')->get() as $division) 
																		            <option value="{{$division->name}}" {{ ( $division->name == $mailing->division) ? 'selected' : ''}}>{{$division->name}}</option>
																	            @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <label for="" class="col-sm-2 col-form-label ">District</label>
                                                                        <div class="col-sm-4 ">
                                                                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="district">
                                                                                <option selected>Select</option>
                                                                                @foreach(App\District::orderBy('id','desc')->get() as $district) 
																	                <option value="{{$district->name}}"{{ ( $district->name == $mailing->district) ? 'selected' : ''}}>{{$district->name}}</option>
																                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-2 col-form-label ">Thana/ Upazilla	</label>
                                                                        <div class="col-sm-4 ">
                                                                        <input type="text" class="form-control" id="" name="thana" placeholder="Enter your ward"  value='{{$mailing->thana}}' required>
                                                                        </div>
                                                                        <label for="" class="col-sm-2 col-form-label ">Ward/ Union</label>
                                                                        <div class="col-sm-4 ">
                                                                        <input type="text" class="form-control" id="" name="ward" placeholder="Enter your ward"  value='{{$mailing->ward}}' required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-2 col-form-label ">Area/ Village</label>
                                                                        <div class="col-sm-4 ">
                                                                            <input type="text" class="form-control" id="" name="area" placeholder="Enter your Village"  value='{{$mailing->area}}' required>
                                                                        </div>
                                                                        <label for="" class="col-sm-2 col-form-label ">Post Office</label>
                                                                        <div class="col-sm-4">
                                                                            <input type="text" class="form-control" id="" name="post" placeholder="Enter your Postal Address"  value='{{$mailing->post}}' required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-2 col-form-label ">Email</label>
                                                                        <div class="col-sm-4 ">
                                                                            <input type="email" class="form-control" id="" name="email" placeholder="Enter your Email Address"  value='{{$mailing->email}}' required>
                                                                        </div>
                                                                        <label for="" class="col-sm-2 col-form-label ">Phone/ Mobile</label>
                                                                        <div class="col-sm-4 ">
                                                                            <input type="text" class="form-control" id="" name="phone" placeholder="Enter your Phone/ Mobile no"  value='{{$mailing->phone}}' required>
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
                                        <!-- edit end -->

                                        <!-- delete start -->
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $mailing->id }}">
                                            delete
                                        </button>
                                        <div class="modal fade" id="delete{{ $mailing->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="exampleModalLabel">mailing delete</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('mailingDelete', $mailing->id) }}" method="post">
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
    </div>
</div>
<!-- main content end -->
@endsection