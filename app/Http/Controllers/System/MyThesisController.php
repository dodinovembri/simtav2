<?php

namespace App\Http\Controllers\System;
// Collage Student = Mahasiswa

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\PersonModel;
use App\Models\UserModel;
use Ramsey\Uuid\Uuid;
use Auth;
use App\Models\PersonAssetModel;
use App\Models\StudentThesisModel;

class MyThesisController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$college_id = Auth::user()->person_id;
		$data['my_thesis'] = StudentThesisModel::where('college_student_id', $college_id)->first();
		return view('my_thesis.index', $data);
	}

	public function create_kkt_file()
	{
		return view('my_thesis.kkt_file.create');
	}

	public function store_kkt_file(Request $request)
	{
		$creator_id            = Auth::user()->id;
		$person_id             = Auth::user()->person_id;
		$information_type_code = $request->information_type_code;
		$kkt_file              = $request->file('kkt_file');
		$total_sks_now         = $request->total_sks_now;
		$total_sks_transkrip   = $request->total_sks_transkrip;

		foreach ($information_type_code as $key => $value) {

			$filename = uniqid() . '.' . $kkt_file[$key]->getClientOriginalExtension();
			$kkt_file[$key]->move("img/kkt/", $filename);
			$insert_to_person_asset = Uuid::uuid4();
			
			$insert_to_person_asset                            = new PersonAssetModel();
			$insert_to_person_asset->id                    = Uuid::uuid4();
			$insert_to_person_asset->status                = 1;	
			$insert_to_person_asset->creator_id            = $creator_id;		
			$insert_to_person_asset->person_id                 = $person_id;
			$insert_to_person_asset->information_type_code = $value;
			$insert_to_person_asset->file_name             = $filename;
			$insert_to_person_asset->original_file_name    = $kkt_file[$key]->getClientOriginalName();
			$insert_to_person_asset->file_size    = $kkt_file[$key]->getClientSize();
			$insert_to_person_asset->url                   = "img/kkt/";
			$insert_to_person_asset->save();
		}

		$insert_to_student_thesis = new StudentThesisModel();
		$insert_to_student_thesis->id                    = Uuid::uuid4();
		$insert_to_student_thesis->status                = 1;	
		$insert_to_student_thesis->creator_id            = $creator_id;
		$insert_to_student_thesis->college_student_id            = $person_id;
		$insert_to_student_thesis->total_sks_now            = $total_sks_now;
		$insert_to_student_thesis->total_sks_transkrip            = $total_sks_transkrip;
		$insert_to_student_thesis->is_kkt_file_set            = 1;
		$insert_to_student_thesis->save();

		return redirect(url('my_thesis'))->with('success', "Anda telah berhasil menambahkan KRS, KP dan Transkrip File!");
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
		} else {
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
