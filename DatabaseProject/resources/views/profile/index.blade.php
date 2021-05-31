@extends('layouts.app')

@section('content')
<!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">    
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Profile</h1>
                    <nav class="d-flex align-items-center">
                        <a href="home">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Profile</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Profile Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="billing_details">
                <h4><i class="fa fa-user"></i> Your Profile Information</h4>
                <div class="table-responsive">
                    <table class="table col-lg-8">
                        <tbody>
                            <tr>
                                <td width="200">Name</td>
                                <td width="50">:</td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td>:</td>
                                <td>{{ $user->no_hp }}</td>
                            <tr>
                                <td>Address</td>
                                <td>:</td>
                                <td>{{ $user->alamat }}</td>
                            </tr>
                            <tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Profile Area =================-->
    <!--================Edit Profile Area =================-->
    <section class="checkout_area">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3><i class="fa fa-edit"></i> Edit Your Profile</h3>
                        <form class="row contact_form" action="{{ url('profile') }}" method="post" novalidate="novalidate">
                        @csrf
                            <div class="col-md-8 form-group p_star">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name"
                                placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-8 form-group p_star">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email"
                                placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-8 form-group p_star">
                                <input id="number" type="text" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ $user->no_hp }}" required autocomplete="number"
                                placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'">
                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-8 form-group p_star">
                                <textarea id="add1" type="text" class="form-control @error('add1') is-invalid @enderror" name="add1" required autocomplete="add1"
                                placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'">{{ $user->alamat }}</textarea>
                                @error('add1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-8 form-group p_star">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-8 form-group p_star">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'">
                            </div>
                            <div class="col-md-8 form-group p_star">
                                <button type="submit" value="submit" class="primary-btn">Edit Profile</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Edit Profile Area =================-->
@endsection