<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{ url('Frontend/img/fav.png') }}">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
    <title>Karma</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    
	<!--CSS============================================= -->
	<link rel="stylesheet" href="{{ url('Frontend/css/linearicons.css') }}">
	<link rel="stylesheet" href="{{ url('Frontend/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ url('Frontend/css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ url('Frontend/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ url('Frontend/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ url('Frontend/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ url('Frontend/css/nouislider.min.css') }}">
	<link rel="stylesheet" href="{{ url('Frontend/css/ion.rangeSlider.css') }}" />
	<link rel="stylesheet" href="{{ url('Frontend/css/ion.rangeSlider.skinFlat.css') }}" />
	<link rel="stylesheet" href="{{ url('Frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('Frontend/css/main.css') }}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    

    
</head>

<body>
    
    <!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="{{url('home')}}"><img src="{{url('Frontend/img/logo1.png') }}" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="{{url('home')}}">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="">Shop Category</a></li>
									<li class="nav-item"><a class="nav-link" href="">Product Details</a></li>
									<li class="nav-item"><a class="nav-link" href="">Product Checkout</a></li>
									<li class="nav-item"><a class="nav-link" href="">Shopping Cart</a></li>
									<li class="nav-item"><a class="nav-link" href="">Confirmation</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="">Blog Details</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="">Login</a></li>
									<li class="nav-item"><a class="nav-link" href="">Tracking</a></li>
									<li class="nav-item"><a class="nav-link" href="">Elements</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
						</ul>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                            </li>
                        </ul>
						
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</span></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</span></a>
                                </li>
                            @endif
                        	@else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ url('profile') }}">
                                        Profile
									</a>
									<a class="dropdown-item" href="{{ url('history') }}">
                                        History
                                    </a>
									<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item">
								@if(!empty(Auth::user()->id))
								<?php
								$customer = \App\Checkout::where('user_id', Auth::user()->id )->where
									('status', 0)->first();
								if(!empty($customer))
								{
									$barang_cust = \App\Keranjang::where('checkout_id', $customer->id)->count();
								}
								?>
								<a href="{{ url('cart') }}" class="cart">
									<span class="ti-bag"></span>
									@if(!empty($barang_cust))
									<div class="badge badge-danger">{{ $barang_cust }}</div>
									@endif
								</a>
								@else
								<a href="{{ url('cart') }}" class="cart"><span class="ti-bag"></span></div></a>
								@endif
							</li>
                        </ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
<!-- End Header Area -->

    
        <main class="py-4">
            @yield('content')
        </main>
    </div>


<!-- start footer Area -->
    <footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
							magna aliqua.
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instragram Feed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="Frontend/img/i1.jpg" alt=""></li>
							<li><img src="Frontend/img/i2.jpg" alt=""></li>
							<li><img src="Frontend/img/i3.jpg" alt=""></li>
							<li><img src="Frontend/img/i4.jpg" alt=""></li>
							<li><img src="Frontend/img/i5.jpg" alt=""></li>
							<li><img src="Frontend/img/i6.jpg" alt=""></li>
							<li><img src="Frontend/img/i7.jpg" alt=""></li>
							<li><img src="Frontend/img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->
    <script src="{{ url('Frontend/js/vendor/jquery-2.2.4.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{ url('Frontend/js/vendor/bootstrap.min.js') }}"></script>
	<script src="{{ url('Frontend/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ url('Frontend/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ url('Frontend/js/jquery.sticky.js') }}"></script>
	<script src="{{ url('Frontend/js/nouislider.min.js') }}"></script>
	<script src="{{ url('Frontend/js/countdown.js') }}"></script>
	<script src="{{ url('Frontend/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ url('Frontend/js/owl.carousel.min.js') }}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{ url('Frontend/js/gmaps.min.js') }}"></script>
	<script src="{{ url('Frontend/js/main.js') }}"></script>  
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	@include('sweet::alert')
</body>
</html>
