<?php  
	include "server.php";
		
			$sql   = "SELECT * FROM `saldo` where idsaldo = '15.11.8729'";
			$hasil = mysqli_query($config,$sql) or exit("Error query: <b>".$sql."</b>.");
			if(mysqli_num_rows($hasil)>0)
			{ 
				$row = mysqli_fetch_assoc($hasil);
				echo json_encode(array("Id"=>$row['idsaldo'],"Jumlah"=>$row['jumlahsaldo']));	
			}
			
			
?>