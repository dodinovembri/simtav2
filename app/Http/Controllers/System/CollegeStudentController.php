<?php

namespace App\Http\Controllers\System;
// Collage Student = Mahasiswa

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\MajorsModel;
use Illuminate\Http\Request;
use App\Models\PersonModel;
use App\Models\UserModel;
use App\Models\YearOfEducationModel;
use App\Models\StudentAcademicSupervisorModel;
use App\Models\StudentThesisModel;
use Ramsey\Uuid\Uuid;
use Excel;
use DB;

class CollegeStudentController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['majors'] = MajorsModel::where('status', '!=', 0)->get();
		$data['year_of_educations'] = YearOfEducationModel::where('status', '!=', 0)->get();
		$data['college_students'] = PersonModel::where('person_type_code', 4)->where('status', '!=', 0)->get();

		return view('college_student.index', $data);
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
			// insert to person
			$insert_to_person                   = new PersonModel();
			$insert_to_person->id               = Uuid::uuid4();
			$insert_to_person->status           = 1;
			$insert_to_person->nim              = $request->nim;
			$insert_to_person->given_name       = $request->given_name;
			$insert_to_person->middle_name      = $request->middle_name;
			$insert_to_person->surname          = $request->surname;
			$insert_to_person->person_type_code = 4;
			$insert_to_person->save();

			// insert to user
			$insert_to_user                 = new UserModel();
			$insert_to_user->id             = Uuid::uuid4();
			$insert_to_user->status         = 1;
			$insert_to_user->username       = $request->nim;
			$insert_to_user->password       = bcrypt($request->nim);
			$insert_to_user->user_type_code = 4;
			$insert_to_user->save();

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
		$data['college_student'] = PersonModel::find($id);
		return view('college_student/edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$update_to_person              = PersonModel::find($id);
		$update_to_person->nim         = $request->nim;
		$update_to_person->given_name  = $request->given_name;
		$update_to_person->middle_name = $request->middle_name;
		$update_to_person->surname     = $request->surname;
		$update_to_person->address     = $request->address;
		$update_to_person->update();

		return redirect(url('college_student'))->with('success', "Berhasil memperbaharui data Mahasiswa!");
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
		$find_to_delete->update();

		return redirect(url('college_student'))->with('success', "Berhasil menghapus data Mahasiswa!");
	}

	/**
	 * Download college student template.
	 *
	 * @return Response
	 */
	public function download_template(Request $request)
	{
		$file_name = 'mhs_template_' . date('Y-m-d_H-i-s');
		Excel::create($file_name, function ($excel) use ($request) {

			$excel->sheet('Template', function ($sheet) use ($request) {
				$sheet->setColumnFormat(array(
					'A' => '@',
					'B' => '@',
					'E' => '@',
				));

				$data['majors'] = $request->majors;
				$data['year_of_education'] = $request->year_of_education;
				$sheet->loadView('exports.mhs', $data);
			});
		})->download('xlsx');
	}

	/**
	 * Store college student template.
	 *
	 * @return Response
	 */
	public function store_college_student(Request $request)
	{
		$path = $request->file('college_student')->getRealPath();
		$data = Excel::load($path)->get();

		if ($data->count() > 0) {
			$insert_data = [];

			foreach ($data->toArray() as $key => $value) {
				$check_lecturer = PersonModel::where('nip', $value['nip_pa'])->first();

				if (!empty($check_lecturer)) {
					$check_college_student       = PersonModel::where('nim', $value['nim'])->first();
					$exists_mhs                  = [];
					$not_found_year_of_education = [];
					$not_found_majors            = [];
					$imported_college_student    = [];
					
					if (empty($check_college_student)) {
						$year_of_education = YearOfEducationModel::where('year_of_education_name', $value['angkatan'])->first();
						$majors = MajorsModel::where('majors_name', $value['jurusan'])->first();
						if (empty($year_of_education)) {
							array_push($not_found_year_of_education, $value['nim']);
						} else if (empty($majors)) {
							array_push($not_found_majors, $value['nim']);
						} else {
							$name = explode(" ", $value['nama']);
							if (count($name) == 2) {
								$name[2] = $name[1];
								$name[1] = NULL;
							}
							$insert_data[] = array(
								'id'                    => Uuid::uuid4(),
								'status'                => 1,
								'nim'                   => $value['nim'],
								'given_name'            => $name[0],
								'middle_name'           => isset($name[1]) ? $name[1] : NULL,
								'surname'               => isset($name[2]) ? $name[2] : NULL,
								'person_type_code'      => 4,
								'academic_lecturer_nip' => $value['nip_pa'],
								'year_of_education_id'  => $year_of_education->id,
								'majors_id'             => $majors->id,
								'address'               => $value['alamat'],
								'is_registered_user'    => 0,
								'created_at'            => date('Y-m-d H:i:s')
							);

							array_push($imported_college_student, $value['nim']);
						}
					} else {
						return redirect('college_student')->withMessage('Mahasiswa dengan NIM ' . $value['nim'] . ' sudah ada !');
						array_push($exists_mhs, $value['nim']);
					}
				} else {
					return redirect('college_student')->withMessage('Dosen dengan NIP ' . $value['nip_pa'] . ' tidak tersedia !');
				}
			}


			if (!empty($insert_data)) {
				DB::table('person')->insert($insert_data);
			}

			return redirect('college_student')->with('success', 'Mahasiswa sukses ditambahkan !');
		}
	}
}
