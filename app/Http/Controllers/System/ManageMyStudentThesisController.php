<?php namespace App\Http\Controllers\System;
// Collage Student = Mahasiswa

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\PersonAssetModel;
use Illuminate\Http\Request;
use Auth;
use Ramsey\Uuid\Uuid;
use App\Models\StudentThesisModel;
use App\Models\StudentThesisHistoryModel;

class ManageMyStudentThesisController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$lecturer_id = Auth::user()->person_id;
		$data['manage_my_student_thesis'] = StudentThesisModel::with('person')->where('lecturer_id', $lecturer_id)->where('status', '!=', 0)->where('thesis_status_code', 5)->orWhere('thesis_status_code', 8)->get();

		return view('manage_my_student_thesis.index', $data);
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
		$data['student_thesis'] = StudentThesisModel::find($id);
		$person_id = $data['student_thesis']->college_student_id;
		$data['person_assets'] = PersonAssetModel::where('person_id', $person_id)->where('information_type_code', 4)->where('status', '!=', 0)->get();
		$data['extend_proposal_seminar'] = PersonAssetModel::where('person_id', $person_id)->where('information_type_code', 5)->where('status', '!=', 0)->first();

		return view('manage_my_student_thesis.show', $data);
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

	public function agree($id)
	{
		$find_to_update = StudentThesisModel::find($id);
		$find_to_update->updater_id = Auth::user()->id;
		$find_to_update->thesis_status_code = 6;
		$find_to_update->date_agree = date("Y-m-d");
		$find_to_update->update();
		
		return redirect(url('manage_my_student_thesis'))->with('success', 'Topik TA sukses disetujui.');
	}

	public function reject(Request $request, $id)
	{
		// start create object student thesis
		$find_to_update = StudentThesisModel::find($id);

		// update student thesis
		$find_to_update->updater_id = Auth::user()->id;
		$find_to_update->thesis_status_code = 7;
		$find_to_update->update();

		// save to student history
		$insert_to_student_thesis_history                      = new StudentThesisHistoryModel();
		$insert_to_student_thesis_history->id                  = Uuid::uuid4();
		$insert_to_student_thesis_history->status              = 1;
		$insert_to_student_thesis_history->creator_id          = Auth::user()->id;
		$insert_to_student_thesis_history->history_code        = 7;
		$insert_to_student_thesis_history->student_thesis_id   = $find_to_update->id;
		$insert_to_student_thesis_history->college_student_id  = $find_to_update->college_student_id;
		$insert_to_student_thesis_history->total_sks_now       = $find_to_update->total_sks_now;
		$insert_to_student_thesis_history->total_sks_transkrip = $find_to_update->total_sks_transkrip;
		$insert_to_student_thesis_history->description         = $request->rejected_reason;
		$insert_to_student_thesis_history->save();		
		
		return redirect(url('manage_my_student_thesis'))->with('success', 'Topik TA tidak disetujui.');
	}

	public function agree_to_extend_proposal($id)
	{		
		$find_student_thesis_id = StudentThesisModel::where('college_student_id', $id)->where('status', '!=', 0)->first();
		$find_to_update = StudentThesisModel::find($find_student_thesis_id->id);
		$find_to_update->updater_id = Auth::user()->id;
		$find_to_update->thesis_status_code = 9;
		$find_to_update->update();
		
		return redirect(url('manage_my_student_thesis'))->with('success', 'Proposal seminar berhasil di setujui.');
	}

	public function reject_to_extend_proposal(Request $request, $id)
	{
		$find_student_thesis_id = StudentThesisModel::where('college_student_id', $id)->where('status', '!=', 0)->first();
		$find_to_update = StudentThesisModel::find($find_student_thesis_id->id);

		// update student thesis
		$find_to_update->updater_id = Auth::user()->id;
		$find_to_update->thesis_status_code = 10;
		$find_to_update->update();

		// save to student history
		$insert_to_student_thesis_history                      = new StudentThesisHistoryModel();
		$insert_to_student_thesis_history->id                  = Uuid::uuid4();
		$insert_to_student_thesis_history->status              = 1;
		$insert_to_student_thesis_history->creator_id          = Auth::user()->id;
		$insert_to_student_thesis_history->history_code        = 10;
		$insert_to_student_thesis_history->student_thesis_id   = $find_to_update->id;
		$insert_to_student_thesis_history->college_student_id  = $find_to_update->college_student_id;
		$insert_to_student_thesis_history->total_sks_now       = $find_to_update->total_sks_now;
		$insert_to_student_thesis_history->total_sks_transkrip = $find_to_update->total_sks_transkrip;
		$insert_to_student_thesis_history->description         = $request->rejected_reason;
		$insert_to_student_thesis_history->save();		
		
		return redirect(url('manage_my_student_thesis'))->with('success', 'Topik TA tidak disetujui.');
	}
}
