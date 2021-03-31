<?php namespace App\Http\Controllers\System;
// Thesis Topic = Topic TA

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ThesisTopicModel;
use Ramsey\Uuid\Uuid;
use Auth;

class ThesisTopicController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['thesis_topics'] = ThesisTopicModel::where('status', '!=', 0)->get();
		return view('thesis_topic.index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('thesis_topic.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$thesis_topic_code = $request->thesis_topic_code;
		$thesis_topic_name = $request->thesis_topic_name;
		$creator_id = Auth::user()->id;

		$insert_to_thesis_topic = new ThesisTopicModel();
		$insert_to_thesis_topic->id = Uuid::uuid4();
		$insert_to_thesis_topic->status = 1;
		$insert_to_thesis_topic->creator_id = $creator_id;
		$insert_to_thesis_topic->thesis_topic_code = $thesis_topic_code;
		$insert_to_thesis_topic->thesis_topic_name = $thesis_topic_name;
		$insert_to_thesis_topic->save();

		return redirect(url('thesis_topic'))->with('success', 'Topik TA berhasil ditambahkan!');
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
		$data['thesis_topic'] = ThesisTopicModel::find($id);

		return view('thesis_topic.edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$thesis_topic_code = $request->thesis_topic_code;
		$thesis_topic_name = $request->thesis_topic_name;
		$updater_id = Auth::user()->id;

		$insert_to_thesis_topic = ThesisTopicModel::find($id);
		$insert_to_thesis_topic->updater_id = $updater_id;
		$insert_to_thesis_topic->thesis_topic_code = $thesis_topic_code;
		$insert_to_thesis_topic->thesis_topic_name = $thesis_topic_name;
		$insert_to_thesis_topic->update();

		return redirect(url('thesis_topic'))->with('success', 'Topik TA berhasil diubah!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$find_to_delete = ThesisTopicModel::find($id);
		$find_to_delete->status = 0;
		$find_to_delete->update();

		return redirect(url('thesis_topic'))->with('success', 'Topik TA berhasil dihapus!');
	}

}
