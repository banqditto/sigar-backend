<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Routing Laravel SIGAR berhasil!');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
