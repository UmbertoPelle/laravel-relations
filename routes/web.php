<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'EmployeeController@index') -> name('emp-index');
Route::get('/employee/{id}', 'EmployeeController@show') -> name('emp-show');
Route::get('/employee/delete/{id}', 'EmployeeController@destroy') -> name('emp-delete');
