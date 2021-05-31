<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'EmployeesController@home')
 ->name('home');
