<?php namespace App\Http\Controllers\System;
// Collage Student = Mahasiswa

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Auth;
use App\Models\StudentThesisModel;
use App\Models\PersonModel;
use App\Models\StudentThesisExaminerModel;


class ManageStudentThesisController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['manage_student_thesis'] = StudentThesisModel::with('person')->where('status', '!=', 0)->where('thesis_status_code', 13)->get();
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
		$data['examiners'] = PersonModel::where('status', '!=', 0)->where('person_type_code', 3)->get();

		return view('manage_student_thesis.examiner.create_examiner', $data);
	}

	public function store_examiner(Request $request, $id)
	{
		$examiner = $request->examiner;
		$check = StudentThesisExaminerModel::where('college_student_id', $id)->first();

		if (!isset($check)) {
			// save examiner lead to student thesis examiner
			$insert                     = new StudentThesisExaminerModel();
			$insert->id                 = Uuid::uuid4();
			$insert->status             = 1;
			$insert->creator_id             = Auth::user()->id;
			$insert->college_student_id = $id;
			$insert->lecturer_id = $request->examiner_lead;
			$insert->lecturer_type = 1;
			$insert->save();

			// save examiner to student thesis examiner
			foreach ($examiner as $key => $value) {
				$insert                     = new StudentThesisExaminerModel();
				$insert->id                 = Uuid::uuid4();
				$insert->status             = 1;
				$insert->creator_id             = Auth::user()->id;
				$insert->college_student_id = $id;
				$insert->lecturer_id = $value;
				$insert->lecturer_type = 2;
				$insert->save();
			}
		}else{
			$destroy = StudentThesisExaminerModel::where('college_student_id', $id)->get();
			foreach ($destroy as $key => $value) {
				$value->delete();
			}

			// save examiner lead to student thesis examiner
			$insert                     = new StudentThesisExaminerModel();
			$insert->id                 = Uuid::uuid4();
			$insert->status             = 1;
			$insert->creator_id             = Auth::user()->id;
			$insert->college_student_id = $id;
			$insert->lecturer_id = $request->examiner_lead;
			$insert->lecturer_type = 1;
			$insert->save();

			// save examiner to student thesis examiner
			foreach ($examiner as $key => $value) {
				$insert                     = new StudentThesisExaminerModel();
				$insert->id                 = Uuid::uuid4();
				$insert->status             = 1;
				$insert->creator_id             = Auth::user()->id;
				$insert->college_student_id = $id;
				$insert->lecturer_id = $value;
				$insert->lecturer_type = 2;
				$insert->save();
			}
		}

		// update student thesis
		$update = StudentThesisModel::where('college_student_id', $id)->first();
		$update->thesis_status_code = 14;
		$update->updater_id = Auth::user()->id;
		$update->update();

		return redirect(url('manage_student_thesis'))->with('success', 'Dosen penguji sudah diatur');
	}
}