<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home')->name('home');

Route::get('/fumetto' , 'HomeController@fumetto')->name('fumetto');
