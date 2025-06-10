<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('mainpage');
})->name('home');

// Contact Page (named route)
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Login Page (named route)
Route::get('/login', function () {
    return view('login');
})->name('login');

// Register Page (named route)
Route::get('/register', function () {
    return view('register');
})->name('register');
