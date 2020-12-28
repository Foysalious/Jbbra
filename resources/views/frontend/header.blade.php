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
    <!--font awesome css-->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome.min.css')}}">
	<!--animate css hear-->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
	<!--swiper css-->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/swiper-bundle.min.css')}}">
	<!-- light-case css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/lightcase.css')}}">
	<!-- Custom css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">

	<title>JBBRA!</title>
  </head>
  <body data-spy="scroll" class="overflow-auto">

	<!-- header area start -->
		
    <header>
        <div class="header-bg">
            <div class="container-fluid p-0">
                <div class="header-item">
                    <div class="header-logo">
                        <a href="{{route('index')}}" class="your-barnd">
                            <img src="{{asset('frontend/assets/images/logo/logo.png')}}" alt="">
                        </a>
                    </div>
                    <div class="header-menu">
                        <div class="overlay"></div>
                        <div class="main-menu">
                            <ul class="menu-list list-unstyled">
                                <li class="active">
                                    <a href="{{route('index')}}" class="ploor-link">Home</a>
                                </li>
                                <li>
                                    <a href="{{route('about')}}" class="ploor-link">About Us</a>
                                </li>
                                <li>
                                    <a href="{{route('guide')}}" class="ploor-link">Guidance</a>
                                </li>
                                <li>
                                    <a href="{{route('emp_home')}}" class="ploor-link">Employer</a>
                                </li>
                                <li>
                                    <a href="{{route('faq')}}" class="ploor-link">FAQ</a>
                                </li>
                                <li>
                                    <a href="{{route('contact')}}" class="ploor-link">Contact Us</a>
								</li>
								<div class="auth-sin d-block d-lg-none ml-sm-3">
									<ul class="list-unstyled mb-0">
										<li><a href="{{route('login')}}" class="btn bg-white mr-2 mr-xl-4"><span class="text-dark">Login</span></a></li>
										<li><a href="{{route('register')}}" class="btn border-white text-white mt-3"><span class="text-white">Signup</span></a></li>
									</ul>
								</div>
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-bar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="auth-sin d-none d-lg-block">
                        <ul class="list-unstyled d-flex mb-0">
                            <li><a href="{{route('login')}}" class="btn mr-2 mr-xl-4"><span>Login</span></a></li>
                            <li><a href="{{route('register')}}" class="btn"><span>Signup</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
	
    <!-- header area Ends  -->
