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
                            <i class="fas fa-bars"></i>
                        </li>
                        <li>
						Language Information
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
                @if(App\Language::count()<3 )
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        add new language
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">language</h3>
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
									
										<div class="language-information">
											<h5 class="text-center">Language Skill</h5>
											<form method="post" action="{{ route('languageAdd') }}" enctype="multipart/form-data">
											@csrf
												<div class="form-group row">
													<label for="" class="col-sm-2 col-form-label ">Language</label>
													<div class="col-sm-4 ">
                                                        <input type="text" class="form-control" id="" name="grade" placeholder="Enter The Language" required>
													</div>
													<label for="" class="col-sm-2 col-form-label ">Oral Skill</label>
													<div class="col-sm-4 ">
														<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="oral">
                                                        <option value="select" selected>Select</option>
                                                        <option value="Excellent">Excellent</option>
                                                        <option value="Good">Good</option>
                                                        <option value="Workable">Workable</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label for="" class="col-sm-2 col-form-label ">Writing Skill</label>
													<div class="col-sm-10 ">
														<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="writing">
                                                        <option value="select" selected>Select</option>
                                                        <option value="Excellent">Excellent</option>
                                                        <option value="Good">Good</option>
                                                        <option value="Workable">Workable</option>
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
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        @endif
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
                               
                                <td>Language</td>
                                <td>Oral</td>	
                                <td>Writing</td>		
                                
                               
                                <td>action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($languages as $language)
                            <tr>
                                <th>{{ $i }}</th>
                               
                                <td>
                                   {{$language->language}}
                                </td>
                                <td>
                                   {{$language->oral}}
                                </td>
                                <td>
                                   {{$language->writing}}
                                </td>
                                
                                <td>
                                <!-- edit start -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{ $language->id }}">
                                    edit
                                </button>
                                <div class="modal fade" id="edit{{ $language->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">language</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <form method="post" action="{{ route('languageUpdate',$language->id) }}" enctype="multipart/form-data">
											@csrf
												<div class="form-group row">
													<label for="" class="col-sm-2 col-form-label ">Language</label>
													<div class="col-sm-4 ">
														<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="language">
															<option selected>Select</option>
															<option value="test">Test</option>
														</select>
													</div>
													<label for="" class="col-sm-2 col-form-label ">Oral Skill</label>
													<div class="col-sm-4 ">
														<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="oral">
															<option selected>Select</option>
															<option value="Test">Test</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label for="" class="col-sm-2 col-form-label ">Writing Skill</label>
													<div class="col-sm-10 ">
														<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="writing">
															<option selected>Select</option>
															<option value="writing">writing</option>
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- edit end -->

                                <!-- delete start -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $language->id }}">
                                    delete
                                </button>
                                <div class="modal fade" id="delete{{ $language->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">language delete</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('languageDelete', $language->id) }}" method="post">
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