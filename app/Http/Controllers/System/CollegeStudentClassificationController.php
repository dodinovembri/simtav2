<?php

namespace App\Http\Controllers\System;
// Collage Student Classification = Pengelompokan Mahasiswa

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Auth;
use App\Models\PersonModel;
use App\Models\MajorsModel;
use App\Models\StudentThesisModel;
use App\Models\YearOfEducationModel;

class CollegeStudentClassificationController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id = null)
	{
		$data['majors'] = MajorsModel::where('status', '!=', 0)->get();
		$data['year_of_educations'] = YearOfEducationModel::where('status', '!=', 0)->get();

		if (isset($id)) {
			$data['id'] = $id;
			$data['college_student_classification'] = StudentThesisModel::with('person')->where('thesis_status_code', $id)->where('status', '!=', 0)->get();
		}else{
			$data['college_student_classification'] = StudentThesisModel::with('person')->where('status', '!=', 0)->get();
		}

		return view('college_student_classification.index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// 
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		// 
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// 
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// 
	}
}
