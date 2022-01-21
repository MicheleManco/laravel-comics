<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/fumetto', function () {
    return view('fumetto');
})->name('fumetto');
