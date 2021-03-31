<?php namespace App\Http\Controllers\System;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\UserModel;
use App\Models\PersonModel;
use Ramsey\Uuid\Uuid;
use Auth;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['users'] = UserModel::where('status', '!=', 0)->orderBy('created_at')->get();
		return view('user.index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data['person'] = PersonModel::where('status', '!=', 0)->where('is_registered_user', 0)->get();
		return view('user.create', $data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$new_user = $request->new_user;
		foreach ($new_user as $key => $value) {
			$find_to_person = PersonModel::find($value);

			$save_to_user = new UserModel();
			$save_to_user->id = Uuid::uuid4();
			$save_to_user->status = 1;
			$save_to_user->person_id = $find_to_person->id;
			$save_to_user->username = isset($find_to_person->nim) ? $find_to_person->nim : $find_to_person->nip;
			$save_to_user->password = isset($find_to_person->nim) ? bcrypt($find_to_person->nim) : bcrypt($find_to_person->nip);
			$save_to_user->user_type_code = $find_to_person->person_type_code;
			$save_to_user->save();

			$update_to_person = $find_to_person;
			$update_to_person->is_registered_user = 1;
			$update_to_person->updater_id = Auth::user()->id;
			$update_to_person->update();
		}

		return redirect(url('user'))->with('success', "Berhasil menambahkan data User!");
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data = UserModel::find($id);		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data['user'] = UserModel::find($id);
		return view('user.edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$password         = $request->password;
		$password_confirm = $request->password_confirm;
		
		if ($password == $password_confirm) {
			$find_to_person = UserModel::find($id);
			$find_to_person->password = bcrypt($password);
			$find_to_person->update();

			return redirect(url('user'))->with('success', 'User berhasil di update.');
		}else{
			return redirect(url('user'))->with('error', 'Password tidak sama.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$find_to_delete = UserModel::find($id);
		$find_to_delete->status = 0;
		$find_to_delete->updater_id = Auth::user()->id;
		$find_to_delete->update();

		return redirect(url('user'))->with('success', 'User berhasil dihapus');
	}

}
