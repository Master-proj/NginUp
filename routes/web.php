<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('splash');
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
