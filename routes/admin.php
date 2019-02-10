<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::get('/', 'AdminController@home');
Route::get('login', 'AdminController@login')->name('adminLogin');
Route::post('login', 'AdminController@logAdmin')->name('adminLogin');
Route::get('logout', 'AdminController@logout');

Route::resource('category', 'CategoryController');
Route::resource('employee_size', 'EmployeeSizeController');
Route::resource('hospital', 'HospitalController');
Route::resource('employee', 'EmployeeController');

