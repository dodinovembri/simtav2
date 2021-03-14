<?php  

function CheckUserType($user_type_code)
{
	if ($user_type_code == 1) {
		return "Administrator";
	}elseif ($user_type_code == 2) {
		return "Pengelola";
	}elseif ($user_type_code == 3) {
		return "Dosen";
	}elseif ($user_type_code == 4) {
		return "Mahasiswa";
	}else{
		return "Not Defined";
	}
}

function CheckStatus($status)
{
	if ($status == 0) {
		return "Inactive";
	}elseif ($status == 1) {
		return "Active";
	}else{
		return "Not Defined";
	}
}

?>