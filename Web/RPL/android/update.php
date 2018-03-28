<?php
	include_once ('server.php');

	error_reporting(E_ALL ^ E_NOTICE);

	$nim = $_GET['nim'];
	$nama = $_GET['nama'];
	$pin = $_GET['pin'];
	$idsaldo = $_GET['idsaldo'];
	$email = $_GET['email'];

	$getdata = mysqli_query($config,"SELECT * FROM user WHERE nim='$nim'");
	$rows = mysqli_query($getdata);
	
	if ($rows > 0) {
		$query = "UPDATE user SET nim = '$nim', nama='$nama', pin = '$pin', idsaldo='$idsaldo', email='$email' ";

		$exeinsert = mysqli_query($config,$insert);

		if($exeinsert)
		{
			$response['code'] = 1;
			$response['message'] = "Succes";
		}
		else
		{
			$response['code'] = 0;
			$response['message'] = "Failed";
		}	
	}
	
		echo json_encode($response);




?>