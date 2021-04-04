<?php

namespace App\Http\Controllers\System;
// Collage Student Thesis = Skripsi Mahasiswa

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\PersonModel;
use App\Models\StudentThesisModel;
use App\Models\StudentThesisHistoryModel;
use App\Models\PersonAssetModel;
use App\Models\ProposalSeminarRequirementModel;
use App\Models\ComprehensiveRequirementModel;
use App\Models\StudentThesisExaminerModel;
use App\Models\UserModel;
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
		$data['college_student_thesis'] = StudentThesisModel::with('person.year_of_education')->whereIn('thesis_status_code', [1, 11, 14, 16, 22, 25, 27])->where('status', '!=', 0)->get();
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
		$data['college_student_thesis']         = StudentThesisModel::with('person.year_of_education')->where('id', $id)->first();
		$data['user']                           = UserModel::where('person_id', $data['college_student_thesis']->college_student_id)->first();
		$data['college_student_thesis_history'] = StudentThesisHistoryModel::where('history_code', 2)->where('status', 1)->first();
		$data['person_assets']                  = PersonAssetModel::where('person_id', $data['college_student_thesis']->college_student_id)->where('status', 1)->get();
		return view('college_student_thesis.show', $data);
	}

	public function store_kkt_file_rejected(Request $request, $id)
	{		 
		$rejected_reason = $request->rejected_reason;
		$user_id      = Auth::user()->id;
		$student_thesis = StudentThesisModel::find($id);

		$update_to_student_thesis                     = StudentThesisModel::find($id);
		$update_to_student_thesis->thesis_status_code = 2;
		$update_to_student_thesis->is_kkt_file_set    = 0;
		$update_to_student_thesis->update();


		$update_to_person_asset = PersonAssetModel::where('person_id', $student_thesis->college_student_id)->where('status', 1)->get();
		foreach ($update_to_person_asset as $key => $value) {
			$update_to_person_asset = PersonAssetModel::find($value->id);
			$update_to_person_asset->updater_id = $user_id;
			$update_to_person_asset->status = 0;
			$update_to_person_asset->update();
		}
		
		// save to student history
		$student_thesis                                        = StudentThesisModel::find($id);
		$insert_to_student_thesis_history                      = new StudentThesisHistoryModel();
		$insert_to_student_thesis_history->id                  = Uuid::uuid4();
		$insert_to_student_thesis_history->status              = 1;
		$insert_to_student_thesis_history->creator_id          = $user_id;
		$insert_to_student_thesis_history->history_code        = 2;
		$insert_to_student_thesis_history->student_thesis_id  = $student_thesis->id;
		$insert_to_student_thesis_history->college_student_id  = $student_thesis->college_student_id;
		$insert_to_student_thesis_history->total_sks_now       = $student_thesis->total_sks_now;
		$insert_to_student_thesis_history->total_sks_transkrip = $student_thesis->total_sks_transkrip;
		$insert_to_student_thesis_history->description         = $rejected_reason;
		$insert_to_student_thesis_history->save();

		return redirect(url('college_student_thesis'))->with('success', 'Sukses memperbaharui data!');
	}

	public function verified_kkt_file($id)
	{
		$user_id      = Auth::user()->id;
		$find_student_thesis = StudentThesisModel::find($id);
		$find_student_thesis->updater_id = $user_id;
		$find_student_thesis->thesis_status_code = 4;
		$find_student_thesis->update();

		return redirect(url('college_student_thesis'))->with('success', 'Sukses memperbaharui data!');
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

	public function check_seminar_register($id)
	{
		$student_thesis = StudentThesisModel::find($id);		
		$data['college_student'] = PersonModel::where('id', $student_thesis->college_student_id)->first();
		$data['proposal_seminar_requirements'] = ProposalSeminarRequirementModel::where('status', '!=', 0)->get();

		return view('college_student_thesis.proposal_seminar.check_seminar_register', $data);
	}
	
	public function proposal_seminar_requirement_rejected(Request $request, $id)
	{
		// save to student history
		$student_thesis                                        = StudentThesisModel::where('college_student_id', $id)->first();
		$insert_to_student_thesis_history                      = new StudentThesisHistoryModel();
		$insert_to_student_thesis_history->id                  = Uuid::uuid4();
		$insert_to_student_thesis_history->status              = 1;
		$insert_to_student_thesis_history->creator_id          = Auth::user()->id;
		$insert_to_student_thesis_history->history_code        = 12;
		$insert_to_student_thesis_history->student_thesis_id   = $student_thesis->id;
		$insert_to_student_thesis_history->college_student_id  = $student_thesis->college_student_id;
		$insert_to_student_thesis_history->total_sks_now       = $student_thesis->total_sks_now;
		$insert_to_student_thesis_history->total_sks_transkrip = $student_thesis->total_sks_transkrip;
		$insert_to_student_thesis_history->description         = $request->rejected_reason;
		$insert_to_student_thesis_history->save();

		// update student thesis
		$update_to_student_thesis                     = StudentThesisModel::where('college_student_id', $id)->first();
		$update_to_student_thesis->thesis_status_code = 12;		
		$update_to_student_thesis->updater_id = Auth::user()->id;		
		$update_to_student_thesis->update();		

		return redirect(url('college_student_thesis'))->with('success', 'Persyaratan seminar proposal mahasiswa ditolak.');
	}

	public function proposal_seminar_requirement_complete($id)
	{
		$update = StudentThesisModel::where('college_student_id', $id)->where('status', '!=', 0)->first();
		$update->thesis_status_code = 13;
		$update->updater_id = Auth::user()->id;
		$update->update();

		return redirect(url('college_student_thesis'))->with('success', 'Persyaratan seminar proposal mahasiswa sudah diterima');
	}

	public function set_examiner_schedule($id)
	{
		$student_thesis = StudentThesisModel::find($id);		
		$data['college_student'] = PersonModel::where('id', $student_thesis->college_student_id)->first();
		$data['student_thesis_examiners'] = StudentThesisExaminerModel::with('person')->where('college_student_id', $student_thesis->college_student_id)->get();

		return view('college_student_thesis.proposal_seminar.set_examiner_schedule', $data);
	}

	public function store_proposal_seminar_schedule(Request $request, $id)
	{
		// update student thesis set proposal seminar schedule
		$update                            = StudentThesisModel::where('college_student_id', $id)->first();
		$update->thesis_status_code        = 15;
		$update->updater_id                = Auth::user()->id;
		$update->proposal_seminar_schedule = $request->proposal_seminar_schedule;
		$update->update();

		return redirect(url('college_student_thesis'))->with('success', 'Jadwal penguji sudah di atur.');
	}

	public function edit_examiner_status($id)
	{
		$data['college_student'] = StudentThesisModel::with('person')->where('id', $id)->where('status', '!=', 0)->first();
		return view('college_student_thesis.proposal_seminar.edit_examiner_status', $data);
	}

	public function update_examiner_status($id)
	{
		$update = StudentThesisModel::find($id);
		$update->thesis_status_code = 17;
		$update->updater_id = Auth::user()->id;
		$update->update();
		
		return redirect(url('college_student_thesis'))->with('success', 'Berhasil memperbaharui mahasiswa yang sudah seminar proposal.');
	}

	public function check_comprehensive($id)
	{
		$student_thesis = StudentThesisModel::find($id);		
		$data['college_student'] = PersonModel::where('id', $student_thesis->college_student_id)->first();
		$data['comprehensive_requirements'] = ComprehensiveRequirementModel::where('status', '!=', 0)->get();

		return view('college_student_thesis.comprehensive.check_comprehensive', $data);
	}	

	public function comprehensive_requirement_rejected(Request $request, $id)
	{
		// save to student history
		$student_thesis                                        = StudentThesisModel::where('college_student_id', $id)->first();
		$insert_to_student_thesis_history                      = new StudentThesisHistoryModel();
		$insert_to_student_thesis_history->id                  = Uuid::uuid4();
		$insert_to_student_thesis_history->status              = 1;
		$insert_to_student_thesis_history->creator_id          = Auth::user()->id;
		$insert_to_student_thesis_history->history_code        = 23;
		$insert_to_student_thesis_history->student_thesis_id   = $student_thesis->id;
		$insert_to_student_thesis_history->college_student_id  = $student_thesis->college_student_id;
		$insert_to_student_thesis_history->total_sks_now       = $student_thesis->total_sks_now;
		$insert_to_student_thesis_history->total_sks_transkrip = $student_thesis->total_sks_transkrip;
		$insert_to_student_thesis_history->description         = $request->rejected_reason;
		$insert_to_student_thesis_history->save();

		// update student thesis
		$update_to_student_thesis                     = StudentThesisModel::where('college_student_id', $id)->first();
		$update_to_student_thesis->thesis_status_code = 23;
		$update_to_student_thesis->updater_id         = Auth::user()->id;
		$update_to_student_thesis->update();		

		return redirect(url('college_student_thesis'))->with('success', 'Persyaratan kompre mahasiswa ditolak.');
	}	

	public function comprehensive_requirement_complete($id)
	{
		$update = StudentThesisModel::where('college_student_id', $id)->where('status', '!=', 0)->first();
		$update->thesis_status_code = 24;
		$update->updater_id = Auth::user()->id;
		$update->update();

		return redirect(url('college_student_thesis'))->with('success', 'Persyaratan kompre mahasiswa sudah diterima');
	}	

	public function set_examiner_comprehensive_schedule($id)
	{
		$student_thesis = StudentThesisModel::find($id);		
		$data['college_student'] = PersonModel::where('id', $student_thesis->college_student_id)->first();
		$data['student_thesis_examiners'] = StudentThesisExaminerModel::with('person')->where('college_student_id', $student_thesis->college_student_id)->where('examiner_type', 2)->get();

		return view('college_student_thesis.comprehensive.set_examiner_comprehensive_schedule', $data);
	}	

	public function store_comprehensive_schedule(Request $request, $id)
	{
		// update student thesis set comprehensive schedule
		$update                            = StudentThesisModel::where('college_student_id', $id)->first();
		$update->thesis_status_code        = 26;
		$update->updater_id                = Auth::user()->id;
		$update->comprehensive_schedule = $request->comprehensive_schedule;
		$update->update();

		return redirect(url('college_student_thesis'))->with('success', 'Jadwal penguji sudah di atur.');
	}	

	public function edit_comprehensive_status($id)
	{
		$data['college_student'] = StudentThesisModel::with('person')->where('id', $id)->where('status', '!=', 0)->first();
		return view('college_student_thesis.comprehensive.edit_comprehensive_status', $data);
	}

	public function update_comprehensive_status($id)
	{
		$update = StudentThesisModel::find($id);
		$update->thesis_status_code = 28;
		$update->updater_id = Auth::user()->id;
		$update->update();
		
		return redirect(url('college_student_thesis'))->with('success', 'Berhasil memperbaharui mahasiswa yang sudah kompre.');
	}	
}
