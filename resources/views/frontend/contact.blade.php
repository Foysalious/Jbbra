	<!-- header are start -->

	@include('frontend.header')


	<!-- header are end -->


	<!-- page-header area start -->
	<section class="page-header">
        <div class="overlay">
            <div class="container">
                <div class="banner-position">
                    <div class="banner-content">
                        <h2>Contact Us</h2>
                        <ul class="banner-link">
                            <li><a href="index.php">Home</a></li>
                            <li>/</li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- page-header area ends -->

	<!-- contact area start -->
	<section class="contact-area">
		<div class="container">
			<div class="section-wrapper">
				<div class="row">
					<div class="col-lg-7 mt-35">	
						<div class="section-header">
							<span>JBBRA Community</span>
							<h2>Contact Us</h2>
							<h3>Changing the culture.</h3>
						</div>
						<div class="post-text">
							<p>We provide free pick up and drop off at home or school for all behind-the-wheel lessons. And, we offer a payment plan at no additional charge. </p>
						</div>
						<div class="row justify-content-center">
							<div class="col-xl-4 col-lg-5 col-md-6 col-12">
								<div class="icon-box">
									<div class="icon-styled">
										<i class="fa fa-phone"></i>
									</div>
									<p>+1 234 056 78 90</p>
									<p>+1 452 643 89 34</p>
								</div>
								<div class="divider-30 divider-sm-0 divider-md-0 divider-xl-0"></div>
							</div>
							<div class="col-xl-4 col-lg-5 col-md-6 col-12 mt-4 mt-md-0">
								<div class="icon-box">
									<div class="icon-styled">
										<i class="fa fa-meetup"></i>
									</div>
									<p>2688 Simpson</p>
									<p>Avenue Harrisburg</p>
								</div>
								<div class="divider-30 divider-sm-0 divider-md-0 divider-xl-0"></div>
							</div>
							<div class="col-xl-4 col-lg-5 col-md-6 col-12 mt-4 mt-xl-0">
								<div class="icon-box">
									<div class="icon-styled">
										<i class="fa fa-user"></i>
									</div>
									<p>info@JBBRA.com</p>
									<p>sample@example.com</p>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="col-1"></div> -->
					<div class="col-lg-5 col-12">
						<form class="contact-form mt-4 mt-lg-0" method="post" action="/">
							<div class="row">
								<div class="col-sm-12">
									<h4 class="title_block">Contact Form</h4>
									<div class="form-group mt-4">
										<label for="name">Full Name <span class="required">*</span></label>
										<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
									</div>
									<div class="form-group">
										<label for="email">Email address<span class="required">*</span></label>
										<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
									</div>
	
									<div class="form-group">
										<label for="message">Message</label>
										<textarea aria-required="true" rows="4" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
									</div>
								</div>
							</div>
							<div class="row mt-30">
								<div class="col-sm-12">
									<div class="form-group mb-0">
										<button type="submit" class="btn"><span>Email Us</span></button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- contact area ends  -->

	<!-- map area start -->
	<div class="mdp-map">
		<div id="map">
			<iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
		</div>
	</div>
	<!-- map area ends  -->
	
	<!-- sponsor area start -->
	<div class="sponsor-section">
		<div class="container">
            <div class="section-header text-center mb-5">
                <h3>Employers</h3>
            </div>
			<div class="sponsor-wrapper">
				<div class="sponsor-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="sponsor-thumb">
								<div class="thumb-inner">
									<a href="#" class="sponsor-logo">
										<span class="before-image"><img src="{{asset('frontend/assets/images/sponsor/sponsor.png')}}" alt="sponsor-imge"></span>
										<span class="after-image"><img src="{{asset('frontend/assets/images/sponsor/sponsor.png')}}" alt="sponsor-imge"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="sponsor-thumb">
								<div class="thumb-inner">
									<a href="#" class="sponsor-logo">
										<span class="before-image"><img src="{{asset('frontend/assets/images/sponsor/sponsor_1.png')}}" alt="sponsor-imge"></span>
										<span class="after-image"><img src="{{asset('frontend/assets/images/sponsor/sponsor_1.png')}}" alt="sponsor-imge"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="sponsor-thumb">
								<div class="thumb-inner">
									<a href="#" class="sponsor-logo">
										<span class="before-image"><img src="{{asset('frontend/assets/images/sponsor/sponsor_2.png')}}" alt="sponsor-imge"></span>
										<span class="after-image"><img src="{{asset('frontend/assets/images/sponsor/sponsor_2.png')}}" alt="sponsor-imge"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="sponsor-thumb">
								<div class="thumb-inner">
									<a href="#" class="sponsor-logo">
										<span class="before-image"><img src="{{asset('frontend/assets/images/sponsor/sponsor_3.png')}}" alt="sponsor-imge"></span>
										<span class="after-image"><img src="{{asset('frontend/assets/images/sponsor/sponsor_3.png')}}" alt="sponsor-imge"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="sponsor-thumb">
								<div class="thumb-inner">
									<a href="#" class="sponsor-logo">
										<span class="before-image"><img src="{{asset('frontend/assets/images/sponsor/sponsor.png')}}" alt="sponsor-imge"></span>
										<span class="after-image"><img src="{{asset('frontend/assets/images/sponsor/sponsor.png')}}" alt="sponsor-imge"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="sponsor-thumb">
								<div class="thumb-inner">
									<a href="#" class="sponsor-logo">
										<span class="before-image"><img src="{{asset('frontend/assets/images/sponsor/sponsor_1.png')}}" alt="sponsor-imge"></span>
										<span class="after-image"><img src="{{asset('frontend/assets/images/sponsor/sponsor_1.png')}}" alt="sponsor-imge"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="sponsor-thumb">
								<div class="thumb-inner">
									<a href="#" class="sponsor-logo">
										<span class="before-image"><img src="{{asset('frontend/assets/images/sponsor/sponsor_2.png')}}" alt="sponsor-imge"></span>
										<span class="after-image"><img src="f{{asset('rontend/assets/images/sponsor/sponsor_2.png')}}" alt="sponsor-imge"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="sponsor-thumb">
								<div class="thumb-inner">
									<a href="#" class="sponsor-logo">
										<span class="before-image"><img src="{{asset('frontend/assets/images/sponsor/sponsor_3.png')}}" alt="sponsor-imge"></span>
										<span class="after-image"><img src="{{asset('frontend/assets/images/sponsor/sponsor_3.png')}}" alt="sponsor-imge"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="sponsor-thumb">
								<div class="thumb-inner">
									<a href="#" class="sponsor-logo">
										<span class="before-image"><img src="{{asset('frontend/assets/images/sponsor/sponsor.png')}}" alt="sponsor-imge"></span>
										<span class="after-image"><img src="{{asset('frontend/assets/images/sponsor/sponsor.png')}}" alt="sponsor-imge"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="emp-btn d-flex justify-content-center mt-5">
				<a href="employers-home.php" class="btn"><span>View All Employers</span></a>
			</div>
		</div>
	</div>
	<!-- sponsor area end -->

	<!-- footer area star -->
		
		@include('frontend.footer')
	<!-- footer area end -->