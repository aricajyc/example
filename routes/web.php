<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () { //declaring a route that listens to get request
    return view('home');
});

Route::get('/about', function () { //declaring a route that listens to get request
    return view('about');
});

Route::get('/contact', function () {
    return view('contact'); 
});