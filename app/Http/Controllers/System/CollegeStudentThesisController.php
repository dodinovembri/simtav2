<?php

namespace App\Http\Controllers\System;
// Collage Student = Mahasiswa

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\PersonModel;

class CollegeStudentThesisController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['college_student_thesis'] = PersonModel::where('person_type_code', 4)->get();
		return view('college_student_thesis.index', $data);
	}

	public function create_kkt_file()
	{
		return view('college_student_thesis.kkt_file.create');
	}

	public function store_kkt_file(Request $request)
	{
		// 
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
		$delete = PersonModel::find($id);
		$delete->delete();

		return redirect(url('college_student'))->with('success', "Berhasil menghapus data Mahasiswa!");
	}
}
