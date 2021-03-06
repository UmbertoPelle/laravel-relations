<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'EmployeeController@index') -> name('emp-index');
Route::get('/employee/{id}', 'EmployeeController@show') -> name('emp-show');
Route::get('/employee/delete/{id}', 'EmployeeController@destroy') -> name('emp-delete');

Route::get('/employee/update/{id}', 'EmployeeController@edit') -> name('emp-edit');
Route::post('/employee/update/{id}', 'EmployeeController@update') -> name('emp-update');

Route::get('/create/employee', 'EmployeeController@create') -> name('emp-create');
Route::post('/create/employee', 'EmployeeController@store') -> name('emp-store');
