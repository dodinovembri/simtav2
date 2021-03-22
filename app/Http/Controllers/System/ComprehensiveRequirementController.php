<?php namespace App\Http\Controllers\System;
// Comprehensive requirement = Syarat Kompre

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ComprehensiveRequirementModel;
use Ramsey\Uuid\Uuid;
use Auth;

class ComprehensiveRequirementController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['comprehensive_requirements'] = ComprehensiveRequirementModel::all();
		return view('comprehensive_requirement.index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('comprehensive_requirement.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$comprehensive_requirement_code = $request->comprehensive_requirement_code;
		$comprehensive_requirement_name = $request->comprehensive_requirement_name;
		$creator_id = Auth::user()->id;

		$insert_to_comprehensive_requirement = new ComprehensiveRequirementModel();
		$insert_to_comprehensive_requirement->id = Uuid::uuid4();
		$insert_to_comprehensive_requirement->status = 1;
		$insert_to_comprehensive_requirement->creator_id = $creator_id;
		$insert_to_comprehensive_requirement->comprehensive_requirement_code = $comprehensive_requirement_code;
		$insert_to_comprehensive_requirement->comprehensive_requirement_name = $comprehensive_requirement_name;
		$insert_to_comprehensive_requirement->save();

		return redirect(url('comprehensive_requirement'))->with('success', 'Syarat Kompre berhasil diubah!');
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
		$data['comprehensive_requirement'] = ComprehensiveRequirementModel::find($id);
		return view('comprehensive_requirement.edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$comprehensive_requirement_code = $request->comprehensive_requirement_code;
		$comprehensive_requirement_name = $request->comprehensive_requirement_name;
		$updater_id = Auth::user()->id;

		$insert_to_comprehensive_requirement = ComprehensiveRequirementModel::find($id);
		$insert_to_comprehensive_requirement->updater_id = $updater_id;
		$insert_to_comprehensive_requirement->comprehensive_requirement_code = $comprehensive_requirement_code;
		$insert_to_comprehensive_requirement->comprehensive_requirement_name = $comprehensive_requirement_name;
		$insert_to_comprehensive_requirement->update();

		return redirect(url('comprehensive_requirement'))->with('success', 'Angkatan berhasil diubah!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$delete = ComprehensiveRequirementModel::find($id);
		$delete->delete();

		return redirect(url('comprehensive_requirement'))->with('success', 'Syarat Kompre berhasil dihapus!');
	}

}
