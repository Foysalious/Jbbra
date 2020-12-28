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
	<link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
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
										<div class="card-title pb-4">
											<h4 class="text-center mb-2 text-white">Welcome Back</h4>
										</div>
									</div>
									<div class="card-content">
										<div class="card-body">
											<div class="divider">
												<div class="divider-text text-uppercase text-muted">
													<small>or login withemail</small>
												</div>
											</div>
											<form method="POST" action="{{ route('login') }}">
                        						@csrf
												<div class="form-group mb-50">
													<label class="text-bold-600" for="exampleInputEmail1">Email address</label>
													<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email address"></div>
													@error('email')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
												<div class="form-group">
													<label class="text-bold-600" for="exampleInputPassword1">Password</label>
													<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
													@error('password')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
												</div>
												<div class="form-group d-flex flex-md-row flex-column justify-content-between align-items-center">
													<div class="text-left">
														<div class="checkbox checkbox-sm">
														<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
														<label class="form-check-label" for="remember">
															{{ __('Remember Me') }}
														</label>
														</div>
													</div>
													<div class="text-right">@if (Route::has('password.request'))
																<a class="btn btn-link" href="{{ route('password.request') }}">
																<small>Forgot Password?</small></a>
																</a>
															@endif
															</div>
												
												</div>
												<button type="submit" class="btn btn-primary glow w-100 position-relative">Login<i id="icon-arrow" class="fa fa-arrow-right"></i></button>
											</form>
											<div class="text-center mt-4"><small class="mr-25">Don't have an account ?</small><a href="{{route('register1')}}"><small class="text-white ml-2">Sign up</small></a></div>
										</div>
									</div>
								</div>
							</div>
							<!-- right section image -->
							<div class="col-md-6 d-md-block d-none text-center align-self-center p-5">
								<div class="card-content">
									<img class="img-fluid" src="{{asset('frontend/assets/images/login/login.png')}}" alt="branding logo">
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
    <script src="{{asset('frontend/assets/js/jquery-3.4.1.slim.min.js')}}"></script>
	<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/assets/js/swiper-bundle.min.js')}}"></script>
	<script src="{{asset('frontend/assets/js/counterup.min.js')}}"></script>
	<script src="{{asset('frontend/assets/js/waypoints.min.js')}}"></script>
	<script src="{{asset('frontend/assets/js/function.js')}}"></script>
	
  </body>
</html>