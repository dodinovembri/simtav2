<?php namespace App\Http\Controllers\System;
// Lecturer = Dosen

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PersonModel;
use Auth;
use Ramsey\Uuid\Uuid;

class LecturerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['lecturers'] = PersonModel::where('person_type_code', 3)->get();
		return view('lecturer.index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('lecturer.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$check = PersonModel::where('nip', $request->nip)->first();
		if ($check) {
			return redirect(url('lecturer'))->with('info', "Data Dosen sudah tersedia!");
		}else{
			$insert                   = new PersonModel();
			$insert->id               = Uuid::uuid4();
			$insert->status           = 1;
			$insert->nip              = $request->nip;
			$insert->given_name       = $request->given_name;
			$insert->middle_name      = $request->middle_name;
			$insert->surname          = $request->surname;
			$insert->person_type_code = 3;
			$insert->save();

			return redirect(url('lecturer'))->with('success', "Berhasil menambahkan data Dosen!");
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
		$data['lecturer'] = PersonModel::find($id);
		return view('lecturer.edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$update                   = PersonModel::find($id);
		$update->status           = 1;
		$update->nip              = $request->nip;
		$update->given_name       = $request->given_name;
		$update->middle_name      = $request->middle_name;
		$update->surname          = $request->surname;
		$update->update();

		return redirect(url('lecturer'))->with('success', "Berhasil mengubah data Dosen!");
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

}
