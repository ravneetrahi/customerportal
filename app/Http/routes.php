<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@login');

Route::post('auth/customRegister', 'Auth\AuthController@customRegister');

//Route::post('auth/login', 'SuiteCrmAuth@Auth');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('suitecrm/connect', 'SuiteCrmAuth@Auth');
Route::get('suitecrm/test', 'SuiteCrmAuth@Test');

Route::resource('announcements' , 'AnnouncementsController');

Route::get('admin', 'AdminController@index');
Route::resource('admin/announcements' , 'AnnouncementsController');
Route::post('admin/announcements/create' , 'AnnouncementsController@store');


Route::get('admin/connector', 'AdminController@connector');
Route::post('admin/connector', 'AdminController@store_connector');
Route::get('admin/mail', 'AdminController@mail');

Route::get('admin/settings', 'AdminController@settings');

Route::get('admin/users', 'UserController@index');
Route::get('admin/users/create', 'UserController@create');
Route::post('admin/users/create', 'UserController@store');

Route::get('admin/users/edit/{id}', 'UserController@edit');
Route::get('admin/users/remove/{id}', 'UserController@destroy');
Route::patch('admin/users/updateUser/{id}', 'UserController@updateUser');

Route::get('cases/{page?}', 'CasesController@index')->where('page', '[0-9]+');
Route::get('cases/create', 'CasesController@create');
Route::get('cases/read', 'CasesController@read');
Route::get('cases/{id}', 'CasesController@getCase');
Route::get('cases/downloadFile/{notes_id}', 'CasesController@downloadFile');

Route::post('cases/saveCase', 'CasesController@saveCase');
Route::post('cases/store', 'CasesController@store');

Route::get('notes/add/{id}', 'NotesController@add');
Route::post('notes/saveNotes', 'NotesController@saveNotes');

Route::get('meetings', 'MeetingsController@index');
Route::get('meetings/create', 'MeetingsController@create');
Route::post('meetings/create', 'MeetingsController@store');
Route::get('meetings/read', 'MeetingsController@show');

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('profile', 'UserController@profile');
Route::patch('profile', 'UserController@updateUser');

Route::get('profile/chpass', 'UserController@profile_chpass');
Route::patch('profile/chpass', 'UserController@update_chpass');

Route::get('quotes', 'QuotesController@index');
