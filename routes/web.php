<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('mainpage');
});

// Registration routes
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// Login route
Route::get('/login', function () {
    return view('login');
})->name('login');

// Contact route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
