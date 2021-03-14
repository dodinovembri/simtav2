<?php

namespace App\Http\Controllers\System;
// Field Of Study = Bidang Studi

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\FieldOfStudyModel;
use Ramsey\Uuid\Uuid;

class FieldOfStudyController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['field_of_studies'] = FieldOfStudyModel::all();
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
		$insert                      = new FieldOfStudyModel();
		$insert->id                  = Uuid::uuid4();
		$insert->status              = 1;
		$insert->field_of_study_code = $request->field_of_study_code;
		$insert->field_of_study_name = $request->field_of_study_name;
		$insert->save();

		return redirect(url('field_of_study'))->with('success', "Berhasil menambahkan Bidang Studi!");
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
		$update                      = FieldOfStudyModel::find($id);
		$update->status              = 1;
		$update->field_of_study_code = $request->field_of_study_code;
		$update->field_of_study_name = $request->field_of_study_name;
		$update->update();

		return redirect(url('field_of_study'))->with('success', "Berhasil mengubah Bidang Studi!");
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$delete = FieldOfStudyModel::find($id);
		$delete->delete();

		return redirect(url('field_of_study'))->with('success', "Berhasil menghapus Bidang Studi!");
	}
}
