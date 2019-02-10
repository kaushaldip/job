<?php
Route::get('/home', 'Employee\EmployeeController@index')->name('home');

Route::get('/applied', 'JobController@applied')->name('applied');
Route::get('/past', 'JobController@past')->name('past');
Route::get('/profile', 'Employee\ProfileController@profile')->name('profile');
Route::post('/profile', 'Employee\ProfileController@updateProfile')->name('profile');
Route::get('/settings', 'Employee\SettingController@settings')->name('settings');
Route::post('/settings', 'Employee\SettingController@updateSettings')->name('settings');

Route::get('/resume', 'Employee\CVController@index')->name('cv');
Route::get('/resume/delete/{cv}', 'Employee\CVController@delete')->name('cv');
Route::get('/resume/view/{cv}', 'Employee\CVController@view')->name('cv');
Route::post('/resume', 'Employee\CVController@upload')->name('cv');

Route::get('/document', 'Employee\DocumentController@index')->name('document');
Route::get('/document/delete/{document}', 'Employee\DocumentController@delete')->name('document');
Route::post('/document', 'Employee\DocumentController@upload')->name('document');

Route::get('/message','Employee\MessageController@index')->name('message');
Route::get('/message/job/{job}/user/{user}','Employee\MessageController@createFromJob')->name('message');
Route::post('/message/job/{job}/user/{user}','Employee\MessageController@saveMessage')->name('message');