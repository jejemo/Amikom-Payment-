<?php
	include 'koneksi.php';
	
	class usr{}
		$iduser = $_POST["iduser"];
	$name = $_POST["name"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$confirm_password = $_POST["confirm_password"];

		if ((empty($iduser))) { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Kolom id user tidak boleh kosong"; 
		die(json_encode($response));
	} 	else if ((empty($name))) { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Kolom name tidak boleh kosong"; 
		die(json_encode($response));
	} 
else if ((empty($username))) {
		$response = new usr();
	 	$response->success = 0;
		$response->message = "Kolom username tidak boleh kosong";
 	die(json_encode($response));
	 } else if ((empty($password))) {
		$response = new usr();
	 	$response->success = 0;
		$response->message = "Kolom password tidak boleh kosong";
	 	die(json_encode($response));
	 } else if ((empty($confirm_password)) || $password != $confirm_password) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Konfirmasi password tidak sama";
	 	die(json_encode($response));
	 } else {
		 if (!empty($username) && $password == $confirm_password){
		 	$num_rows = mysqli_num_rows(mysqli_query($con, "SELECT * FROM users WHERE username='".$username."'"));

		 	if ($num_rows == 0){
		 		$query = mysqli_query($con, "INSERT INTO users (iduser,nama, username, password) VALUES('".$iduser."','".$name."','".$username."','".$password."')");

		 		if ($query){
					$response = new usr();
				$response->success = 1;
					$response->message = "Register berhasil, silahkan login.";
					die(json_encode($response));

	 		} else {
					$response = new usr();
					$response->success = 0;
		 			$response->message = "Username sudah ada lo";
		 			die(json_encode($response));
				}
			} else {
		 		$response = new usr();
		 		$response->success = 0;
				$response->message = "Username sudah ada!!";
		 		die(json_encode($response));
			}
		 }
	 }

	 mysqli_close($con);

?>	