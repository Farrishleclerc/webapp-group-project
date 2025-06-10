<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\AdminCrudController;

Route::get('/', function () {
    return view('mainpage');
})->name('home');

// User auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');
// Admin auth
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::prefix('users')->name('users.')->group(function () {
            Route::get('/', [AdminCrudController::class, 'index'])->name('index');
            Route::get('/create', [AdminCrudController::class, 'create'])->name('create');
            Route::post('/', [AdminCrudController::class, 'store'])->name('store');
            Route::get('/{user}/edit', [AdminCrudController::class, 'edit'])->name('edit');
            Route::put('/{user}', [AdminCrudController::class, 'update'])->name('update');
            Route::delete('/{user}', [AdminCrudController::class, 'destroy'])->name('destroy');
        });
    });
});
