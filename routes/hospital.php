<?php
Route::get('/download/resume/{cv}','Hospital\HospitalController@download_resume');
Route::get('/download/document/{document}','Hospital\HospitalController@download_document');

Route::get('/home', 'Hospital\HospitalController@index')->name('home');
Route::get('/billing', 'HomeController@billing')->name('billing');
Route::get('/facilities', 'HomeController@facilities')->name('facilities');

Route::get('/job', 'JobController@index')->name('job');
Route::get('/job/{job}/edit', 'JobController@edit')->name('job');
Route::get('/job/{job}/view', 'JobController@view')->name('view');
Route::post('/job/{job}/edit', 'JobController@update')->name('updateJob');
Route::get('/job/{job}/active', 'JobController@active')->name('active');
Route::post('/job/{job}/active', 'JobController@activeJob')->name('activeJob');

Route::get('/apply/accept/{apply}', 'JobController@accept');
Route::get('/apply/decline/{apply}', 'JobController@decline');

Route::get('/message/job/{job}/user/{user}','Hospital\MessageController@createFromJob')->name('message');
Route::post('/message/job/{job}/user/{user}','Hospital\MessageController@saveMessage')->name('message');

Route::get('/post', 'JobController@post')->name('job');
Route::post('/post', 'JobController@save')->name('saveJob');

Route::get('/profile', 'Hospital\ProfileController@profile')->name('profile');
Route::post('/profile', 'Hospital\ProfileController@updateProfile')->name('updateProfile');

Route::get('/settings', 'Hospital\SettingController@settings')->name('settings');
Route::post('/settings', 'Hospital\SettingController@updateSettings')->name('uddateSettings');


