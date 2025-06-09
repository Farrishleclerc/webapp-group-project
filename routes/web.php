<?php

use Illuminate\Support\Facades\Route;

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/', function () {
    return view('welcome');
});
