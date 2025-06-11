<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController; // Added
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\AdminCrudController;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('mainpage');
})->name('home');

// User auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// Contact routes
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Booking route
Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::get('/packagebooking/{package}', [BookingController::class, 'showBooking'])->name('package.booking');
Route::post('/submit-booking', [BookingController::class, 'submitBooking'])->name('booking.submit');

// Admin auth
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [AdminCrudController::class, 'dashboard'])->name('dashboard');

        // ✅ Fix: use name('indexadmin') and name('editadmin') to match Blade
        Route::prefix('users')->name('users.')->group(function () {
            Route::get('/', [AdminCrudController::class, 'indexadmin'])->name('indexadmin');
            Route::get('/create', [AdminCrudController::class, 'create'])->name('create');
            Route::post('/', [AdminCrudController::class, 'store'])->name('store');
            Route::get('/{user}/edit', [AdminCrudController::class, 'editadmin'])->name('editadmin');
            Route::put('/{user}', [AdminCrudController::class, 'update'])->name('update');
            Route::delete('/{user}', [AdminCrudController::class, 'destroy'])->name('destroy');
        });

        Route::prefix('contacts')->name('contacts.')->group(function () {
            Route::get('/', [AdminCrudController::class, 'contactMessages'])->name('index');
            Route::delete('/{contact}', [AdminCrudController::class, 'destroyContact'])->name('destroy');
        });
    });
});
