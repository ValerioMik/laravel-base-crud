<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home') -> name('home');
Route::get('/fumetti{id}','homeControlle@show') -> name('show');
