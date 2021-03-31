<?php namespace App\Http\Controllers\System;
// Majors = Jurusan

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\MajorsModel;
use Ramsey\Uuid\Uuid;
use Auth;

class MajorsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['majors'] = MajorsModel::where('status', '!=', 0)->get();
		return view('majors.index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('majors.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$majors_code = $request->majors_code;
		$majors_name = $request->majors_name;
		$creator_id = Auth::user()->id;

		$insert_to_majors = new MajorsModel();
		$insert_to_majors->id = Uuid::uuid4();
		$insert_to_majors->status = 1;
		$insert_to_majors->creator_id = $creator_id;
		$insert_to_majors->majors_code = $majors_code;
		$insert_to_majors->majors_name = $majors_name;
		$insert_to_majors->save();

		return redirect(url('majors'))->with('success', 'Jurusan berhasil ditambahkan!');
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
		$data['majors'] = MajorsModel::find($id);

		return view('majors.edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$majors_code = $request->majors_code;
		$majors_name = $request->majors_name;
		$updater_id = Auth::user()->id;

		$insert_to_majors = MajorsModel::find($id);
		$insert_to_majors->updater_id = $updater_id;
		$insert_to_majors->majors_code = $majors_code;
		$insert_to_majors->majors_name = $majors_name;
		$insert_to_majors->update();

		return redirect(url('majors'))->with('success', 'Jurusan berhasil diubah!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$find_to_delete = MajorsModel::find($id);
		$find_to_delete->status = 0;
		$find_to_delete->update();

		return redirect(url('majors'))->with('success', 'Jurusan berhasil dihapus!');
	}

}
