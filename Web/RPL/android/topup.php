<?php	
	include ('server.php');
	
	error_reporting(E_ALL ^ E_NOTICE);
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$a= $_POST['idsaldo'];
		$b= $_POST['jumlahsaldo'];
		// $hasil = $a+$b;
	$saldolama = 0;
		$sql = "SELECT s.*, u.* from saldo s, user u where s.idsaldo = u.idsaldo and s.idsaldo = '$a' " ;
		$exe = mysqli_query($config, $sql);
		while ( $row = mysqli_fetch_array($exe)) {
			$saldolama= $saldolama+$row['jumlahsaldo'];	
			
		}

				

	 	$saldobaru = $saldolama+$b;
	 	
		$topup = "UPDATE `saldo` SET 
				`jumlahsaldo` = '$saldobaru' 
				WHERE `saldo`.`idsaldo` = '$a'";
		$exeinsert = mysqli_query($config,$topup);

		if($exeinsert)
		{
			//echo $saldobaru;
			echo "Succes";
		}
		else
		{
			//echo $saldobaru;
			echo "Failed";
		}
	}
	
?>