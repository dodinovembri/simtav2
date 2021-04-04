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
use App\Models\StudentThesisHistoryModel;
use App\Models\ThesisTopicModel;
use App\Models\StudentThesisSupervisorModel;
use App\Models\StudentThesisExaminerModel;

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

		$data['my_thesis'] = StudentThesisModel::where('college_student_id', $college_id)->where('status', '!=', 0)->first();
		$data['person_assets'] = PersonAssetModel::where('person_id', $college_id)->where('status', '!=', 0)->get();
		$data['my_thesis_history'] = StudentThesisHistoryModel::where('history_code', 2)->where('status', '!=', 0)->where('college_student_id', $college_id)->first();
		$data['topic_ta_history'] = StudentThesisHistoryModel::where('history_code', 7)->where('status', '!=', 0)->where('college_student_id', $college_id)->first();
		$data['extend_proposal_rejected_reason'] = StudentThesisHistoryModel::where('history_code', 10)->where('status', '!=', 0)->where('college_student_id', $college_id)->first();
		$data['proposal_seminar_register_rejected_reason'] = StudentThesisHistoryModel::where('history_code', 12)->where('status', '!=', 0)->where('college_student_id', $college_id)->first();
		$data['comprehensive_register_rejected_reason'] = StudentThesisHistoryModel::where('history_code', 23)->where('status', '!=', 0)->where('college_student_id', $college_id)->first();
		$data['proposal_seminar_examiners'] = StudentThesisExaminerModel::where('college_student_id', $college_id)->where('status', '!=', 0)->get();
		$data['comprehensive_examiners'] = StudentThesisExaminerModel::where('college_student_id', $college_id)->where('status', '!=', 0)->where('examiner_type', 2)->get();
		
		return view('my_thesis.index', $data);
	}

	public function create_kkt_file()
	{
		return view('my_thesis.kkt_file.create');
	}

	public function store_kkt_file(Request $request)
	{
		$user_id               = Auth::user()->id;
		$person_id             = Auth::user()->person_id;
		$information_type_code = $request->information_type_code;
		$kkt_file              = $request->file('kkt_file');
		$total_sks_now         = $request->total_sks_now;
		$total_sks_transkrip   = $request->total_sks_transkrip;

		// save to person asset
		foreach ($information_type_code as $key => $value) {			
			$filename = uniqid() . '.' . $kkt_file[$key]->getClientOriginalExtension();
			$kkt_file[$key]->move("img/kkt/", $filename);
			$insert_to_person_asset = Uuid::uuid4();
			
			$insert_to_person_asset                        = new PersonAssetModel();
			$insert_to_person_asset->id                    = Uuid::uuid4();
			$insert_to_person_asset->status                = 1;
			$insert_to_person_asset->creator_id            = $user_id;
			$insert_to_person_asset->person_id             = $person_id;
			$insert_to_person_asset->information_type_code = $value;
			$insert_to_person_asset->file_name             = $filename;
			$insert_to_person_asset->original_file_name    = $kkt_file[$key]->getClientOriginalName();
			$insert_to_person_asset->file_size             = $kkt_file[$key]->getClientSize();
			$insert_to_person_asset->url                   = "img/kkt/";
			$insert_to_person_asset->save();
		}
		
		// find lecturer
		$find_to_person = PersonModel::find($person_id);
		$find_lecturer = PersonModel::where('nip', $find_to_person->academic_lecturer_nip)->first();

		// save to student thesis
		$find_if_exsit = StudentThesisModel::where('college_student_id', $person_id)->first();
		if (!isset($find_if_exsit)) {
			$insert_to_student_thesis                      = new StudentThesisModel();
			$insert_to_student_thesis->id                  = Uuid::uuid4();
			$insert_to_student_thesis->status              = 1;
			$insert_to_student_thesis->creator_id          = $user_id;
			$insert_to_student_thesis->lecturer_id		   = $find_lecturer->id;
			$insert_to_student_thesis->college_student_id  = $person_id;
			$insert_to_student_thesis->thesis_status_code  = 1;
			$insert_to_student_thesis->total_sks_now       = $total_sks_now;
			$insert_to_student_thesis->total_sks_transkrip = $total_sks_transkrip;
			$insert_to_student_thesis->is_kkt_file_set     = 1;
			$insert_to_student_thesis->save();

			return redirect(url('my_thesis'))->with('success', "Anda telah berhasil menambahkan KRS, KP dan Transkrip File!");
		}else{
			$update_to_student_thesis                      = $find_if_exsit;
			$update_to_student_thesis->status              = 1;
			$update_to_student_thesis->updater_id          = $user_id;
			$update_to_student_thesis->college_student_id  = $person_id;
			$update_to_student_thesis->thesis_status_code  = 1;
			$update_to_student_thesis->total_sks_now       = $total_sks_now;
			$update_to_student_thesis->total_sks_transkrip = $total_sks_transkrip;
			$update_to_student_thesis->is_kkt_file_set     = 1;
			$update_to_student_thesis->update();

			// update history
			$update_to_student_thesis_history = StudentThesisHistoryModel::where('status', 1)->where('college_student_id', $find_if_exsit->college_student_id)->where('history_code', 2)->first();
			if (isset($update_to_student_thesis_history)) {				
				$update_to_student_thesis_history->updater_id = $user_id;
				$update_to_student_thesis_history->status = 0;
				$update_to_student_thesis_history->update();
			}
			
			return redirect(url('my_thesis'))->with('success', "Anda telah berhasil memperbaharui KRS, KP dan Transkrip File!");
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

	public function create_thesis_topic()
	{
		$data['supervisor'] = PersonModel::where('status', '!=', 0)->where('person_type_code', 3)->get();
		$data['thesis_topics'] = ThesisTopicModel::where('status', '!=', 0)->get();
		return view('my_thesis.thesis_topic.create_thesis_topic', $data);
	}

	public function store_thesis_topic(Request $request)
	{
		$user_id = Auth::user()->id;
		$person_id = Auth::user()->person_id;
		$supervisor = $request->supervisor;
		$thesis_topic = $request->thesis_topic;
		$title_of_thesis = $request->title_of_thesis;
		$consultation_file = $request->file('consultation_file');

		// save to student thesis supervisor
		foreach ($supervisor as $key => $value) {			
			$check_if_exist = StudentThesisSupervisorModel::where('college_student_id', $person_id)->where('lecturer_id', $value)->first();
			if (!isset($check_if_exist)) {
				$insert_to_student_thesis_supervisor                     = new StudentThesisSupervisorModel();
				$insert_to_student_thesis_supervisor->id                 = Uuid::uuid4();
				$insert_to_student_thesis_supervisor->status             = 1;
				$insert_to_student_thesis_supervisor->creator_id         = $user_id;
				$insert_to_student_thesis_supervisor->college_student_id = Auth::user()->person_id;
				$insert_to_student_thesis_supervisor->lecturer_id        = $value;
				$insert_to_student_thesis_supervisor->save();			
			}
		}

		// store consultation file to person asset
		$check = PersonAssetModel::where('status', '!=', 0)->where('information_type_code', 4)->where('person_id', Auth::user()->person_id)->first();
		if (!isset($check)) {			
			$filename = uniqid() . '.' . $consultation_file->getClientOriginalExtension();
			$consultation_file->move("img/consultation_file/", $filename);
	
			$insert_to_person_asset                        = new PersonAssetModel();
			$insert_to_person_asset->id                    = Uuid::uuid4();
			$insert_to_person_asset->status                = 1;
			$insert_to_person_asset->creator_id            = $user_id;
			$insert_to_person_asset->person_id             = $person_id;
			$insert_to_person_asset->information_type_code = 4;
			$insert_to_person_asset->file_name             = $filename;
			$insert_to_person_asset->original_file_name    = $consultation_file->getClientOriginalName();
			$insert_to_person_asset->file_size             = $consultation_file->getClientSize();
			$insert_to_person_asset->url                   = "img/consultation_file/";
			$insert_to_person_asset->save();
		}else{
			$check->status = 0;
			$check->updater_id = Auth::user()->id;
			$check->update();

			$filename = uniqid() . '.' . $consultation_file->getClientOriginalExtension();
			$consultation_file->move("img/consultation_file/", $filename);
	
			$insert_to_person_asset                        = new PersonAssetModel();
			$insert_to_person_asset->id                    = Uuid::uuid4();
			$insert_to_person_asset->status                = 1;
			$insert_to_person_asset->creator_id            = $user_id;
			$insert_to_person_asset->person_id             = $person_id;
			$insert_to_person_asset->information_type_code = 4;
			$insert_to_person_asset->file_name             = $filename;
			$insert_to_person_asset->original_file_name    = $consultation_file->getClientOriginalName();
			$insert_to_person_asset->file_size             = $consultation_file->getClientSize();
			$insert_to_person_asset->url                   = "img/consultation_file/";
			$insert_to_person_asset->save();			
		}

		// update student thesis
		$update_to_student_thesis = StudentThesisModel::where('college_student_id', $person_id)->first();
		$update_to_student_thesis->updater_id = $user_id;
		$update_to_student_thesis->thesis_status_code = 5;
		$update_to_student_thesis->thesis_topic_id = $thesis_topic;
		$update_to_student_thesis->title_of_thesis = $title_of_thesis;
		$update_to_student_thesis->update();

		return redirect(url('my_thesis'))->with('success', 'Topik TA berhasil di upload.');
	}

	public function create_extension_proposal_seminar()
	{
		return view('my_thesis.proposal_seminar.create');
	}

	public function store_extension_proposal_seminar(Request $request)
	{
		$consultation_file = $request->file('consultation_file');
		$filename = uniqid() . '.' . $consultation_file->getClientOriginalExtension();
		$consultation_file->move("img/consultation_file/", $filename);

		// save to person asset
		$check_if_exist = PersonAssetModel::where('person_id', Auth::user()->person_id)->where('information_type_code', 5)->where('status', '!=', 0)->first();
		if (!isset($check_if_exist)) {			
			$insert_to_person_asset                        = new PersonAssetModel();
			$insert_to_person_asset->id                    = Uuid::uuid4();
			$insert_to_person_asset->status                = 1;
			$insert_to_person_asset->creator_id            = Auth::user()->id;
			$insert_to_person_asset->person_id             = Auth::user()->person_id;
			$insert_to_person_asset->information_type_code = 5;
			$insert_to_person_asset->file_name             = $filename;
			$insert_to_person_asset->original_file_name    = $consultation_file->getClientOriginalName();
			$insert_to_person_asset->file_size             = $consultation_file->getClientSize();
			$insert_to_person_asset->url                   = "img/consultation_file/";
			$insert_to_person_asset->save();
		}else{
			$check_if_exist->delete();
			$insert_to_person_asset                        = new PersonAssetModel();
			$insert_to_person_asset->id                    = Uuid::uuid4();
			$insert_to_person_asset->status                = 1;
			$insert_to_person_asset->creator_id            = Auth::user()->id;
			$insert_to_person_asset->person_id             = Auth::user()->person_id;
			$insert_to_person_asset->information_type_code = 5;
			$insert_to_person_asset->file_name             = $filename;
			$insert_to_person_asset->original_file_name    = $consultation_file->getClientOriginalName();
			$insert_to_person_asset->file_size             = $consultation_file->getClientSize();
			$insert_to_person_asset->url                   = "img/consultation_file/";
			$insert_to_person_asset->save();			
		}

		// update student thesis
		$update_to_student_thesis = StudentThesisModel::where('college_student_id', Auth::user()->person_id)->first();
		$update_to_student_thesis->updater_id = Auth::user()->person_id;
		$update_to_student_thesis->thesis_status_code = 8;
		$update_to_student_thesis->update();

		return redirect(url('my_thesis'))->with('success', 'File perpanjang seminar propsal berhasil ditambahkan');
	}

	public function register_proposal_seminar()
	{
		$person_id = Auth::user()->person_id;

		// update student thesis
		$update = StudentThesisModel::where('college_student_id', $person_id)->first();
		$update->thesis_status_code = 11;
		$update->updater_id = Auth::user()->id;
		$update->update();

		return redirect(url('my_thesis'))->with('success', 'Registrasi seminar proposal berhasil');
	}

	public function create_proposal_seminar_certificate()
	{
		return view('my_thesis.proposal_seminar.create_proposal_seminar_certificate');
	}

	public function store_proposal_seminar_certificate(Request $request)
	{
		$proposal_seminar_certificate = $request->file('proposal_seminar_certificate');
		$filename = uniqid() . '.' . $proposal_seminar_certificate->getClientOriginalExtension();
		$proposal_seminar_certificate->move("img/proposal_seminar_certificate/", $filename);

		// save to person asset
		$check_if_exist = PersonAssetModel::where('person_id', Auth::user()->person_id)->where('information_type_code', 5)->where('status', '!=', 0)->first();
		if (!isset($check_if_exist)) {			
			$insert_to_person_asset                        = new PersonAssetModel();
			$insert_to_person_asset->id                    = Uuid::uuid4();
			$insert_to_person_asset->status                = 1;
			$insert_to_person_asset->creator_id            = Auth::user()->id;
			$insert_to_person_asset->person_id             = Auth::user()->person_id;
			$insert_to_person_asset->information_type_code = 6;
			$insert_to_person_asset->file_name             = $filename;
			$insert_to_person_asset->original_file_name    = $proposal_seminar_certificate->getClientOriginalName();
			$insert_to_person_asset->file_size             = $proposal_seminar_certificate->getClientSize();
			$insert_to_person_asset->url                   = "img/proposal_seminar_certificate/";
			$insert_to_person_asset->save();
		}else{
			$check_if_exist->status = 0;
			$check_if_exist->updater_id = Auth::user()->id;
			$check_if_exist->update();

			$insert_to_person_asset                        = new PersonAssetModel();
			$insert_to_person_asset->id                    = Uuid::uuid4();
			$insert_to_person_asset->status                = 1;
			$insert_to_person_asset->creator_id            = Auth::user()->id;
			$insert_to_person_asset->person_id             = Auth::user()->person_id;
			$insert_to_person_asset->information_type_code = 6;
			$insert_to_person_asset->file_name             = $filename;
			$insert_to_person_asset->original_file_name    = $proposal_seminar_certificate->getClientOriginalName();
			$insert_to_person_asset->file_size             = $proposal_seminar_certificate->getClientSize();
			$insert_to_person_asset->url                   = "img/proposal_seminar_certificate/";
			$insert_to_person_asset->save();			
		}

		$college_student_id = Auth::user()->person_id;
		$update = StudentThesisModel::where('college_student_id', $college_student_id)->where('status', '!=', 0)->first();
		$update->thesis_status_code = 18;
		$update->updater_id = Auth::user()->id;
		$update->update();

		return redirect(url('my_thesis'))->with('success', 'SK Seminar proposal berhasil di upload.');
	}

	public function register_comprehensive()
	{
		$person_id = Auth::user()->person_id;

		// update student thesis
		$update = StudentThesisModel::where('college_student_id', $person_id)->first();
		$update->thesis_status_code = 22;
		$update->updater_id = Auth::user()->id;
		$update->update();

		return redirect(url('my_thesis'))->with('success', 'Registrasi komprehensive berhasil');
	}	

	public function create_comprehensive_certificate()
	{
		return view('my_thesis.comprehensive.create_comprehensive_certificate');
	}

	public function store_comprehensive_certificate(Request $request)
	{
		$comprehensive_certificate = $request->file('comprehensive_certificate');
		$filename = uniqid() . '.' . $comprehensive_certificate->getClientOriginalExtension();
		$comprehensive_certificate->move("img/comprehensive_certificate/", $filename);

		// save to person asset
		$check_if_exist = PersonAssetModel::where('person_id', Auth::user()->person_id)->where('information_type_code', 5)->where('status', '!=', 0)->first();
		if (!isset($check_if_exist)) {			
			$insert_to_person_asset                        = new PersonAssetModel();
			$insert_to_person_asset->id                    = Uuid::uuid4();
			$insert_to_person_asset->status                = 1;
			$insert_to_person_asset->creator_id            = Auth::user()->id;
			$insert_to_person_asset->person_id             = Auth::user()->person_id;
			$insert_to_person_asset->information_type_code = 7;
			$insert_to_person_asset->file_name             = $filename;
			$insert_to_person_asset->original_file_name    = $comprehensive_certificate->getClientOriginalName();
			$insert_to_person_asset->file_size             = $comprehensive_certificate->getClientSize();
			$insert_to_person_asset->url                   = "img/comprehensive_certificate/";
			$insert_to_person_asset->save();
		}else{
			$check_if_exist->status = 0;
			$check_if_exist->updater_id = Auth::user()->id;
			$check_if_exist->update();

			$insert_to_person_asset                        = new PersonAssetModel();
			$insert_to_person_asset->id                    = Uuid::uuid4();
			$insert_to_person_asset->status                = 1;
			$insert_to_person_asset->creator_id            = Auth::user()->id;
			$insert_to_person_asset->person_id             = Auth::user()->person_id;
			$insert_to_person_asset->information_type_code = 7;
			$insert_to_person_asset->file_name             = $filename;
			$insert_to_person_asset->original_file_name    = $comprehensive_certificate->getClientOriginalName();
			$insert_to_person_asset->file_size             = $comprehensive_certificate->getClientSize();
			$insert_to_person_asset->url                   = "img/comprehensive_certificate/";
			$insert_to_person_asset->save();			
		}

		$college_student_id = Auth::user()->person_id;
		$update = StudentThesisModel::where('college_student_id', $college_student_id)->where('status', '!=', 0)->first();
		$update->thesis_status_code = 29;
		$update->updater_id = Auth::user()->id;
		$update->update();

		return redirect(url('my_thesis'))->with('success', 'SK Komprehensif berhasil di upload.');
	}	
}
