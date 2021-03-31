<?php namespace App\Http\Controllers\System;
// Year Of Education = Tahun Angkatan

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\YearOfEducationModel;
use Ramsey\Uuid\Uuid;
use Auth;

class YearOfEducationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['year_of_educations'] = YearOfEducationModel::where('status', '!=', 0)->get();
		return view('year_of_education.index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('year_of_education.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$year_of_education_code = $request->year_of_education_code;
		$year_of_education_name = $request->year_of_education_name;
		$creator_id = Auth::user()->id;

		$insert_to_year_of_education = new YearOfEducationModel();
		$insert_to_year_of_education->id = Uuid::uuid4();
		$insert_to_year_of_education->status = 1;
		$insert_to_year_of_education->creator_id = $creator_id;
		$insert_to_year_of_education->year_of_education_code = $year_of_education_code;
		$insert_to_year_of_education->year_of_education_name = $year_of_education_name;
		$insert_to_year_of_education->save();

		return redirect(url('year_of_education'))->with('success', 'Angkatan berhasil ditambahkan!');
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
		$data['year_of_education'] = YearOfEducationModel::find($id);

		return view('year_of_education.edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$year_of_education_code = $request->year_of_education_code;
		$year_of_education_name = $request->year_of_education_name;
		$updater_id = Auth::user()->id;

		$insert_to_year_of_education = YearOfEducationModel::find($id);
		$insert_to_year_of_education->updater_id = $updater_id;
		$insert_to_year_of_education->year_of_education_code = $year_of_education_code;
		$insert_to_year_of_education->year_of_education_name = $year_of_education_name;
		$insert_to_year_of_education->update();

		return redirect(url('year_of_education'))->with('success', 'Angkatan berhasil diubah!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$find_to_delete = YearOfEducationModel::find($id);
		$find_to_delete->status = 0;
		$find_to_delete->update();

		return redirect(url('year_of_education'))->with('success', 'Angkatan berhasil dihapus!');
	}

}
