<?php

namespace App\Http\Controllers\System;
// Field Of Study = Bidang Studi

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\FieldOfStudyModel;
use Ramsey\Uuid\Uuid;
use Auth;

class FieldOfStudyController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['field_of_studies'] = FieldOfStudyModel::where('status', '!=', 0)->get();
		return view('field_of_study.index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('field_of_study.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$field_of_study_code = $request->field_of_study_code;
		$field_of_study_name = $request->field_of_study_name;
		$creator_id = Auth::user()->id;

		$insert_to_field_of_study = new FieldOfStudyModel();
		$insert_to_field_of_study->id = Uuid::uuid4();
		$insert_to_field_of_study->status = 1;
		$insert_to_field_of_study->creator_id = $creator_id;
		$insert_to_field_of_study->field_of_study_code = $field_of_study_code;
		$insert_to_field_of_study->field_of_study_name = $field_of_study_name;
		$insert_to_field_of_study->save();

		return redirect(url('field_of_study'))->with('success', 'Bidang Studi berhasil ditambahkan!');
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
		$data['field_of_study'] = FieldOfStudyModel::find($id);
		return view('field_of_study.edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$field_of_study_code = $request->field_of_study_code;
		$field_of_study_name = $request->field_of_study_name;
		$updater_id = Auth::user()->id;

		$insert_to_field_of_study = FieldOfStudyModel::find($id);
		$insert_to_field_of_study->updater_id = $updater_id;
		$insert_to_field_of_study->field_of_study_code = $field_of_study_code;
		$insert_to_field_of_study->field_of_study_name = $field_of_study_name;
		$insert_to_field_of_study->update();

		return redirect(url('field_of_study'))->with('success', 'Bidang Studi berhasil diubah!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$find_to_delete = FieldOfStudyModel::find($id);
		$find_to_delete->status = 0;
		$find_to_delete->update();

		return redirect(url('field_of_study'))->with('success', "Berhasil menghapus Bidang Studi!");
	}
}
