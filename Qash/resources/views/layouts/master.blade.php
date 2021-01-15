<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qash - Crypto Exchange Dashboard UI Kit</title>
    @include('layouts.head')
</head>

<body>
    <div id="main-wrapper">
        @yield('extra-layout')
        @yield('content')
    </div>
    @include('modal')
    @include('layouts.footer-script')
</body>

</html>
