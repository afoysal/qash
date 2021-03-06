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
                    <h4 class="card-title mt-3">Create your account</h4>
                </div>
                <div class="auth-form card">
                    <div class="card-body">
                        <form method="get" name="myform" class="signin_validate row g-3"
                            action="{{url('/verify-email')}}">
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control" placeholder="hello@example.com" name="email">
                            </div>
                            <div class="col-12">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <div class="col-12">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">
                                        I certify that I am 18 years of age or older, and agree to the <a href="#"
                                            class="text-primary">User Agreement</a> and <a href="#"
                                            class="text-primary">Privacy Policy</a>.
                                    </label>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block">Create account</button>
                            </div>
                        </form>
                        <div class="text-center">
                            <p class="mt-3 mb-0">
                                <a class="text-primary" href="{{url('/signin')}}">Sign in</a>
                                to your account
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
