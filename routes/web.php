<?php

use Illuminate\Support\Facades\Route;

Route::get('/mainpage', function () {
    return view('mainpage');
});

Route::get('/', function () {
    return view('welcome');
});
