@extends('layouts.master')


@section('content')
<div class="authincation section-padding">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-xl-5 col-md-6">
                <div class="mini-logo text-center my-4">
                    <a href="{{url('/intro')}}">
                        <img src="{{ URL::asset('assets/images/logo.png') }}" alt="logo">
                    </a>
                    <h4 class="card-title mt-3">Sign in to Qash</h4>
                </div>
                <div class="auth-form card">
                    <div class="card-body">
                        <form method="get" name="myform" class="signin_validate row g-3" action="{!! url('/otp-2') !!}">
                            <div class="col-12">
                                <input type="email" class="form-control" placeholder="hello@example.com" name="email">
                            </div>
                            <div class="col-12">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <div class="col-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Remember
                                        me</label>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{url('/reset')}}">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                            </div>
                        </form>
                        <p class="mt-3 mb-0">Don't have an account?
                            <a class="text-primary" href="{{url('/signup')}}">
                                Sign up
                            </a>
                        </p>
                    </div>
                </div>
                <div class="privacy-link">
                    <a href="{{url('/signup')}}">Have an issue with 2-factor
                        authentication?
                    </a>
                    <br />
                    <a href="{{url('/signup')}}">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
