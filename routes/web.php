<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\AdminCrudController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('mainpage');
})->name('home');



// User Auth Routes (for guests only)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
});

// Contact Page Routes
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Booking homepage (choose booking type)
Route::get('/booking', function () {
    return view('booking.booking');
})->name('booking');

// User Logout Route (only accessible when logged in)
Route::middleware('auth')->post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Authenticated User Routes (Booking-related + Payment)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    // Package Booking
    Route::get('/packagebooking/{package}', [BookingController::class, 'showBooking'])->name('package.booking');
    Route::post('/submit-booking', [BookingController::class, 'submitBooking'])->name('booking.submit');

    // Single Booking
    Route::get('/singlebooking', [BookingController::class, 'showSingleBooking'])->name('single.booking');
    Route::post('/singlebooking/submit', [BookingController::class, 'submitSingleBooking'])->name('booking.single.submit');

    // ✅ Payment Routes
    Route::get('/payment', [PaymentController::class, 'show'])->name('payment.show');
    Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process');
});

// payment
// web.php
Route::get('/payment', [PaymentController::class, 'showPaymentForm'])->name('payment.form');
Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process');




/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    // Admin login routes (guests only)
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
    });

    // Admin logout route
    Route::middleware('auth:admin')->post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    // Admin protected routes
    Route::middleware('auth:admin')->group(function () {
        // Dashboard
        Route::get('/dashboard', [AdminCrudController::class, 'dashboard'])->name('dashboard');

        // User Management
        Route::prefix('users')->name('users.')->group(function () {
            Route::get('/', [AdminCrudController::class, 'indexadmin'])->name('indexadmin');
            Route::get('/create', [AdminCrudController::class, 'create'])->name('create');
            Route::post('/', [AdminCrudController::class, 'store'])->name('store');
            Route::get('/{user}/edit', [AdminCrudController::class, 'editadmin'])->name('editadmin');
            Route::put('/{user}', [AdminCrudController::class, 'update'])->name('update');
            Route::delete('/{user}', [AdminCrudController::class, 'destroy'])->name('destroy');
        });

        // Contact Messages
        Route::prefix('contacts')->name('contacts.')->group(function () {
            Route::get('/', [AdminCrudController::class, 'contactMessages'])->name('index');
            Route::delete('/{contact}', [AdminCrudController::class, 'destroyContact'])->name('destroy');
        });

        Route::prefix('bookings')->name('bookings.')->group(function () {
            Route::get('/', [AdminCrudController::class, 'bookingIndex'])->name('index');
            Route::get('/{booking}/edit', [AdminCrudController::class, 'editBooking'])->name('edit');
            Route::put('/{booking}', [AdminCrudController::class, 'updateBooking'])->name('update');
            Route::delete('/{booking}', [AdminCrudController::class, 'destroyBooking'])->name('destroy');
        });
    });
});
