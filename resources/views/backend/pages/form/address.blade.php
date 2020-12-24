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
                            Address Information
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
                @if(App\Address::count()<2  )
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        add new address
                    </button>
                
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">address</h3>
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
										
                                        <div class="address-fild">
											<h5 class="text-center">Address</h5>
											<form method="post" action="{{ route('addressAdd') }}" enctype="multipart/form-data">
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
														<select type="text" class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="division">
															<option value="Select Division" selected> Select Division </option>
															<option value="Dhaka">Dhaka</option>
															<option value="Chittagong">Chittagong</option>
															<option value="Khulna">Khulna</option>
															<option value="Rajshahi">Rajshahi</option>
															<option value="Barishal">Barishal</option>
															<option value="Sylhet">Sylhet</option>
														</select>
													</div>
													<label for="" class="col-sm-2 col-form-label ">District</label>
													<div class="col-sm-4 ">
														<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="disctrict">
														
															<option value="N/A" selected>N/A</option>
															
															<option value="BAGERHAT">BAGERHAT</option>
															
															<option value="BANDARBAN">BANDARBAN</option>
															
															<option value="BARGUNA">BARGUNA</option>
															
															<option value="BARISHAL">BARISHAL</option>
															
															<option value="BHOLA">BHOLA</option>
															
															<option value="BOGURA">BOGURA</option>
															
															<option value="BRAHMANBARIA">BRAHMANBARIA</option>
															
															<option value="CHANDPUR">CHANDPUR</option>
															
															<option value="CHATTOGRAM">CHATTOGRAM</option>
															
															<option value="CHUADANGA">CHUADANGA</option>
															
															<option value="CUMILLA">CUMILLA</option>
															
															<option value="COX'S BAZAR">COX'S BAZAR</option>
															
															<option value="DHAKA">DHAKA</option>
															
															<option value="DINAJPUR">DINAJPUR</option>
															
															<option value="FARIDPUR">FARIDPUR</option>
															
															<option value="FENI">FENI</option>
															
															<option value="GAIBANDHA">GAIBANDHA</option>
															
															<option value="GAZIPUR">GAZIPUR</option>
															
															<option value="GOPALGANJ">GOPALGANJ</option>
															
															<option value="HABIGANJ">HABIGANJ</option>
															
															<option value="JOYPURHAT">JOYPURHAT</option>
															
															<option value="JAMALPUR">JAMALPUR</option>
															
															<option value="JASHORE">JASHORE</option>
															
															<option value="JHALAKATI">JHALAKATI</option>
															
															<option value="JHENAIDAH">JHENAIDAH</option>
															
															<option value="KHAGRACHHARI">KHAGRACHHARI</option>
															
															<option value="KHULNA">KHULNA</option>
															
															<option value="KISHOREGANJ">KISHOREGANJ</option>
															
															<option value="KURIGRAM">KURIGRAM</option>
															
															<option value="KUSHTIA">KUSHTIA</option>
															
															<option value="LAKSHMIPUR">LAKSHMIPUR</option>
															
															<option value="LALMONIRHAT">LALMONIRHAT</option>
															
															<option value="MADARIPUR">MADARIPUR</option>
															
															<option value="MAGURA">MAGURA</option>
															
															<option value="MANIKGANJ">MANIKGANJ</option>
															
															<option value="MEHERPUR">MEHERPUR</option>
															
															<option value="MOULVIBAZAR">MOULVIBAZAR</option>
															
															<option value="MUNSHIGANJ">MUNSHIGANJ</option>
															
															<option value="MYMENSINGH">MYMENSINGH</option>
															
															<option value="NAOGAON">NAOGAON</option>
															
															<option value="NARAIL">NARAIL</option>
															
															<option value="NARAYANGANJ">NARAYANGANJ</option>
															
															<option value="NARSINGDI">NARSINGDI</option>
															
															<option value="NATORE">NATORE</option>
															
															<option value="CHAPAINAWABGANJ">CHAPAINAWABGANJ</option>
															
															<option value="NETROKONA">NETROKONA</option>
															
															<option value="NILPHAMARI">NILPHAMARI</option>
															
															<option value="NOAKHALI">NOAKHALI</option>
															
															<option value="PABNA">PABNA</option>
															
															<option value="PANCHAGARH">PANCHAGARH</option>
															
															<option value="PATUAKHALI">PATUAKHALI</option>
															
															<option value="PIROJPUR">PIROJPUR</option>
															
															<option value="RAJBARI">RAJBARI</option>
															
															<option value="RAJSHAHI">RAJSHAHI</option>
															
															<option value="RANGPUR">RANGPUR</option>
															
															<option value="SATKHIRA">SATKHIRA</option>
															
															<option value="SHARIATPUR9">SHARIATPUR</option>
															
															<option value="SHERPUR">SHERPUR</option>
															
															<option value="SIRAJGANJ">SIRAJGANJ</option>
															
															<option value="SUNAMGANJ">SUNAMGANJ</option>
															
															<option value="SYLHET">SYLHET</option>
															
															<option value="TANGAIL">TANGAIL</option>
															
															<option value="THAKURGAON">THAKURGAON</option>
															
															<option value="RANGAMATI">RANGAMATI</option>
															
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label for="" class="col-sm-2 col-form-label ">Thana/ Upazilla	</label>
													<div class="col-sm-4 ">
														<input type="text" class="form-control" id="" name="thana" placeholder="Enter The Thana" required>
													</div>
													<label for="" class="col-sm-2 col-form-label ">Ward/ Union</label>
													<div class="col-sm-4 ">
													<input type="text" class="form-control" id="" name="thana" placeholder="Enter The Ward/Union" required>
													</div>
												</div>
												<div class="form-group row">
													<label for="" class="col-sm-2 col-form-label ">Area/ Village</label>
													<div class="col-sm-4 ">
													<input type="text" class="form-control" id="" name="thana" placeholder="Enter The Area/Village" required>
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
										
									</section>
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
                                <td>Division</td>
                                <td>District</td>
                                <td>Thana</td>
                                <td>Ward</td>
                                <td>Area</td>
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
                            @foreach($addresses as $address)
                            <tr>
                                <th>{{ $i }}</th>
                               
                                <td>
                                   {{$address->street}}
								</td>
								<td>
                                   {{$address->division}}
                                </td>
								<td>
                                   {{$address->district}}
                                </td>
								<td>
                                   {{$address->thana}}
                                </td>
								<td>
                                   {{$address->ward}}
                                </td>
								<td>
                                   {{$address->area}}
                                </td>
								<td>
                                   {{$address->post}}
                                </td>
								<td>
                                   {{$address->email}}
                                </td>
								<td>
                                   {{$address->phone}}
                                </td>
                                
                                <td>
                                <!-- edit start -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{ $address->id }}">
                                    edit
                                </button>
                                <div class="modal fade" id="edit{{ $address->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">address</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <form method="post" action="{{ route('addressUpdate',$address->id) }}" enctype="multipart/form-data">
											@csrf
												<div class="form-group row">
													<label for="" class="col-sm-2 col-form-label ">Street Address/ Para</label>
													<div class="col-sm-10 ">
													<input type="text" class="form-control" id="" name="street" placeholder="Enter your Street Address/ Para"  value='{{$address->street}}' required>
													</div>
												</div>
												<div class="form-group row">
													<label for="" class="col-sm-2 col-form-label ">Division</label>
													<div class="col-sm-4 ">
														<select type="text" class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="division">
															<option value="Select Division" selected> Select Division </option>
															<option value="Dhaka">Dhaka</option>
															<option value="Chittagong">Chittagong</option>
															<option value="Khulna">Khulna</option>
															<option value="Rajshahi">Rajshahi</option>
															<option value="Barishal">Barishal</option>
															<option value="Sylhet">Sylhet</option>
														</select>
													</div>
													<label for="" class="col-sm-2 col-form-label ">District</label>
													<div class="col-sm-4 ">
														<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="disctrict">
															
														<option value="N/A" selected>N/A</option>
															
															<option value="BAGERHAT">BAGERHAT</option>
															
															<option value="BANDARBAN">BANDARBAN</option>
															
															<option value="BARGUNA">BARGUNA</option>
															
															<option value="BARISHAL">BARISHAL</option>
															
															<option value="BHOLA">BHOLA</option>
															
															<option value="BOGURA">BOGURA</option>
															
															<option value="BRAHMANBARIA">BRAHMANBARIA</option>
															
															<option value="CHANDPUR">CHANDPUR</option>
															
															<option value="CHATTOGRAM">CHATTOGRAM</option>
															
															<option value="CHUADANGA">CHUADANGA</option>
															
															<option value="CUMILLA">CUMILLA</option>
															
															<option value="COX'S BAZAR">COX'S BAZAR</option>
															
															<option value="DHAKA">DHAKA</option>
															
															<option value="DINAJPUR">DINAJPUR</option>
															
															<option value="FARIDPUR">FARIDPUR</option>
															
															<option value="FENI">FENI</option>
															
															<option value="GAIBANDHA">GAIBANDHA</option>
															
															<option value="GAZIPUR">GAZIPUR</option>
															
															<option value="GOPALGANJ">GOPALGANJ</option>
															
															<option value="HABIGANJ">HABIGANJ</option>
															
															<option value="JOYPURHAT">JOYPURHAT</option>
															
															<option value="JAMALPUR">JAMALPUR</option>
															
															<option value="JASHORE">JASHORE</option>
															
															<option value="JHALAKATI">JHALAKATI</option>
															
															<option value="JHENAIDAH">JHENAIDAH</option>
															
															<option value="KHAGRACHHARI">KHAGRACHHARI</option>
															
															<option value="KHULNA">KHULNA</option>
															
															<option value="KISHOREGANJ">KISHOREGANJ</option>
															
															<option value="KURIGRAM">KURIGRAM</option>
															
															<option value="KUSHTIA">KUSHTIA</option>
															
															<option value="LAKSHMIPUR">LAKSHMIPUR</option>
															
															<option value="LALMONIRHAT">LALMONIRHAT</option>
															
															<option value="MADARIPUR">MADARIPUR</option>
															
															<option value="MAGURA">MAGURA</option>
															
															<option value="MANIKGANJ">MANIKGANJ</option>
															
															<option value="MEHERPUR">MEHERPUR</option>
															
															<option value="MOULVIBAZAR">MOULVIBAZAR</option>
															
															<option value="MUNSHIGANJ">MUNSHIGANJ</option>
															
															<option value="MYMENSINGH">MYMENSINGH</option>
															
															<option value="NAOGAON">NAOGAON</option>
															
															<option value="NARAIL">NARAIL</option>
															
															<option value="NARAYANGANJ">NARAYANGANJ</option>
															
															<option value="NARSINGDI">NARSINGDI</option>
															
															<option value="NATORE">NATORE</option>
															
															<option value="CHAPAINAWABGANJ">CHAPAINAWABGANJ</option>
															
															<option value="NETROKONA">NETROKONA</option>
															
															<option value="NILPHAMARI">NILPHAMARI</option>
															
															<option value="NOAKHALI">NOAKHALI</option>
															
															<option value="PABNA">PABNA</option>
															
															<option value="PANCHAGARH">PANCHAGARH</option>
															
															<option value="PATUAKHALI">PATUAKHALI</option>
															
															<option value="PIROJPUR">PIROJPUR</option>
															
															<option value="RAJBARI">RAJBARI</option>
															
															<option value="RAJSHAHI">RAJSHAHI</option>
															
															<option value="RANGPUR">RANGPUR</option>
															
															<option value="SATKHIRA">SATKHIRA</option>
															
															<option value="SHARIATPUR9">SHARIATPUR</option>
															
															<option value="SHERPUR">SHERPUR</option>
															
															<option value="SIRAJGANJ">SIRAJGANJ</option>
															
															<option value="SUNAMGANJ">SUNAMGANJ</option>
															
															<option value="SYLHET">SYLHET</option>
															
															<option value="TANGAIL">TANGAIL</option>
															
															<option value="THAKURGAON">THAKURGAON</option>
															
															<option value="RANGAMATI">RANGAMATI</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label for="" class="col-sm-2 col-form-label ">Thana/ Upazilla	</label>
													<div class="col-sm-4 ">
														<input type="text" class="form-control" id="" name="thana" placeholder="Enter The Thana" required>
													</div>
													<label for="" class="col-sm-2 col-form-label ">Ward/ Union</label>
													<div class="col-sm-4 ">
														<input type="text" class="form-control" id="" name="thana" placeholder="Enter The Ward/ Union" required>
													</div>
												</div>
												<div class="form-group row">
													<label for="" class="col-sm-2 col-form-label ">Area/ Village</label>
													<div class="col-sm-4 ">
														<input type="text" class="form-control" id="" name="thana" placeholder="Enter The Area/ Village" required>
													</div>
													<label for="" class="col-sm-2 col-form-label ">Post Office</label>
													<div class="col-sm-4">
														<input type="number" class="form-control" id="" name="post" placeholder="Enter your Postal code" value='{{$address->post}}' required>
													</div>
												</div>
												<div class="form-group row">
													<label for="" class="col-sm-2 col-form-label ">Email</label>
													<div class="col-sm-4 ">
														<input type="email" class="form-control" id="" name="email" placeholder="Enter your Email Address" value='{{$address->email}}' required>
													</div>
													<label for="" class="col-sm-2 col-form-label ">Phone/ Mobile</label>
													<div class="col-sm-4 ">
														<input type="text" class="form-control" id="" name="phone" placeholder="Enter your Phone/ Mobile no" value='{{$address->phone}}' required>
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
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $address->id }}">
                                    delete
                                </button>
                                <div class="modal fade" id="delete{{ $address->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">address delete</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('addressDelete', $address->id) }}" method="post">
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
