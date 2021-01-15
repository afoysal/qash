<!-- ========== Left Sidebar Start ========== -->
<div class="sidebar">
    <div class="brand-logo">
        <a href="{{url('/')}}">
            <img src="{{ URL::asset('assets/images/logo.png') }}" alt="logo">
        </a>
    </div>
    <div class="menu">
        <ul>
            <li>
                <a {{ (Request::is('/')) ? "class = active" : "" }} href="{{url('/')}}" data-toggle="tooltip"
                    data-placement="right" title="Home">
                    <span>
                        <i class="icofont-ui-home"></i>
                    </span>
                </a>
            </li>
            <li>
                <a {{ (Request::is('/trade')) ? "class = active" : "" }} href="{{url('/trade')}}" data-toggle="tooltip"
                    data-placement="right" title="Trade">
                    <span>
                        <i class="icofont-stack-exchange"></i>
                    </span>
                </a>
            </li>
            <li>
                <a {{ (Request::is('/wallet')) ? "class = active" : "" }} href="{{url('/wallet')}}"
                    data-toggle="tooltip" data-placement="right" title="Wallet">
                    <span>
                        <i class="icofont-wallet"></i>
                    </span>
                </a>
            </li>
            <li>
                <a {{ (Request::is('/price')) ? "class = active" : "" }} href="{{url('/price')}}" data-toggle="tooltip"
                    data-placement="right" title="Price">
                    <span>
                        <i class="icofont-price"></i>
                    </span>
                </a>
            </li>
            <li class="logout">
                <a {{ (Request::is('/signin')) ? "class = active" : "" }} href="{{url('/signin')}}"
                    data-toggle="tooltip" data-placement="right" title="Signin">
                    <span>
                        <i class="icofont-power"></i>
                    </span>
                </a>
            </li>
        </ul>

        <p class="copyright">
            &#169; <a href="#">Qkit</a>
        </p>
    </div>
</div>
<!-- Left Sidebar End -->
