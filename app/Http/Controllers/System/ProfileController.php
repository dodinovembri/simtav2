<?php namespace App\Http\Controllers\System;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Auth;
use App\Models\UserModel;

class ProfileController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('profile.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// 
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		// 
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
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$profile = $request->file('profile');
		$filename = uniqid() . '.' . $profile->getClientOriginalExtension();
		$profile->move("img/profile/", $filename);

		$update = UserModel::find($id);
		$update->updater_id = Auth::user()->id;
		$update->image = $filename;
		$update->update();

		return redirect(url('profile'))->with('success', 'Profil berhasil diupdate.');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit_password($id)
	{
		return view('profile.edit_password');
	}

	public function update_password(Request $request, $id)
	{
		$password         = $request->password;
		$password_confirm = $request->password_confirm;
		
		if ($password == $password_confirm) {
			$update = UserModel::find($id);
			$update->password = bcrypt($password);
			$update->update();

			return redirect(url('profile/edit_password', $id))->with('success', 'Password berhasil di update.');
		}else{
			return redirect(url('profile/edit_password', $id))->with('error', 'Password tidak sama.');
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
		// 
	}

}
