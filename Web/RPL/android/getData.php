<?php 
	
	require_once('server.php');
	
	$sql = "SELECT * FROM saldo WHERE id='s144'";
	$r = mysqli_query($config,$sql);
	
	$result = array();
	
	$row = mysqli_fetch_array($r);
	array_push($result,array(
			"jumlah saldo"=>$row['jumlahsaldo'],
			
		));

	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);