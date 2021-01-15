@extends('layouts.master')


@section('content')
<div class="header landing">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <nav class="navbar">
                    <div class="brand-logo">
                        <a href="{{url('/')}}">
                            <img src="{{ URL::asset('assets/images/logo.png') }}" alt="logo">
                            <span>Qash</span>
                        </a>
                    </div>
                    <a href="{{url('/signin')}}" class="btn btn-success">Sign in</a>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="intro" id="intro" data-scroll-index="0">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-6 col-md-6">
                <div class="intro-content pb-5">
                    <h1>Qash - Crypto Exchange Dashboard UI Kit</h1>
                    <p>Qash is the complete UI Kit for cryptocurrency exchange. Sign in, Signup, Phone and ID
                        card
                        verification, One time password verify and add bank, debit card settings and profile etc
                        pages included. </p>
                    <div class="intro-btn">
                        <a href="#" class="btn btn-primary mr-3" data-scroll-nav="1">View Demo</a>
                        <a href="#" class="btn btn-outline-primary">Buy</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-md-6 py-md-5">
                <div class="intro-demo_img">
                    <img src="{{ URL::asset('assets/images/demo/dashboard.jpg') }}" alt="dashboard" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="demo">
    <div class="container">
        <div class="row py-lg-5 justify-content-center">
            <div class="col-xl-7">
                <div class="section-heading text-center">
                    <h2>Pages</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="demo_img">
                    <a href="{{url('/intro')}}" target="_blank">
                        <div class="img-wrap">
                            <img src="{{ URL::asset('assets/images/demo/intro.jpg') }}" alt="intro" class="img-fluid">
                        </div>
                    </a>
                    <h4>Intro</h4>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="demo_img">
                    <a href="{{url('/')}}" target="_blank">
                        <div class="img-wrap">
                            <img src="{{ URL::asset('assets/images/demo/home.jpg') }}" alt="home" class="img-fluid">
                        </div>
                    </a>
                    <h4>Dashboard</h4>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="demo_img">
                    <a href="{{url('/trade')}}" target="_blank">
                        <div class="img-wrap">
                            <img src="{{ URL::asset('assets/images/demo/trade.jpg') }}" alt="trade" class="img-fluid">
                        </div>
                    </a>
                    <h4>Trade</h4>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="demo_img">
                    <a href="{{url('/wallet')}}" target="_blank">
                        <div class="img-wrap">
                            <img src="{{ URL::asset('assets/images/demo/wallet.jpg') }}" alt="wallet" class="img-fluid">
                        </div>
                    </a>
                    <h4>Wallet</h4>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="demo_img">
                    <a href="{{url('/price')}}" target="_blank">
                        <div class="img-wrap">
                            <img src="{{ URL::asset('assets/images/demo/price.jpg') }}" alt="price" class="img-fluid">
                        </div>
                    </a>
                    <h4>Price</h4>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="demo_img">
                    <a href="{{url('/price-details')}}" target="_blank">
                        <div class="img-wrap">
                            <img src="{{ URL::asset('assets/images/demo/price-details.jpg') }}" alt="price-details"
                                class="img-fluid">
                        </div>
                    </a>
                    <h4>Price Details</h4>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="demo_img">
                    <a href="{{url('/profile')}}" target="_blank">
                        <div class="img-wrap">
                            <img src="{{ URL::asset('assets/images/demo/profile.jpg') }}" alt="profile"
                                class="img-fluid">
                        </div>
                    </a>
                    <h4>Profile</h4>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="demo_img">
                    <a href="{{url('/signin')}}" target="_blank">
                        <div class="img-wrap">
                            <img src="{{ URL::asset('assets/images/demo/signin.jpg') }}" alt="signin" class="img-fluid">
                        </div>
                    </a>
                    <h4>Sign in</h4>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="demo_img">
                    <a href="{{url('/signup')}}" target="_blank">
                        <div class="img-wrap">
                            <img src="{{ URL::asset('assets/images/demo/signup.jpg') }}" alt="signup" class="img-fluid">
                        </div>
                    </a>
                    <h4>Sign up</h4>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="demo_img">
                    <a href="{{url('/reset')}}" target="_blank">
                        <div class="img-wrap">
                            <img src="{{ URL::asset('assets/images/demo/reset.jpg') }}" alt="reset" class="img-fluid">
                        </div>
                    </a>
                    <h4>Reset</h4>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="demo_img">
                    <a href="{{url('/verify-email')}}" target="_blank">
                        <div class="img-wrap">
                            <img src="{{ URL::asset('assets/images/demo/verify-email.jpg') }}" alt="verify-email"
                                class="img-fluid">
                        </div>
                    </a>
                    <h4>Verify Email</h4>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="demo_img">
                    <a href="{{url('/otp-1')}}" target="_blank">
                        <div class="img-wrap">
                            <img src="{{ URL::asset('assets/images/demo/verify-phone.jpg') }}" alt="verify-phone"
                                class="img-fluid">
                        </div>
                    </a>
                    <h4>Verify Phone</h4>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="demo_img">
                    <a href="{{url('/otp-2')}}" target="_blank">
                        <div class="img-wrap">
                            <img src="{{ URL::asset('assets/images/demo/verify-code.jpg') }}" alt="verify-code"
                                class="img-fluid">
                        </div>
                    </a>
                    <h4>Verify Code</h4>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="demo_img">
                    <a href="{{url('/lock')}}" target="_blank">
                        <div class="img-wrap">
                            <img src="{{ URL::asset('assets/images/demo/lock.jpg') }}" alt="lock" class="img-fluid">
                        </div>
                    </a>
                    <h4>Lock</h4>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="demo_img">
                    <a href="{{url('/settings-profile')}}" target="_blank">
                        <div class="img-wrap">
                            <img src="{{ URL::asset('assets/images/demo/profile-edit.jpg') }}" alt="profile-edit"
                                class="img-fluid">
                        </div>
                    </a>
                    <h4>Profile Edit</h4>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="demo_img">
                    <a href="{{url('/settings-application')}}" target="_blank">
                        <div class="img-wrap">
                            <img src="{{ URL::asset('assets/images/demo/application.jpg') }}" alt="application"
                                class="img-fluid">
                        </div>
                    </a>
                    <h4>Application</h4>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="demo_img">
                    <a href="{{url('/settings-security')}}" target="_blank">
                        <div class="img-wrap">
                            <img src="{{ URL::asset('assets/images/demo/security.jpg') }}" alt="security"
                                class="img-fluid">
                        </div>
                    </a>
                    <h4>Security</h4>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="demo_img">
                    <a href="{{url('/settings-activity')}}" target="_blank">
                        <div class="img-wrap">
                            <img src="{{ URL::asset('assets/images/demo/activity.jpg') }}" alt="activity"
                                class="img-fluid">
                        </div>
                    </a>
                    <h4>Activity</h4>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="demo_img">
                    <a href="{{url('/settings-privacy')}}" target="_blank">
                        <div class="img-wrap">
                            <img src="{{ URL::asset('assets/images/demo/privacy.jpg') }}" alt="privacy"
                                class="img-fluid">
                        </div>
                    </a>
                    <h4>Privacy</h4>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="demo_img">
                    <a href="{{url('/settings-payment-method')}}" target="_blank">
                        <div class="img-wrap">
                            <img src="{{ URL::asset('assets/images/demo/payment.jpg') }}" alt="payment"
                                class="img-fluid">
                        </div>
                    </a>
                    <h4>Payment</h4>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="demo_img">
                    <a href="{{url('/settings-api')}}" target="_blank">
                        <div class="img-wrap">
                            <img src="{{ URL::asset('assets/images/demo/api.jpg') }}" alt="api" class="img-fluid">
                        </div>
                    </a>
                    <h4>API</h4>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="demo_img">
                    <a href="{{url('/settings-fees')}}" target="_blank">
                        <div class="img-wrap">
                            <img src="{{ URL::asset('assets/images/demo/fees.jpg') }}" alt="fees" class="img-fluid">
                        </div>
                    </a>
                    <h4>Fees</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="copyright">
                    <p>© Copyright 2020 <a href="#">Qash</a> I All Rights Reserved</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="footer-social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
