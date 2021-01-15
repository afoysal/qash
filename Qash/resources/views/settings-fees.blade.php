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
                    <h4>Fees</h4>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="settings-menu">
                            @include('profile-menu')
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="card">
                                    <div class="card-header px-0">
                                        <h4 class="card-title">Normal User </h4>
                                    </div>
                                    <div class="card-body px-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Tier</th>
                                                        <th>Total Qash holding</th>
                                                        <th>30-day Trading Volume (BTC)</th>
                                                        <th>Maker Fee</th>
                                                        <th>Taker Fee</th>
                                                        <th>24h Withdrawal Limit (BTC)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Lv 1</td>
                                                        <td>
                                                            &#60; 500</td>
                                                        <td>
                                                            &#60; 1000</td>
                                                        <td>
                                                            &#60; 0.100%</td>
                                                        <td>
                                                            &#60; 0.150%</td>
                                                        <td>500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lv 1</td>
                                                        <td>
                                                            &#60; 500</td>
                                                        <td>
                                                            &#60; 1000</td>
                                                        <td>
                                                            &#60; 0.100%</td>
                                                        <td>
                                                            &#60; 0.150%</td>
                                                        <td>500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lv 1</td>
                                                        <td>
                                                            &#60; 500</td>
                                                        <td>
                                                            &#60; 1000</td>
                                                        <td>
                                                            &#60; 0.100%</td>
                                                        <td>
                                                            &#60; 0.150%</td>
                                                        <td>500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lv 1</td>
                                                        <td>
                                                            &#60; 500</td>
                                                        <td>
                                                            &#60; 1000</td>
                                                        <td>
                                                            &#60; 0.100%</td>
                                                        <td>
                                                            &#60; 0.150%</td>
                                                        <td>500</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12">
                                <div class="card">
                                    <div class="card-header px-0">
                                        <h4 class="card-title">VIP User </h4>
                                    </div>
                                    <div class="card-body px-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Tier</th>
                                                        <th>Total Qash holding</th>
                                                        <th>30-day Trading Volume (BTC)</th>
                                                        <th>Maker Fee</th>
                                                        <th>Taker Fee</th>
                                                        <th>24h Withdrawal Limit (BTC)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Lv 1</td>
                                                        <td>
                                                            &#60; 500</td>
                                                        <td>
                                                            &#60; 1000</td>
                                                        <td>
                                                            &#60; 0.100%</td>
                                                        <td>
                                                            &#60; 0.150%</td>
                                                        <td>500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lv 1</td>
                                                        <td>
                                                            &#60; 500</td>
                                                        <td>
                                                            &#60; 1000</td>
                                                        <td>
                                                            &#60; 0.100%</td>
                                                        <td>
                                                            &#60; 0.150%</td>
                                                        <td>500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lv 1</td>
                                                        <td>
                                                            &#60; 500</td>
                                                        <td>
                                                            &#60; 1000</td>
                                                        <td>
                                                            &#60; 0.100%</td>
                                                        <td>
                                                            &#60; 0.150%</td>
                                                        <td>500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lv 1</td>
                                                        <td>
                                                            &#60; 500</td>
                                                        <td>
                                                            &#60; 1000</td>
                                                        <td>
                                                            &#60; 0.100%</td>
                                                        <td>
                                                            &#60; 0.150%</td>
                                                        <td>500</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
