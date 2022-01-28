<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home') -> name('home');
Route::get('/fumetti{id}','homeController@show') -> name('show');
