<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// Dashboard routes
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

