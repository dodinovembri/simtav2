<?php namespace App\Http\Controllers\System;
// Lecturer = Dosen

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PersonModel;
use App\Models\UserModel;
use Ramsey\Uuid\Uuid;
use Auth;

class LecturerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['lecturers'] = PersonModel::where('person_type_code', 3)->where('status', '!=', 0)->orderBy('created_at', 'ASC')->get();
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
			$name = $request->given_name." ".$request->middle_name." ".$request->surname;
			$uniq_name =  preg_replace("/[^a-zA-Z]/", "", $name);

			$insert_to_person                     = new PersonModel();
			$insert_to_person->id                 = Uuid::uuid4();
			$insert_to_person->status             = 1;
			$insert_to_person->nip                = $request->nip;
			$insert_to_person->given_name         = $request->given_name;
			$insert_to_person->middle_name        = $request->middle_name;
			$insert_to_person->surname            = $request->surname;
			$insert_to_person->uniq_name            = $uniq_name;
			$insert_to_person->person_type_code   = 3;
			$insert_to_person->is_registered_user = 1;
			$insert_to_person->save();

			$person = PersonModel::where('nip', $request->nip)->first();
			
			$insert_to_user                 = new UserModel();
			$insert_to_user->id             = Uuid::uuid4();
			$insert_to_user->status         = 1;
			$insert_to_user->person_id      = $person->id;
			$insert_to_user->username       = $request->nip;
			$insert_to_user->password       = bcrypt($request->nip);
			$insert_to_user->user_type_code = 3;
			$insert_to_user->save();

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
	public function update(Request $request, $id)
	{
		$name = $request->given_name." ".$request->middle_name." ".$request->surname;
		$uniq_name =  preg_replace("/[^a-zA-Z]/", "", $name);

		$update                   = PersonModel::find($id);
		$update->status           = 1;
		$update->nip              = $request->nip;
		$update->given_name       = $request->given_name;
		$update->middle_name      = $request->middle_name;
		$update->surname          = $request->surname;
		$update->uniq_name          = $uniq_name;
		$update->address          = $request->address;
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
		$find_to_delete = PersonModel::find($id);
		$find_to_delete->status = 0;
		$find_to_delete->updater_id = Auth::user()->id;
		$find_to_delete->update();

		return redirect(url('lecturer'))->with('success', "Berhasil menghapus data Dosen!");
	}

}
