<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/pilih-tanggal', function () {
    return view('pilih-tanggal');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/bookings', function () {
    return view('bookings');
});

Route::get('/booking-detail', function () {
    return view('booking-detail');
});

Route::get('/rewards', function () {
    return view('rewards');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/host/welcome', function () {
    return view('host-welcome');
});

Route::get('/host/verification', function () {
    return view('host-verification');
});

Route::get('/host/dashboard', function () {
    return view('host-dashboard');
});

Route::get('/host/add-new', function () {
    return view('host-add-new');
});

Route::get('/host/properties', function () {
    return view('host-properties');
});

Route::get('/host/reports', function () {
    return view('host-reports');
});

Route::get('/host/account', function () {
    return view('host-account');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/register/success', function () {
    return view('auth.register-success');
});
