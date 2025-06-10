<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainpage');
});

// ✅ Named contact route to fix the error
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Named login route
Route::get('/login', function () {
    return view('login'); // resources/views/login.blade.php
})->name('login');

// Named register route
Route::get('/register', function () {
    return view('register'); // resources/views/register.blade.php
})->name('register');
