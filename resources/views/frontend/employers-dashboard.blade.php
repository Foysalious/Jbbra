<!-- header are start -->

@extends('backend.template.layout')

@section('body-content') 
	<!-- main content start -->
<div class="main-content">

    <div class="container-fluid">
	@if(Auth::user()->is_valid == 1)
	<!-- Employers area start  --> 
	<div class="employer-area">
		<div class="container">
			<div class="section-wrapper">
				<div class="row">
					<div class="col-lg-4 col-12">
						<div class="left-wizard-list">
							<div class="hire-btn">
								<a href="#0" class="btn"><span class="wizard-title">Hire List</span><span class="hire-crount">(0)</span></a>
							</div>
							<ul class="all-list">
								<li><span>Favourite</span><span class="float-right" data-toggle="modal" data-target="#hire_list"><i class="fa fa-edit"></i></span></li>
							</ul>
							<!-- <ul class="hi-list">
								<li><span><i class="fa fa-check"></i></span><span>Ux Designer</span></li>
								<li><span><i class="fa fa-check"></i></span><span>Ui Designer</span></li>
								<li><span><i class="fa fa-check"></i></span><span>Product Designer</span></li>
								<li><span><i class="fa fa-check"></i></span><span>Web Designer</span></li>
								<li><span><i class="fa fa-check"></i></span><span>Front-end Developer</span></li>
								<li><span><i class="fa fa-check"></i></span><span>Back-end Developer</span></li>
								<li><span><i class="fa fa-check"></i></span><span>Full-Stack Developer </span></li>
								<li><span><i class="fa fa-check"></i></span><span>Project manager</span></li>
								<li><span><i class="fa fa-check"></i></span><span>Project manager</span></li>
								<li><span><i class="fa fa-check"></i></span><span>Project manager</span></li>
								<li><span><i class="fa fa-check"></i></span><span>Project manager</span></li>
							</ul> -->
						</div>
					</div>
					<div class="col-lg-8 col-12">
						<div class="wizard-right-list">
							<div class="search-filter">
								<div class="search-bar">
									<label for="search-icon"><i class="fa fa-search"></i></label>
									<input type="text" name="search" class="search-control px-5" placeholder="Please enter job keyword" />
								</div>
								<!-- Example split danger button -->
								<div class="btn-group">
									<button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
										<span><i class="fa fa-filter"></i></span>
									</button>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#"></a></li>
										<li><a class="dropdown-item" href="#">Another action</a></li>
										<li><a class="dropdown-item" href="#">Something else here</a></li>
										<li><hr class="dropdown-divider"></li>
										<li><a class="dropdown-item" href="#">Separated link</a></li>
									</ul>
								</div>
							</div>

							<div class="card-item">
								@foreach(App\User::orderBy('id','desc')->where('is_admin',0)->where('is_valid',1)->get() as $user) 
								<div class="card-content">
									<div class="card-thumb">
										<img src="{{asset('images/personal/'. $user->personal->image)}}" height="100" width="100" class="rounded-circle" alt="">
									</div>
									<div class="card-text">
										<div class="cd-des">
											<h4 class="">{{$user->name}}</h4>
											<span>{{$user->experience->post}}</span>
										</div>
										<div class="input-btn d-flex align-items-center mt-3">
											<button type="button" class="btn mr-3"><span>Hire</span></button>
											<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><span>Details</span></button>
											<!-- Detail-modal area -->	
											<!-- Button trigger modal -->
											<!-- Modal -->
											<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-xl modal-dialog-centered">
													<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<form>
															<div class="form-group row">
																<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
																<div class="col-sm-10">
																<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" readonly>
																</div>
															</div>
															<div class="form-group row">
																<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
																<div class="col-sm-10">
																<input type="password" class="form-control" id="inputPassword">
																</div>
															</div>
														</form>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														<button type="button" class="btn btn-primary">Save changes</button>
													</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach
								
							</div>
						</div>
					</div>
				</div>
				<div class="mdp-pagiation mt-5">
					<nav aria-label="Page navigation example">
						<ul class="pagination justify-content-end">
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link active" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">4</a></li>
							<li class="page-item"><a class="page-link" href="#">...</a></li>
							<li class="page-item"><a class="page-link" href="#">15</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- Employers area ends   -->


	<!-- hire modal -->
	<div class="modal fade" id="hire_list" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="myModalLabel110">Choose Your Favourite Profession</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true" style="font-size: 24px;">×</span>
			  </button>
			</div>
			<div class="modal-body">
			  <div class="fav-main">
				<ol class="fav-list d-flex flex-wrap justify-content-around">
				@foreach(App\job::orderBy('id','desc')->get() as $job) 
					<li class="m-2 pr-2">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="{{$job->id}}">
							<label class="custom-control-label" for="{{$job->id}}">{{$job->name}}</label>
						</div>
					</li>
				@endforeach
				</ol>
			  </div>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn" data-dismiss="modal"><span>Add List</span></button>
			</div>
		  </div>
		</div>
	</div>
	@elseif(Auth::user()->is_valid == 0)
	Wait for Approvement from the admin 
	@endif
	<!-- hire modal -->
	
</div>
</div>
	<!-- footer area star -->
	@endsection

	<!-- footer area end --> 