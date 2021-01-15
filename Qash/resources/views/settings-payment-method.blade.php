@extends('layouts.master')

@section('extra-layout')
@include('layouts.header')
@include('layouts.sidebar')
@stop

@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="page-title">
                    <h4>Payment Method</h4>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="settings-menu">
                            @include('profile-menu')
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header px-0">
                                        <h4 class="card-title">Add a payment method </h4>
                                    </div>
                                    <div class="card-body px-0">
                                        <div class="verify-content">
                                            <div class="d-flex align-items-center">
                                                <span class="mr-3 icon-circle bg-primary text-white"><i
                                                        class="icofont-ui-touch-phone"></i></span>
                                                <div class="primary-number">
                                                    <p class="mb-0">Bank of America</p>
                                                    <small>Bank **************5421</small>
                                                    <br>
                                                    <span class="text-success">Verified</span>
                                                </div>
                                            </div>
                                            <button class=" btn btn-outline-primary">Manage</button>
                                        </div>
                                        <hr class="dropdown-divider my-4">
                                        <div class="verify-content">
                                            <div class="d-flex align-items-center">
                                                <span class="mr-3 icon-circle bg-primary text-white"><i
                                                        class="icofont-email"></i></span>
                                                <div class="primary-number">
                                                    <p class="mb-0">Master Card</p>
                                                    <small>Credit Card *********5478</small>
                                                    <br>
                                                    <span class="text-success">Verified</span>
                                                </div>
                                            </div>
                                            <button class=" btn btn-outline-primary">Manage</button>
                                        </div>

                                        <div class="mt-5">
                                            <button type="button" class="btn btn-primary mr-3" data-toggle="modal"
                                                data-target="#addBank">Add New Bank</button>
                                            <button type="button" class="btn btn-success" data-toggle="modal"
                                                data-target="#addCard">Add New Card</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
