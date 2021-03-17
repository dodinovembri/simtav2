<?php

namespace App\Http\Controllers\System;
// Collage Student = Mahasiswa

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\PersonModel;
use App\Models\UserModel;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use App\Models\BusinessEntityModel;
use App\Models\DocumentModel;
use App\Models\BusinessEntityDocument;

class CollegeStudentThesisController extends Controller
{

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

	public function create_kkt_file()
	{
		return view('college_student_thesis.kkt_file.create');
	}

	public function store_kkt_file(Request $request)
	{
		$creator_id            = Auth::user()->id;
		$person_id             = Auth::user()->person_id;
		$information_type_code = $request->information_type_code;
		$kkt_file              = $request->kkt_file;
		$total_sks_now         = $request->total_sks_now;
		$total_sks_transkrip   = $request->total_sks_transkrip;

		$validator = Validator::make($request->all(), [
			'krs_file' => 'mimes:jpeg,jpg,png|required|max:5000',
			'kp_file' => 'mimes:jpeg,jpg,png|required|max:5000',
			'transkrip_file' => 'mimes:jpeg,jpg,png|required|max:5000',
			'total_sks_now' => 'numeric|min:1',
			'total_sks_transkrip' => 'numeric|min:1'
		]);

		if ($validator->fails()) {
			return redirect()->back()->withInput()->withErrors($validator);
		} else {
			foreach ($information_type_code as $key => $value) {
				$insert_to_multimedia                        = new MultimediaDescriptionModel();
				$insert_to_multimedia->id                    = Uuid::uuid4();
				$insert_to_multimedia->status                = 1;
				$insert_to_multimedia->creator_id            = $creator_id;
				$insert_to_multimedia->information_type_code = $value;
				$insert_to_multimedia->file_name             = uniqid() . '.'. $file->getClientOriginalExtension();
				$insert_to_multimedia->original_file_name    = $file->getClientOriginalExtension();
				$insert_to_multimedia->url                   = $value;
				$insert_to_multimedia->save();

				$insert_to_person_asset                            = new PersonAssetModel();
				$insert_to_person_asset->person_id                 = $person_id;
				$insert_to_person_asset->multimedia_description_id = $insert_to_multimedia->id;
				$insert_to_person_asset->save();
			}

			return redirect(url('college_student_thesis'))->with('success', "Anda telah berhasil menambahkan KRS, KP dan Transkrip File!");
		}
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
