<?php 
include_once ('server.php');
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Getting values
		$npm = $_POST['idsaldo'];
		$nm = $_POST['jumlahsaldo'];
		//$jrs = $_POST['jurusan'];
		
		//Creating an sql query
		$sql = "INSERT INTO saldo (idsaldo,jumlahsaldo) VALUES ('$npm','$nm')";
		
		//Importing our db connection script
		if(mysqli_query($config,$sql)){
			$response['message'] = "Succes";
		}else{
			$response['message'] = "Failed";
		}
		
		//Closing the database 
		mysqli_close($config);
		echo json_encode($response);
	}

	?>