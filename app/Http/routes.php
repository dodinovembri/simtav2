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
 * For Administrator
 * Data routes
 */
Route::group(['prefix' => 'user'], function()
{
	Route::get('', ['uses' => 'System\UserController@index']);
	Route::get('create', ['uses' => 'System\UserController@create']);
	Route::post('store', ['uses' => 'System\UserController@store']);
	Route::get('show/{id}', ['uses' => 'System\UserController@show']);
	Route::get('edit/{id}', ['uses' => 'System\UserController@edit']);
	Route::post('update/{id}', ['uses' => 'System\UserController@update']);
	Route::get('destroy/{id}', ['uses' => 'System\UserController@destroy']);
});
Route::group(['prefix' => 'lecturer'], function()
{
	Route::get('', ['uses' => 'System\LecturerController@index'])->middleware('auth');;
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


	Route::post('download_template', ['uses' => 'System\CollegeStudentController@download_template']);	
	Route::post('store_college_student', ['uses' => 'System\CollegeStudentController@store_college_student']);	
});
Route::group(['prefix' => 'college_student_thesis'], function()
{
	Route::get('', ['uses' => 'System\CollegeStudentThesisController@index']);
	Route::get('create', ['uses' => 'System\CollegeStudentThesisController@create']);
	Route::post('store', ['uses' => 'System\CollegeStudentThesisController@store']);
	Route::get('show/{id}', ['uses' => 'System\CollegeStudentThesisController@show']);
	Route::get('edit/{id}', ['uses' => 'System\CollegeStudentThesisController@edit']);
	Route::post('update/{id}', ['uses' => 'System\CollegeStudentThesisController@update']);
	Route::get('destroy/{id}', ['uses' => 'System\CollegeStudentThesisController@destroy']);

	Route::post('store_kkt_file_rejected/{id}', ['uses' => 'System\CollegeStudentThesisController@store_kkt_file_rejected']);
	Route::get('verified_kkt_file/{id}', ['uses' => 'System\CollegeStudentThesisController@verified_kkt_file']);

	Route::get('check_seminar_register/{id}', ['uses' => 'System\CollegeStudentThesisController@check_seminar_register']);
	Route::get('proposal_seminar_requirement_complete/{id}', ['uses' => 'System\CollegeStudentThesisController@proposal_seminar_requirement_complete']);
	Route::post('proposal_seminar_requirement_rejected/{id}', ['uses' => 'System\CollegeStudentThesisController@proposal_seminar_requirement_rejected']);
	Route::get('set_examiner_schedule/{id}', ['uses' => 'System\CollegeStudentThesisController@set_examiner_schedule']);
	Route::post('store_proposal_seminar_schedule/{id}', ['uses' => 'System\CollegeStudentThesisController@store_proposal_seminar_schedule']);
	Route::get('edit_examiner_status/{id}', ['uses' => 'System\CollegeStudentThesisController@edit_examiner_status']);
	Route::get('update_examiner_status/{id}', ['uses' => 'System\CollegeStudentThesisController@update_examiner_status']);
	Route::get('check_comprehensive/{id}', ['uses' => 'System\CollegeStudentThesisController@check_comprehensive']);
	Route::post('comprehensive_requirement_rejected/{id}', ['uses' => 'System\CollegeStudentThesisController@comprehensive_requirement_rejected']);
	Route::get('comprehensive_requirement_complete/{id}', ['uses' => 'System\CollegeStudentThesisController@comprehensive_requirement_complete']);
	Route::get('set_examiner_comprehensive_schedule/{id}', ['uses' => 'System\CollegeStudentThesisController@set_examiner_comprehensive_schedule']);
	Route::post('store_comprehensive_schedule/{id}', ['uses' => 'System\CollegeStudentThesisController@store_comprehensive_schedule']);
	Route::get('edit_comprehensive_status/{id}', ['uses' => 'System\CollegeStudentThesisController@edit_comprehensive_status']);
	Route::get('update_comprehensive_status/{id}', ['uses' => 'System\CollegeStudentThesisController@update_comprehensive_status']);	
});
Route::group(['prefix' => 'college_student_classification'], function()
{
	Route::get('', ['uses' => 'System\CollegeStudentClassificationController@index']);
	Route::get('/{id}', ['uses' => 'System\CollegeStudentClassificationController@index']);
	Route::get('create', ['uses' => 'System\CollegeStudentClassificationController@create']);
	Route::post('store', ['uses' => 'System\CollegeStudentClassificationController@store']);
	Route::get('show/{id}', ['uses' => 'System\CollegeStudentClassificationController@show']);
	Route::get('edit/{id}', ['uses' => 'System\CollegeStudentClassificationController@edit']);
	Route::post('update/{id}', ['uses' => 'System\CollegeStudentClassificationController@update']);
	Route::get('destroy/{id}', ['uses' => 'System\CollegeStudentClassificationController@destroy']);
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
 * For Manager
 * Transaction routes
 */
Route::group(['prefix' => 'manage_student_thesis'], function()
{
	Route::get('', ['uses' => 'System\ManageStudentThesisController@index']);
	Route::get('create', ['uses' => 'System\ManageStudentThesisController@create']);
	Route::post('store', ['uses' => 'System\ManageStudentThesisController@store']);
	Route::get('show/{id}', ['uses' => 'System\ManageStudentThesisController@show']);
	Route::get('edit/{id}', ['uses' => 'System\ManageStudentThesisController@edit']);
	Route::post('update/{id}', ['uses' => 'System\ManageStudentThesisController@update']);
	Route::get('destroy/{id}', ['uses' => 'System\ManageStudentThesisController@destroy']);

	Route::get('create_examiner/{id}', ['uses' => 'System\ManageStudentThesisController@create_examiner']);
	Route::post('store_examiner/{id}', ['uses' => 'System\ManageStudentThesisController@store_examiner']);
	Route::get('proposal_confirm_status/{id}', ['uses' => 'System\ManageStudentThesisController@proposal_confirm_status']);
	Route::get('edit_proposal_examiner/{id}', ['uses' => 'System\ManageStudentThesisController@edit_proposal_examiner']);
	Route::post('store_change_proposal_examiner/{id}', ['uses' => 'System\ManageStudentThesisController@store_change_proposal_examiner']);
	Route::get('create_examiner_for_comprehensive/{id}', ['uses' => 'System\ManageStudentThesisController@create_examiner_for_comprehensive']);
	Route::get('store_examiner_comprehensive/{id}', ['uses' => 'System\ManageStudentThesisController@store_examiner_comprehensive']);
	Route::post('store_new_examiner_comprehensive/{id}', ['uses' => 'System\ManageStudentThesisController@store_new_examiner_comprehensive']);
	Route::get('comprehensive_confirm_status/{id}', ['uses' => 'System\ManageStudentThesisController@comprehensive_confirm_status']);
	Route::get('edit_comprehensive_examiner/{id}', ['uses' => 'System\ManageStudentThesisController@edit_comprehensive_examiner']);
	Route::post('store_change_comprehensive_examiner/{id}', ['uses' => 'System\ManageStudentThesisController@store_change_comprehensive_examiner']);

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

/**
 * For Lecturer
 * Transactions routes
 */
Route::group(['prefix' => 'manage_my_student_thesis'], function()
{
	Route::get('', ['uses' => 'System\ManageMyStudentThesisController@index']);
	Route::get('create', ['uses' => 'System\ManageMyStudentThesisController@create']);
	Route::post('store', ['uses' => 'System\ManageMyStudentThesisController@store']);
	Route::get('show/{id}', ['uses' => 'System\ManageMyStudentThesisController@show']);
	Route::get('edit/{id}', ['uses' => 'System\ManageMyStudentThesisController@edit']);
	Route::post('update/{id}', ['uses' => 'System\ManageMyStudentThesisController@update']);
	Route::get('destroy/{id}', ['uses' => 'System\ManageMyStudentThesisController@destroy']);

	Route::get('agree/{id}', ['uses' => 'System\ManageMyStudentThesisController@agree']);	
	Route::post('reject/{id}', ['uses' => 'System\ManageMyStudentThesisController@reject']);
	Route::get('agree_to_extend_proposal/{id}', ['uses' => 'System\ManageMyStudentThesisController@agree_to_extend_proposal']);	
	Route::post('reject_to_extend_proposal/{id}', ['uses' => 'System\ManageMyStudentThesisController@reject_to_extend_proposal']);
	Route::get('proposal_seminar_confirm/{id}', ['uses' => 'System\ManageMyStudentThesisController@proposal_seminar_confirm']);	
	Route::get('proposal_seminar_confirm_agree/{id}', ['uses' => 'System\ManageMyStudentThesisController@proposal_seminar_confirm_agree']);	
	Route::post('proposal_seminar_confirm_reject/{id}', ['uses' => 'System\ManageMyStudentThesisController@proposal_seminar_confirm_reject']);	
	Route::get('comprehensive_confirm/{id}', ['uses' => 'System\ManageMyStudentThesisController@comprehensive_confirm']);	
	Route::get('comprehensive_confirm_agree/{id}', ['uses' => 'System\ManageMyStudentThesisController@comprehensive_confirm_agree']);	
	Route::post('comprehensive_confirm_reject/{id}', ['uses' => 'System\ManageMyStudentThesisController@comprehensive_confirm_reject']);		
});

/**
 * For College Student
 * Transactions routes
 */
Route::group(['prefix' => 'my_thesis'], function()
{
	Route::get('', ['uses' => 'System\MyThesisController@index']);
	Route::get('create', ['uses' => 'System\MyThesisController@create']);
	Route::get('store', ['uses' => 'System\MyThesisController@store']);
	Route::get('show/{id}', ['uses' => 'System\MyThesisController@show']);
	Route::get('edit/{id}', ['uses' => 'System\MyThesisController@edit']);
	Route::get('update/{id}', ['uses' => 'System\MyThesisController@update']);
	Route::get('destroy/{id}', ['uses' => 'System\MyThesisController@destroy']);

	// krs, kp dan transkrip nilai (kkt) file routes
	Route::get('create_kkt_file', ['uses' => 'System\MyThesisController@create_kkt_file']);
	Route::post('store_kkt_file', ['uses' => 'System\MyThesisController@store_kkt_file']);
	Route::get('create_thesis_topic', ['uses' => 'System\MyThesisController@create_thesis_topic']);
	Route::post('store_thesis_topic', ['uses' => 'System\MyThesisController@store_thesis_topic']);
	Route::get('create_extension_proposal_seminar', ['uses' => 'System\MyThesisController@create_extension_proposal_seminar']);
	Route::post('store_extension_proposal_seminar', ['uses' => 'System\MyThesisController@store_extension_proposal_seminar']);
	Route::get('register_proposal_seminar', ['uses' => 'System\MyThesisController@register_proposal_seminar']);
	Route::get('create_proposal_seminar_certificate', ['uses' => 'System\MyThesisController@create_proposal_seminar_certificate']);
	Route::post('store_proposal_seminar_certificate', ['uses' => 'System\MyThesisController@store_proposal_seminar_certificate']);
	Route::get('register_comprehensive', ['uses' => 'System\MyThesisController@register_comprehensive']);
	Route::get('create_comprehensive_certificate', ['uses' => 'System\MyThesisController@create_comprehensive_certificate']);
	Route::post('store_comprehensive_certificate', ['uses' => 'System\MyThesisController@store_comprehensive_certificate']);
});

/**
 * All
 */
Route::group(['prefix' => 'profile'], function()
{
	Route::get('', ['uses' => 'System\ProfileController@index']);
	Route::get('create', ['uses' => 'System\ProfileController@create']);
	Route::post('store', ['uses' => 'System\ProfileController@store']);
	Route::get('show/{id}', ['uses' => 'System\ProfileController@show']);
	Route::get('edit_password/{id}', ['uses' => 'System\ProfileController@edit_password']);
	Route::post('update/{id}', ['uses' => 'System\ProfileController@update']);
	Route::post('update_password/{id}', ['uses' => 'System\ProfileController@update_password']);
	Route::get('destroy/{id}', ['uses' => 'System\ProfileController@destroy']);
});