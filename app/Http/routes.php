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

/**
 * Transactions routes
 */
Route::group(['prefix' => 'college_student_thesis'], function()
{
	Route::get('', ['uses' => 'System\CollegeStudentThesisController@index']);
	Route::get('create', ['uses' => 'System\CollegeStudentThesisController@create']);
	Route::get('store', ['uses' => 'System\CollegeStudentThesisController@store']);
	Route::get('show/{id}', ['uses' => 'System\CollegeStudentThesisController@show']);
	Route::get('edit/{id}', ['uses' => 'System\CollegeStudentThesisController@edit']);
	Route::get('update/{id}', ['uses' => 'System\CollegeStudentThesisController@update']);
	Route::get('destroy/{id}', ['uses' => 'System\CollegeStudentThesisController@destroy']);
});

/**
 * Data routes
 */
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
Route::group(['prefix' => 'college_student'], function()
{
	Route::get('', ['uses' => 'System\CollegeStudentController@index']);
	Route::get('create', ['uses' => 'System\CollegeStudentController@create']);
	Route::post('store', ['uses' => 'System\CollegeStudentController@store']);
	Route::get('show/{id}', ['uses' => 'System\CollegeStudentController@show']);
	Route::get('edit/{id}', ['uses' => 'System\CollegeStudentController@edit']);
	Route::post('update/{id}', ['uses' => 'System\CollegeStudentController@update']);
	Route::get('destroy/{id}', ['uses' => 'System\CollegeStudentController@destroy']);
});
Route::group(['prefix' => 'proposal_seminar_requirement'], function()
{
	Route::get('', ['uses' => 'System\ProposalSeminarRequirementController@index']);
	Route::get('create', ['uses' => 'System\ProposalSeminarRequirementController@create']);
	Route::post('store', ['uses' => 'System\ProposalSeminarRequirementController@store']);
	Route::get('show/{id}', ['uses' => 'System\ProposalSeminarRequirementController@show']);
	Route::get('edit/{id}', ['uses' => 'System\ProposalSeminarRequirementController@edit']);
	Route::post('update/{id}', ['uses' => 'System\ProposalSeminarRequirementController@update']);
	Route::get('destroy/{id}', ['uses' => 'System\ProposalSeminarRequirementController@destroy']);
});
Route::group(['prefix' => 'comprehensive_requirement'], function()
{
	Route::get('', ['uses' => 'System\ComprehensiveRequirementController@index']);
	Route::get('create', ['uses' => 'System\ComprehensiveRequirementController@create']);
	Route::post('store', ['uses' => 'System\ComprehensiveRequirementController@store']);
	Route::get('show/{id}', ['uses' => 'System\ComprehensiveRequirementController@show']);
	Route::get('edit/{id}', ['uses' => 'System\ComprehensiveRequirementController@edit']);
	Route::post('update/{id}', ['uses' => 'System\ComprehensiveRequirementController@update']);
	Route::get('destroy/{id}', ['uses' => 'System\ComprehensiveRequirementController@destroy']);
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
Route::group(['prefix' => 'year_of_education'], function()
{
	Route::get('', ['uses' => 'System\YearOfEducationController@index']);
	Route::get('create', ['uses' => 'System\YearOfEducationController@create']);
	Route::post('store', ['uses' => 'System\YearOfEducationController@store']);
	Route::get('show/{id}', ['uses' => 'System\YearOfEducationController@show']);
	Route::get('edit/{id}', ['uses' => 'System\YearOfEducationController@edit']);
	Route::post('update/{id}', ['uses' => 'System\YearOfEducationController@update']);
	Route::get('destroy/{id}', ['uses' => 'System\YearOfEducationController@destroy']);
});
Route::group(['prefix' => 'majors'], function()
{
	Route::get('', ['uses' => 'System\MajorsController@index']);
	Route::get('create', ['uses' => 'System\MajorsController@create']);
	Route::post('store', ['uses' => 'System\MajorsController@store']);
	Route::get('show/{id}', ['uses' => 'System\MajorsController@show']);
	Route::get('edit/{id}', ['uses' => 'System\MajorsController@edit']);
	Route::post('update/{id}', ['uses' => 'System\MajorsController@update']);
	Route::get('destroy/{id}', ['uses' => 'System\MajorsController@destroy']);
});
Route::group(['prefix' => 'thesis_topic'], function()
{
	Route::get('', ['uses' => 'System\ThesisTopicController@index']);
	Route::get('create', ['uses' => 'System\ThesisTopicController@create']);
	Route::post('store', ['uses' => 'System\ThesisTopicController@store']);
	Route::get('show/{id}', ['uses' => 'System\ThesisTopicController@show']);
	Route::get('edit/{id}', ['uses' => 'System\ThesisTopicController@edit']);
	Route::post('update/{id}', ['uses' => 'System\ThesisTopicController@update']);
	Route::get('destroy/{id}', ['uses' => 'System\ThesisTopicController@destroy']);
});