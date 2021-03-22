<?php

namespace App\Http\Controllers\System;
// Collage Student = Mahasiswa

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\PersonModel;
use App\Models\StudentThesisModel;
use App\Models\StudentThesisHistoryModel;
use App\Models\PersonAssetModel;
use Ramsey\Uuid\Uuid;
use Auth;

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
		$data['college_student_thesis'] = StudentThesisModel::with('person')->where('id', $id)->first();
		$data['person_assets'] = PersonAssetModel::where('person_id', $data['college_student_thesis']->college_student_id)->get();
		return view('college_student_thesis.show', $data);
	}

	public function store_kkt_file_rejected(Request $request, $id)
	{		 
		$rejected_reason = $request->rejected_reason;
		$creator_id      = Auth::user()->id;

		$update_to_student_thesis                     = StudentThesisModel::find($id);
		$update_to_student_thesis->thesis_status_code = 2;
		$update_to_student_thesis->is_kkt_file_set    = 0;
		$update_to_student_thesis->update();

		$student_thesis                                        = StudentThesisModel::find($id);
		$insert_to_student_thesis_history                      = new StudentThesisHistoryModel();
		$insert_to_student_thesis_history->id                  = Uuid::uuid4();
		$insert_to_student_thesis_history->status              = 1;
		$insert_to_student_thesis_history->creator_id          = $creator_id;
		$insert_to_student_thesis_history->history_code        = 2;
		$insert_to_student_thesis_history->college_student_id  = $student_thesis->college_student_id;
		$insert_to_student_thesis_history->total_sks_now       = $student_thesis->total_sks_now;
		$insert_to_student_thesis_history->total_sks_transkrip = $student_thesis->total_sks_transkrip;
		$insert_to_student_thesis_history->description         = $rejected_reason;
		$insert_to_student_thesis_history->save();

		return redirect(url('college_student_thesis/show', $id))->with('success', 'Sukses memperbaharui data!');
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
