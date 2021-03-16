<?php namespace App\Http\Controllers\System;
// Collage Student = Mahasiswa

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\PersonModel;
use App\Models\UserModel;
use Ramsey\Uuid\Uuid;

class CollegeStudentThesisController extends Controller {

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
		$check = PersonModel::where('nim', $request->nim)->first();
		if ($check) {
			return redirect(url('college_student'))->with('info', "Data Mahasiswa sudah tersedia!");
		}else{
			$insert                   = new PersonModel();
			$insert->id               = Uuid::uuid4();
			$insert->status           = 1;
			$insert->nim              = $request->nim;
			$insert->given_name       = $request->given_name;
			$insert->middle_name      = $request->middle_name;
			$insert->surname          = $request->surname;
			$insert->person_type_code = 4;
			$insert->save();

			$insert_user                 = new UserModel();
			$insert_user->id             = Uuid::uuid4();
			$insert_user->status         = 1;
			$insert_user->username       = $request->nim;
			$insert_user->password       = bcrypt($request->nim);
			$insert_user->user_type_code = 4;
			$insert_user->save();

			return redirect(url('college_student'))->with('success', "Berhasil menambahkan data Mahasiswa!");
		}
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
