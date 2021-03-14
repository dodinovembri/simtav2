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

Route::get('/', 'Auth\AuthController@getLogin');
Route::get('/home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'user'], function()
{
	Route::get('', ['uses' => 'System\UserController@index']);
	Route::get('create', ['uses' => 'System\UserController@create']);
	Route::get('store', ['uses' => 'System\UserController@store']);
	Route::get('show/{id}', ['uses' => 'System\UserController@show']);
	Route::get('edit/{id}', ['uses' => 'System\UserController@edit']);
	Route::get('update/{id}', ['uses' => 'System\UserController@update']);
	Route::get('destroy/{id}', ['uses' => 'System\UserController@destroy']);
});
Route::group(['prefix' => 'lecturer'], function()
{
	Route::get('', ['uses' => 'System\LecturerController@index']);
	Route::get('create', ['uses' => 'System\LecturerController@create']);
	Route::post('store', ['uses' => 'System\LecturerController@store']);
	Route::get('show/{id}', ['uses' => 'System\LecturerController@show']);
	Route::get('edit/{id}', ['uses' => 'System\LecturerController@edit']);
	Route::post('update/{id}', ['uses' => 'System\LecturerController@update']);
	Route::get('destroy/{id}', ['uses' => 'System\LecturerController@destroy']);
});

/** 
 * 
 * Master Data routes
 * 
*/
Route::group(['prefix' => 'field_of_study'], function()
{
	Route::get('', ['uses' => 'System\FieldOfStudyController@index']);
	Route::get('create', ['uses' => 'System\FieldOfStudyController@create']);
	Route::post('store', ['uses' => 'System\FieldOfStudyController@store']);
	Route::get('show/{id}', ['uses' => 'System\FieldOfStudyController@show']);
	Route::get('edit/{id}', ['uses' => 'System\FieldOfStudyController@edit']);
	Route::post('update/{id}', ['uses' => 'System\FieldOfStudyController@update']);
	Route::get('destroy/{id}', ['uses' => 'System\FieldOfStudyController@destroy']);
});