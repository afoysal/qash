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
                        <a href="{{url('/signin')}}" class="btn btn-primary">Get Started</a>
                        <a href="{{url('/')}}" class="btn btn-outline-primary">Browse Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-md-6 py-md-5">
                <div class="intro-demo_img">
                    <img src="{{ URL::asset('assets//images/demo/dashboard.jpg') }}" alt="dashboard" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
