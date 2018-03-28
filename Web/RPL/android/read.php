<?php 
	include 'server.php';

	$query = "SELECT jumlahsaldo FROM saldo where idsaldo='s144'";
	$result = mysqli_query($config,$query);

	$arraydata = array();

	while ($row = mysqli_fetch_assoc($result)) {
		$arraydata[]=$row; 
	}
	echo json_encode($arraydata);
 ?>