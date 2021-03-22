<?php namespace App\Http\Controllers\System;
// Proposal Seminar Requirement = Syarat Seminar Proposal

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ProposalSeminarRequirementModel;
use Ramsey\Uuid\Uuid;
use Auth;

class ProposalSeminarRequirementController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['proposal_seminar_requirements'] = ProposalSeminarRequirementModel::all();
		return view('proposal_seminar_requirement.index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('proposal_seminar_requirement.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$proposal_seminar_requirement_code = $request->proposal_seminar_requirement_code;
		$proposal_seminar_requirement_name = $request->proposal_seminar_requirement_name;
		$creator_id = Auth::user()->id;

		$insert_to_proposal_seminar_requirement = new ProposalSeminarRequirementModel();
		$insert_to_proposal_seminar_requirement->id = Uuid::uuid4();
		$insert_to_proposal_seminar_requirement->status = 1;
		$insert_to_proposal_seminar_requirement->creator_id = $creator_id;
		$insert_to_proposal_seminar_requirement->proposal_seminar_requirement_code = $proposal_seminar_requirement_code;
		$insert_to_proposal_seminar_requirement->proposal_seminar_requirement_name = $proposal_seminar_requirement_name;
		$insert_to_proposal_seminar_requirement->save();

		return redirect(url('proposal_seminar_requirement'))->with('success', 'Syarat Sempro berhasil ditambahkan!');
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
		$data['proposal_seminar_requirement'] = ProposalSeminarRequirementModel::find($id);
		return view('proposal_seminar_requirement.edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$proposal_seminar_requirement_code = $request->proposal_seminar_requirement_code;
		$proposal_seminar_requirement_name = $request->proposal_seminar_requirement_name;
		$updater_id = Auth::user()->id;

		$insert_to_proposal_seminar_requirement = ProposalSeminarRequirementModel::find($id);
		$insert_to_proposal_seminar_requirement->updater_id = $updater_id;
		$insert_to_proposal_seminar_requirement->proposal_seminar_requirement_code = $proposal_seminar_requirement_code;
		$insert_to_proposal_seminar_requirement->proposal_seminar_requirement_name = $proposal_seminar_requirement_name;
		$insert_to_proposal_seminar_requirement->update();

		return redirect(url('proposal_seminar_requirement'))->with('success', 'Syarat Sempro berhasil diubah!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$delete = ProposalSeminarRequirementModel::find($id);
		$delete->delete();

		return redirect(url('proposal_seminar_requirement'))->with('success', 'Syarat Sempro berhasil dihapus!');
	}

}
