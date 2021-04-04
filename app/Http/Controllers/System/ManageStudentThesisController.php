<?php

namespace App\Http\Controllers\System;
// Collage Student = Mahasiswa

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Auth;
use App\Models\StudentThesisModel;
use App\Models\PersonModel;
use App\Models\StudentThesisExaminerModel;
use App\Models\StudentThesisSupervisorModel;


class ManageStudentThesisController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['manage_student_thesis'] = StudentThesisModel::with('person')->where('status', '!=', 0)->whereIn('thesis_status_code', [13, 15, 24, 26])->get();
		return view('manage_student_thesis.index', $data);
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

	public function create_examiner($id)
	{
		$data['college_student_id'] = $id;
		$lecturer_arr = [];
		$supervisor = StudentThesisSupervisorModel::where('college_student_id', $id)->get();
		foreach ($supervisor as $key => $value) {
			array_push($lecturer_arr, $value->lecturer_id);
		}
		$data['examiners'] = PersonModel::where('status', '!=', 0)->where('person_type_code', 3)->whereNotIn('id', $lecturer_arr)->get();

		return view('manage_student_thesis.examiner.create_examiner', $data);
	}

	public function store_examiner(Request $request, $id)
	{
		$examiner = $request->examiner;
		$check = StudentThesisExaminerModel::where('college_student_id', $id)->first();
		$supervisor = StudentThesisSupervisorModel::where('college_student_id', $id)->get();

		if (!isset($check)) {
			// save examiner lead to student thesis examiner
			$insert_lead                     = new StudentThesisExaminerModel();
			$insert_lead->id                 = Uuid::uuid4();
			$insert_lead->status             = 1;
			$insert_lead->creator_id         = Auth::user()->id;
			$insert_lead->college_student_id = $id;
			$insert_lead->lecturer_id        = $request->examiner_lead;
			$insert_lead->lecturer_type      = 1;
			$insert_lead->examiner_type      = 1;
			$insert_lead->save();

			// save supervisor to examiner too
			foreach ($supervisor as $key => $value) {
				$insert_supervisor                     = new StudentThesisExaminerModel();
				$insert_supervisor->id                 = Uuid::uuid4();
				$insert_supervisor->status             = 1;
				$insert_supervisor->creator_id         = Auth::user()->id;
				$insert_supervisor->college_student_id = $id;
				$insert_supervisor->lecturer_id        = $value->lecturer_id;
				$insert_supervisor->lecturer_type      = 3;
				$insert_supervisor->examiner_type      = 1;
				$insert_supervisor->save();
			}

			// save examiner to student thesis examiner
			foreach ($examiner as $key => $value) {
				$insert_examiner                     = new StudentThesisExaminerModel();
				$insert_examiner->id                 = Uuid::uuid4();
				$insert_examiner->status             = 1;
				$insert_examiner->creator_id         = Auth::user()->id;
				$insert_examiner->college_student_id = $id;
				$insert_examiner->lecturer_id        = $value;
				$insert_examiner->lecturer_type      = 2;
				$insert_examiner->examiner_type      = 1;
				$insert_examiner->save();
			}
		} else {
			$destroy = StudentThesisExaminerModel::where('college_student_id', $id)->get();
			foreach ($destroy as $key => $value) {
				$value->delete();
			}

			// save examiner lead to student thesis examiner
			$insert_lead                     = new StudentThesisExaminerModel();
			$insert_lead->id                 = Uuid::uuid4();
			$insert_lead->status             = 1;
			$insert_lead->creator_id         = Auth::user()->id;
			$insert_lead->college_student_id = $id;
			$insert_lead->lecturer_id        = $request->examiner_lead;
			$insert_lead->lecturer_type      = 1;
			$insert_lead->examiner_type      = 1;
			$insert_lead->save();

			// save supervisor to examiner too
			foreach ($supervisor as $key => $value) {
				$insert_supervisor                     = new StudentThesisExaminerModel();
				$insert_supervisor->id                 = Uuid::uuid4();
				$insert_supervisor->status             = 1;
				$insert_supervisor->creator_id         = Auth::user()->id;
				$insert_supervisor->college_student_id = $id;
				$insert_supervisor->lecturer_id        = $value->lecturer_id;
				$insert_supervisor->lecturer_type      = 3;
				$insert_supervisor->examiner_type      = 1;
				$insert_supervisor->save();
			}			

			// save examiner to student thesis examiner
			foreach ($examiner as $key => $value) {
				$insert_examiner                     = new StudentThesisExaminerModel();
				$insert_examiner->id                 = Uuid::uuid4();
				$insert_examiner->status             = 1;
				$insert_examiner->creator_id         = Auth::user()->id;
				$insert_examiner->college_student_id = $id;
				$insert_examiner->lecturer_id        = $value;
				$insert_examiner->lecturer_type      = 2;
				$insert_examiner->examiner_type      = 1;
				$insert_examiner->save();
			}
		}

		// update student thesis
		$update = StudentThesisModel::where('college_student_id', $id)->first();
		$update->thesis_status_code = 14;
		$update->updater_id = Auth::user()->id;
		$update->update();

		return redirect(url('manage_student_thesis'))->with('success', 'Dosen penguji sudah diatur');
	}

	public function proposal_confirm_status($id)
	{
		$data['college_student'] = PersonModel::find($id);
		$data['student_thesis_examiners'] = StudentThesisExaminerModel::with('person')->where('college_student_id', $id)->where('status', '!=', 0)->get();

		return view('manage_student_thesis.examiner.proposal_confirm_status', $data);
	}

	public function edit_proposal_examiner($id)
	{
		$lecturer_arr = [];
		$data['student_thesis_examiner_id'] =  $id;

		$lecturer = StudentThesisExaminerModel::find($id);
		$lecturers = StudentThesisExaminerModel::where('college_student_id', $lecturer->college_student_id)->get();
		foreach ($lecturers as $key => $value) {
			array_push($lecturer_arr, $value->lecturer_id);
		}
		$student_thesis_supervisor = StudentThesisSupervisorModel::where('college_student_id', $lecturer->college_student_id)->first();
		array_push($lecturer_arr, $student_thesis_supervisor->lecturer_id);
		$data['examiners'] = PersonModel::where('status', '!=', 0)->where('person_type_code', 3)->whereNotIn('id', $lecturer_arr)->get();

		return view('manage_student_thesis.examiner.change_proposal_examiner', $data);
	}

	public function store_change_proposal_examiner(Request $request, $id)
	{	
		// update student thesis examiner
		$update             = StudentThesisExaminerModel::find($id);
		$update->status     = 0;
		$update->updater_id = Auth::user()->id;
		$update->update();

		$find                       = StudentThesisExaminerModel::find($id);
		$insert                     = new StudentThesisExaminerModel();
		$insert->id                 = Uuid::uuid4();
		$insert->status             = 1;
		$insert->creator_id         = Auth::user()->id;
		$insert->college_student_id = $find->college_student_id;
		$insert->lecturer_id        = $request->examiner;
		$insert->lecturer_type      = $find->lecturer_type;
		$insert->examiner_type      = $find->examiner_type;
		$insert->is_both            = $find->is_both;
		$insert->save();

		return redirect(url('manage_student_thesis/proposal_confirm_status', $find->college_student_id))->with('success', 'Penguji seminar proposal sudah diganti');
	}

	public function create_examiner_for_comprehensive($id)
	{
		$data['college_student_id'] = $id;
		$lecturer_arr = [];
		$supervisor = StudentThesisSupervisorModel::where('college_student_id', $id)->get();
		foreach ($supervisor as $key => $value) {
			array_push($lecturer_arr, $value->lecturer_id);
		}
		$data['examiners'] = PersonModel::where('status', '!=', 0)->where('person_type_code', 3)->whereNotIn('id', $lecturer_arr)->get();
		$data['student_thesis_examiners'] = StudentThesisExaminerModel::where('status', '!=', 0)->where('college_student_id', $id)->get();

		return view('manage_student_thesis.examiner.create_examiner_for_comprehensive', $data);
	}

	public function store_examiner_comprehensive($id)
	{
		$examiners = StudentThesisExaminerModel::where('status', '!=', 0)->where('college_student_id', $id)->where('examiner_type', 1)->get();

		foreach ($examiners as $key => $value) {
			$insert_examiner                     = new StudentThesisExaminerModel();
			$insert_examiner->id                 = Uuid::uuid4();
			$insert_examiner->status             = 1;
			$insert_examiner->creator_id         = Auth::user()->id;
			$insert_examiner->college_student_id = $id;
			$insert_examiner->lecturer_id        = $value->lecturer_id;
			$insert_examiner->lecturer_type      = $value->lecturer_type;
			$insert_examiner->examiner_type      = 2;
			$insert_examiner->save();
		}

		// update student thesis
		$update = StudentThesisModel::where('status', '!=', 0)->where('college_student_id', $id)->first();
		$update->thesis_status_code = 25;
		$update->updater_id = Auth::user()->id;
		$update->update();

		return redirect(url('manage_student_thesis'))->with('success', 'Dosen penguji kompre sudah diatur');
	}

	public function store_new_examiner_comprehensive(Request $request, $id)
	{
		$examiner = $request->examiner;
		$check = StudentThesisExaminerModel::where('college_student_id', $id)->where('examiner_type', 2)->first();
		$supervisor = StudentThesisSupervisorModel::where('college_student_id', $id)->get();

		if (!isset($check)) {
			// save examiner lead to student thesis examiner
			$insert_lead                     = new StudentThesisExaminerModel();
			$insert_lead->id                 = Uuid::uuid4();
			$insert_lead->status             = 1;
			$insert_lead->creator_id         = Auth::user()->id;
			$insert_lead->college_student_id = $id;
			$insert_lead->lecturer_id        = $request->examiner_lead;
			$insert_lead->lecturer_type      = 1;
			$insert_lead->examiner_type      = 2;
			$insert_lead->save();

			// save supervisor to examiner too
			foreach ($supervisor as $key => $value) {
				$insert_supervisor                     = new StudentThesisExaminerModel();
				$insert_supervisor->id                 = Uuid::uuid4();
				$insert_supervisor->status             = 1;
				$insert_supervisor->creator_id         = Auth::user()->id;
				$insert_supervisor->college_student_id = $id;
				$insert_supervisor->lecturer_id        = $value->lecturer_id;
				$insert_supervisor->lecturer_type      = 3;
				$insert_supervisor->examiner_type      = 2;
				$insert_supervisor->save();
			}

			// save examiner to student thesis examiner
			foreach ($examiner as $key => $value) {
				$insert_examiner                     = new StudentThesisExaminerModel();
				$insert_examiner->id                 = Uuid::uuid4();
				$insert_examiner->status             = 1;
				$insert_examiner->creator_id         = Auth::user()->id;
				$insert_examiner->college_student_id = $id;
				$insert_examiner->lecturer_id        = $value;
				$insert_examiner->lecturer_type      = 2;
				$insert_examiner->examiner_type      = 2;
				$insert_examiner->save();
			}
		} else {
			$destroy = StudentThesisExaminerModel::where('college_student_id', $id)->where('examiner_type', 2)->get();
			foreach ($destroy as $key => $value) {
				$value->delete();
			}

			// save examiner lead to student thesis examiner
			$insert_lead                     = new StudentThesisExaminerModel();
			$insert_lead->id                 = Uuid::uuid4();
			$insert_lead->status             = 1;
			$insert_lead->creator_id         = Auth::user()->id;
			$insert_lead->college_student_id = $id;
			$insert_lead->lecturer_id        = $request->examiner_lead;
			$insert_lead->lecturer_type      = 1;
			$insert_lead->examiner_type      = 2;
			$insert_lead->save();

			// save supervisor to examiner too
			foreach ($supervisor as $key => $value) {
				$insert_supervisor                     = new StudentThesisExaminerModel();
				$insert_supervisor->id                 = Uuid::uuid4();
				$insert_supervisor->status             = 1;
				$insert_supervisor->creator_id         = Auth::user()->id;
				$insert_supervisor->college_student_id = $id;
				$insert_supervisor->lecturer_id        = $value->lecturer_id;
				$insert_supervisor->lecturer_type      = 3;
				$insert_supervisor->examiner_type      = 2;
				$insert_supervisor->save();
			}			

			// save examiner to student thesis examiner
			foreach ($examiner as $key => $value) {
				$insert_examiner                     = new StudentThesisExaminerModel();
				$insert_examiner->id                 = Uuid::uuid4();
				$insert_examiner->status             = 1;
				$insert_examiner->creator_id         = Auth::user()->id;
				$insert_examiner->college_student_id = $id;
				$insert_examiner->lecturer_id        = $value;
				$insert_examiner->lecturer_type      = 2;
				$insert_examiner->examiner_type      = 2;
				$insert_examiner->save();
			}
		}

		// update student thesis
		$update = StudentThesisModel::where('college_student_id', $id)->first();
		$update->thesis_status_code = 25;
		$update->updater_id = Auth::user()->id;
		$update->update();

		return redirect(url('manage_student_thesis'))->with('success', 'Dosen penguji sudah diatur');
	}

	public function comprehensive_confirm_status($id)
	{
		$data['college_student'] = PersonModel::find($id);
		$data['student_thesis_examiners'] = StudentThesisExaminerModel::with('person')->where('college_student_id', $id)->where('status', '!=', 0)->where('examiner_type', 2)->get();

		return view('manage_student_thesis.examiner.comprehensive_confirm_status', $data);
	}	

	public function edit_comprehensive_examiner($id)
	{
		$lecturer_arr = [];
		$data['student_thesis_examiner_id'] =  $id;

		$lecturer = StudentThesisExaminerModel::find($id);
		$lecturers = StudentThesisExaminerModel::where('status', '!=', 0)->where('college_student_id', $lecturer->college_student_id)->where('examiner_type', 2)->get();
		foreach ($lecturers as $key => $value) {
			array_push($lecturer_arr, $value->lecturer_id);
		}
		$student_thesis_supervisor = StudentThesisSupervisorModel::where('status', '!=', 0)->where('college_student_id', $lecturer->college_student_id)->first();
		array_push($lecturer_arr, $student_thesis_supervisor->lecturer_id);
		$data['examiners'] = PersonModel::where('status', '!=', 0)->where('person_type_code', 3)->whereNotIn('id', $lecturer_arr)->get();

		return view('manage_student_thesis.examiner.change_comprehensive_examiner', $data);
	}	

	public function store_change_comprehensive_examiner(Request $request, $id)
	{	
		// update student thesis examiner
		$update             = StudentThesisExaminerModel::find($id);
		$update->status     = 0;
		$update->updater_id = Auth::user()->id;
		$update->update();

		$find                       = StudentThesisExaminerModel::find($id);
		$insert                     = new StudentThesisExaminerModel();
		$insert->id                 = Uuid::uuid4();
		$insert->status             = 1;
		$insert->creator_id         = Auth::user()->id;
		$insert->college_student_id = $find->college_student_id;
		$insert->lecturer_id        = $request->examiner;
		$insert->lecturer_type      = $find->lecturer_type;
		$insert->examiner_type      = $find->examiner_type;
		$insert->is_both            = $find->is_both;
		$insert->save();

		return redirect(url('manage_student_thesis/comprehensive_confirm_status', $find->college_student_id))->with('success', 'Penguji kompre sudah diganti');
	}	
}
