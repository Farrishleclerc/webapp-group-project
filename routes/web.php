<?php

use Illuminate\Support\Facades\Route;

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/', function () {
    return view('mainpage');
});

// Add login route
Route::get('/login', function () {
    return view('login'); // Assuming your login blade is in resources/views/login.blade.php
})->name('login');
