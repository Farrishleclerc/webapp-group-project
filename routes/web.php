<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('mainpage');
})->name('home');

// Add login route
Route::get('/login', function () {
    return view('login'); // Assuming your login blade is in resources/views/login.blade.php
})->name('login');

Route::get('/register', function () {
    return view('register'); // Assuming your login blade is in resources/views/login.blade.php
})->name('register');

Route::get('/contact', function () {
    return view('contact'); // Assuming you have a contact.blade.php
})->name('contact');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');
