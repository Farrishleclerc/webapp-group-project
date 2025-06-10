<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('mainpage');
});

// Add login route
Route::get('/login', function () {
    return view('login'); // Assuming your login blade is in resources/views/login.blade.php
})->name('login');

Route::get('/register', function () {
    return view('register'); // Assuming your login blade is in resources/views/login.blade.php
})->name('register');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Booking Routes
Route::prefix('booking')->group(function () {
    Route::get('/single', [BookingController::class, 'single'])->name('booking.single');
    Route::get('/package', [BookingController::class, 'package'])->name('booking.package');
});
