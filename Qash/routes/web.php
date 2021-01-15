<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/trade', function () {
    return view('trade');
});

Route::get('/wallet', function () {
    return view('wallet');
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/intro', function () {
    return view('intro');
});

Route::get('/otp-2', function () {
    return view('otp-2');
});

Route::get('/otp-1', function () {
    return view('otp-1');
});

Route::get('/price-details', function () {
    return view('price-details');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/reset', function () {
    return view('reset');
});

Route::get('/verify-email', function () {
    return view('verify-email');
});

Route::get('/settings-activity', function () {
    return view('settings-activity');
});

Route::get('/settings-profile', function () {
    return view('settings-profile');
});

Route::get('/settings-application', function () {
    return view('settings-application');
});

Route::get('/settings-security', function () {
    return view('settings-security');
});

Route::get('/settings-privacy', function () {
    return view('settings-privacy');
});

Route::get('/settings-payment-method', function () {
    return view('settings-payment-method');
});

Route::get('/settings-api', function () {
    return view('settings-api');
});

Route::get('/settings-fees', function () {
    return view('settings-fees');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/lock', function () {
    return view('lock');
});

Route::get('/demo', function () {
    return view('demo');
});
