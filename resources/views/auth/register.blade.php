<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
	<!---google fonts hear-->
	<link href="https://fonts.googleapis.com/css2?family=Signika:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
	<!-- bs extended css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap-extended.min.css')}}">
    <!--font awesome css-->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome.min.css')}}">
	<!--animate css hear-->
	<link rel="stylesheet" href="{{asset('rontend/assets/css/animate.css')}}">
	<!--swiper css-->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/swiper-bundle.min.css')}}">
	<!-- autication css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/authentication.css')}}">
	<!-- conponet css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/components.min.css')}}">
	<!-- Custom css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">

	<title>JBBRA!</title>
  </head>
  <body class="overflow-hidden">

	<div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
			<!-- login page start -->
			<section id="auth-login" class="row flexbox-container">
				<div class="col-xl-8 col-11">
					<div class="card bg-authentication mb-0">
						<div class="back-link">
							<a href="{{route('index')}}"><i class="fa fa-times"></i></a>
						</div>
						<div class="row m-0">
							<!-- left section-login -->
							<div class="col-md-6 col-12 px-0">
								<div class="card card-item disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
									<div class="card-header pb-1">
										<div class="card-title">
											<h4 class="text-center mb-2 text-white">Sign Up</h4>
										</div>
									</div>
									<div class="text-center">
										<p><small class="text-white-50"> Please enter your details to sign up and be part of our great community</small></p>
									</div>
									<div class="card-content">
										<div class="card-body">
										<form method="POST" action="{{ route('register') }}">
										@csrf
												<div class="form-group mb-2">
													<label for="inputfirstname4">Name</label>
													<input type="text" class="form-control" id="inputName4" name="name" placeholder="Name">
													
												</div>
												<div class="form-row">
													<div class="col-md-6">
														<div class="form-group mb-2">
															<span class="text-white-50 small d-inline-block pb-2">Role</span>
															<select name='is_admin' class="pl-1 pt-2 pb-2 rounded w-100">
																<option value="0">Candidate</option>
																<option value="2">Employeer</option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group mb-2">
															<label for="self-number">Number</label>
															<input type="text=" class="form-control" name="phone" id="inputNumber" placeholder="Number">
															
															
														</div>
													</div>
												</div>
												<div class="form-group mb-50">
													<label class="text-bold-600" for="exampleInputEmail1">Email address</label>
													<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email address">
													
												</div>
												<div class="form-group mb-4">
													<label class="text-bold-600" for="exampleInputPassword1">Password</label>
													<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
													
												</div>
												<div class="form-group mb-50">
													<label class="text-bold-600" for="exampleconfirmPassword">Confirm Password</label>
													<input type="password" class="form-control" id="exampleconfirmPassword" name="password_confirmation" placeholder="Confirm your password">
												</div>
												<button type="submit" class="btn btn-primary glow position-relative w-100 mt-4">SIGN UP<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
											</form>
											<hr>
											<div class="text-center"><small class="mr-25">Already have an account ?</small><a href="{{route('login1')}}" class="text-white ml-1"><small>Sign in</small> </a></div>
										</div>
									</div>
								</div>
							</div>
							<!-- right section image -->
							<div class="col-md-6 d-md-block d-none text-center align-self-center p-5">
								<div class="card-content">
									<img class="img-fluid" src="{{asset('frontend/assets/images/login/register.png')}}" alt="branding logo">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- login page ends -->
        </div>
    </div>
	
    <!-- Optional JavaScript -->
    <script src="{{asset('rontend/assets/js/jquery-3.4.1.slim.min.js')}}"></script>
	<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/assets/js/swiper-bundle.min.js')}}"></script>
	<script src="{{asset('frontend/assets/js/counterup.min.js')}}"></script>
	<script src="{{asset('frontend/assets/js/waypoints.min.js')}}"></script>
	<script src="{{asset('frontend/assets/js/function.js')}}"></script>
	
  </body>
</html>