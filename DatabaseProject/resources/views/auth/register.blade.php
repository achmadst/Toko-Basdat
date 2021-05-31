@extends('layouts.app')

@section('content')
<!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="{{url('home')}}">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
    <!-- End Banner Area -->
    
<!--================Login Box Area =================-->
    <section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
                <div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="{{ url('Frontend/img/login.jpg') }}" alt="">
					</div>
				</div>
                <div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Register Account</h3>
                        <form class="row login_form" method="POST" action="{{ url('profile') }}" id="contactForm" novalidate="novalidate">
                            @csrf

                            <div class="col-md-12 form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                            <div class="col-md-12 form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" >
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                            <div class="col-md-12 form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" >
                            </div>
                        

                            <div class="col-md-12 form-group">
							    <button type="submit" value="submit" class="primary-btn">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
