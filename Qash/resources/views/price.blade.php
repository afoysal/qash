@extends('layouts.master')

@section('extra-layout')
@include('layouts.header')
@include('layouts.sidebar')
@stop

@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="price-widget bg-btc">
                    <a href="{{url('/price-details')}}">
                        <div class="price-content">
                            <div class="icon-title">
                                <i class="cc BTC-alt"></i>
                                <span>Bitcoin</span>
                            </div>
                            <h5>$ 11,785.10</h5>
                        </div>
                        <div id="chart"></div>
                    </a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="price-widget bg-eth">
                    <a href="{{url('/price-details')}}">
                        <div class="price-content">
                            <div class="icon-title">
                                <i class="cc ETH-alt"></i>
                                <span>Ethereum</span>
                            </div>
                            <h5>$ 11,785.10</h5>
                        </div>
                        <div id="chart2"></div>
                    </a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="price-widget bg-usdt">
                    <a href="{{url('/price-details')}}">
                        <div class="price-content">
                            <div class="icon-title">
                                <i class="cc USDT-alt"></i>
                                <span>Tether</span>
                            </div>
                            <h5>$ 11,785.10</h5>
                        </div>
                        <div id="chart3"></div>
                    </a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="price-widget bg-xrp">
                    <a href="{{url('/price-details')}}">
                        <div class="price-content">
                            <div class="icon-title">
                                <i class="cc XRP-alt"></i>
                                <span>Ripple</span>
                            </div>
                            <h5>$ 11,785.10</h5>
                        </div>
                        <div id="chart4"></div>
                    </a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="price-widget bg-ltc">
                    <a href="{{url('/price-details')}}">
                        <div class="price-content">
                            <div class="icon-title">
                                <i class="cc LTC-alt"></i>
                                <span>Litecoin</span>
                            </div>
                            <h5>$ 11,785.10</h5>
                        </div>
                        <div id="chart5"></div>
                    </a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="price-widget bg-ada">
                    <a href="{{url('/price-details')}}">
                        <div class="price-content">
                            <div class="icon-title">
                                <i class="cc ADA-alt"></i>
                                <span>Cardano</span>
                            </div>
                            <h5>$ 11,785.10</h5>
                        </div>
                        <div id="chart6"></div>
                    </a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="price-widget bg-eos">
                    <a href="{{url('/price-details')}}">
                        <div class="price-content">
                            <div class="icon-title">
                                <i class="cc EOS-alt"></i>
                                <span>EOS</span>
                            </div>
                            <h5>$ 11,785.10</h5>
                        </div>
                        <div id="chart7"></div>
                    </a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="price-widget bg-xmr">
                    <a href="{{url('/price-details')}}">
                        <div class="price-content">
                            <div class="icon-title">
                                <i class="cc XMR-alt"></i>
                                <span>Monero</span>
                            </div>
                            <h5>$ 11,785.10</h5>
                        </div>
                        <div id="chart8"></div>
                    </a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="price-widget bg-xtz">
                    <a href="{{url('/price-details')}}">
                        <div class="price-content">
                            <div class="icon-title">
                                <i class="cc XTZ-alt"></i>
                                <span>Tezos</span>
                            </div>
                            <h5>$ 11,785.10</h5>
                        </div>
                        <div id="chart9"></div>
                    </a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="price-widget bg-xem">
                    <a href="{{url('/price-details')}}">
                        <div class="price-content">
                            <div class="icon-title">
                                <i class="cc XEM-alt"></i>
                                <span>NEM</span>
                            </div>
                            <h5>$ 11,785.10</h5>
                        </div>
                        <div id="chart10"></div>
                    </a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="price-widget bg-neo">
                    <a href="{{url('/price-details')}}">
                        <div class="price-content">
                            <div class="icon-title">
                                <i class="cc NEO-alt"></i>
                                <span>NEO</span>
                            </div>
                            <h5>$ 11,785.10</h5>
                        </div>
                        <div id="chart11"></div>
                    </a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="price-widget bg-dash">
                    <a href="{{url('/price-details')}}">
                        <div class="price-content">
                            <div class="icon-title">
                                <i class="cc DASH-alt"></i>
                                <span>Dash</span>
                            </div>
                            <h5>$ 11,785.10</h5>
                        </div>
                        <div id="chart12"></div>
                    </a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="price-widget bg-etc">
                    <a href="{{url('/price-details')}}">
                        <div class="price-content">
                            <div class="icon-title">
                                <i class="cc ETC-alt"></i>
                                <span>Ethereum Classic</span>
                            </div>
                            <h5>$ 11,785.10</h5>
                        </div>
                        <div id="chart13"></div>
                    </a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="price-widget bg-dgb">
                    <a href="{{url('/price-details')}}">
                        <div class="price-content">
                            <div class="icon-title">
                                <i class="cc DGB-alt"></i>
                                <span>DigiByte</span>
                            </div>
                            <h5>$ 11,785.10</h5>
                        </div>
                        <div id="chart14"></div>
                    </a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="price-widget bg-dcr">
                    <a href="{{url('/price-details')}}">
                        <div class="price-content">
                            <div class="icon-title">
                                <i class="cc DCR-alt"></i>
                                <span>Decred</span>
                            </div>
                            <h5>$ 11,785.10</h5>
                        </div>
                        <div id="chart15"></div>
                    </a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="price-widget bg-rep">
                    <a href="{{url('/price-details')}}">
                        <div class="price-content">
                            <div class="icon-title">
                                <i class="cc REP"></i>
                                <span>Augur</span>
                            </div>
                            <h5>$ 11,785.10</h5>
                        </div>
                        <div id="chart16"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
