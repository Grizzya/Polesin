<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/services', function () {
    return view('services'); // Ini akan memuat file services.blade.php
});

Route::get('/about-us', function () {
    return view('about_us'); // Ini akan memuat file services.blade.php
});

Route::get('/gallery', function () {
    return view('gallery'); // Ini akan memuat file services.blade.php
});
