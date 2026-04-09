<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('control_panel.dashboard');
});

Route::get('/logout', function () {
    return view('auth.login');
});

Route::get('/favorite', function () {
    return view('control_panel.favorite');
});

Route::get('/header', function () {
    return view('layout.header');
});

Route::get('/sidebar', function () {
    return view('layout.sidebar');
});

Route::get('/footer', function () {
    return view('layout.footer');
});
