	<!-- header are start -->

	@extends('backend.template.layout')

@section('body-content')
	<!-- header are end -->

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
							<ul class="hi-list">
								<li><span><i class="fa fa-check"></i></span><span>Ux Designer</span></li>
								<li><span><i class="fa fa-check"></i></span><span>Ui Designer</span></li>
								<li><span><i class="fa fa-check"></i></span><span>Product Designer</span></li>
								<li><span><i class="fa fa-check"></i></span><span>Web Designer</span></li>
								<li><span><i class="fa fa-check"></i></span><span>Front-end Developer</span></li>
								<li><span><i class="fa fa-check"></i></span><span>Back-end Developer</span></li>
								<li><span><i class="fa fa-check"></i></span><span>Full-Stac Developer </span></li>
								<li><span><i class="fa fa-check"></i></span><span>Project manager</span></li>
								<li><span><i class="fa fa-check"></i></span><span>Project manager</span></li>
								<li><span><i class="fa fa-check"></i></span><span>Project manager</span></li>
								<li><span><i class="fa fa-check"></i></span><span>Project manager</span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-8 col-12">
						<div class="wizard-right-list">
							<div class="search-filter">
								<div class="search-bar">
									<label for="search-icon"><i class="fa fa-search"></i></label>
									<input type="text" name="search" class="search-control" placeholder="Ux designer, Web develper , Product designer........" />
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
								<div class="card-content">
									<div class="card-thumb">
										<img src="{{asset('frontend/assets/images/employer/01.jpg')}}" height="100" width="100" class="rounded-circle" alt="">
									</div>
									<div class="card-text">
										<div class="cd-des">
											<h4 class="mb-0">Farhana Ahmed</h4>
											<span>HR Officer</span>
										</div>
										<div class="input-btn d-flex align-items-center mt-3">
											<button type="button" class="btn mr-3"><span>Hire</span></button>
											<button type="button" class="btn"><span>Details</span></button>
										</div>
									</div>
								</div>
								<div class="card-content">
									<div class="card-thumb">
										<img src="{{asset('frontend/assets/images/employer/02.jpg')}}" height="100" width="100" class="rounded-circle" alt="">
									</div>
									<div class="card-text">
										<div class="cd-des">
											<h4 class="mb-0">Foysal</h4>
											<span>Ninja develper</span>
										</div>
										<div class="input-btn d-flex align-items-center mt-3">
											<button type="button" class="btn mr-3"><span>Hire</span></button>
											<button type="button" class="btn"><span>Details</span></button>
										</div>
									</div>
								</div>
								<div class="card-content">
									<div class="card-thumb">
										<img src="{{asset('frontend/assets/images/employer/03.jpg')}}" height="100" width="100" class="rounded-circle" alt="">
									</div>
									<div class="card-text">
										<div class="cd-des">
											<h4 class="mb-0">MD Fahad</h4>
											<span>All in one</span>
										</div>
										<div class="input-btn d-flex align-items-center mt-3">
											<button type="button" class="btn mr-3"><span>Hire</span></button>
											<button type="button" class="btn"><span>Details</span></button>
										</div>
									</div>
								</div>
								<div class="card-content">
									<div class="card-thumb">
										<img src="{{asset('frontend/assets/images/employer/04.jpg')}}" height="100" width="100" class="rounded-circle" alt="">
									</div>
									<div class="card-text">
										<div class="cd-des">
											<h4 class="mb-0">Shohag Bro</h4>
											<span>Product Develper</span>
										</div>
										<div class="input-btn d-flex align-items-center mt-3">
											<button type="button" class="btn mr-3"><span>Hire</span></button>
											<button type="button" class="btn"><span>Details</span></button>
										</div>
									</div>
								</div>
								<div class="card-content">
									<div class="card-thumb">
										<img src="{{asset('frontend/assets/images/employer/05.jpg')}}" height="100" width="100" class="rounded-circle" alt="">
									</div>
									<div class="card-text">
										<div class="cd-des">
											<h4 class="mb-0">Yeasin (L)</h4>
											<span>Front-end develper</span>
											<p>I don't want to go to japan</p>
										</div>
										<div class="input-btn d-flex align-items-center mt-3">
											<button type="button" class="btn mr-3"><span>Hire</span></button>
											<button type="button" class="btn"><span>Details</span></button>
										</div>
									</div>
								</div>
								<div class="card-content">
									<div class="card-thumb">
										<img src="{{asset('frontend/assets/images/employer/06.jpg')}}" height="100" width="100" class="rounded-circle" alt="">
									</div>
									<div class="card-text">
										<div class="cd-des">
											<h4 class="mb-0">Habib PW</h4>
											<span>Ninja</span>
										</div>
										<div class="input-btn d-flex align-items-center mt-3">
											<button type="button" class="btn mr-3"><span>Hire</span></button>
											<button type="button" class="btn"><span>Details</span></button>
										</div>
									</div>
								</div>
								<div class="card-content">
									<div class="card-thumb">
										<img src="{{asset('frontend/assets/images/employer/07.jpg')}}" height="100" width="100" class="rounded-circle" alt="">
									</div>
									<div class="card-text">
										<div class="cd-des">
											<h4 class="mb-0">Ashim C Reberio</h4>
											<span>Ninja Ux</span>
										</div>
										<div class="input-btn d-flex align-items-center mt-3">
											<button type="button" class="btn mr-3"><span>Hire</span></button>
											<button type="button" class="btn"><span>Details</span></button>
										</div>
									</div>
								</div>
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
					<li class="m-2 pr-2">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">Product Designer</label>
						</div>
					</li>
					<li class="m-2 pr-2">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck2">
							<label class="custom-control-label" for="customCheck2">Product Designer</label>
						</div>
					</li>
					<li class="m-2 pr-2">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck3">
							<label class="custom-control-label" for="customCheck3">Product Designer</label>
						</div>
					</li>
					<li class="m-2 pr-2">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck4">
							<label class="custom-control-label" for="customCheck4">Product Designer</label>
						</div>
					</li>
					<li class="m-2 pr-2">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck5">
							<label class="custom-control-label" for="customCheck5">Product Designer</label>
						</div>
					</li>
					<li class="m-2 pr-2">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck6">
							<label class="custom-control-label" for="customCheck6">Front Designer</label>
						</div>
					</li>
				</ol>
			  </div>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn" data-dismiss="modal"><span>Add List</span></button>
			</div>
		  </div>
		</div>
	</div>
	<!-- hire modal -->
	

	<!-- footer area star -->
	@endsection

	<!-- footer area end -->