<?php

namespace App\Http\Controllers\System;
// Collage Student = Mahasiswa

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\PersonModel;
use App\Models\StudentThesisModel;
use Illuminate\Support\Facades\DB;

class CollegeStudentThesisController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['college_student_thesis'] = StudentThesisModel::with('person')->get();
		return view('college_student_thesis.index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('college_student.create');
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
		$data['college_student_thesis'] = DB::table('student_thesis')
			->join('person', 'student_thesis.college_student_id', '=', 'person.id')
			->select('student_thesis.*', 'person.nim as nim', 'person.given_name as given_name', 'person.middle_name as middle_name', 'person.surname as surname', 'person.person_type_code as person_type_code')
			->where('student_thesis.id', $id)
			->get();
		$data['college_student_thesis'] = StudentThesisModel::with('person')->get();
		return view('college_student_thesis.show', $data);
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
		$delete = PersonModel::find($id);
		$delete->delete();

		return redirect(url('college_student'))->with('success', "Berhasil menghapus data Mahasiswa!");
	}
}
