<?php 
	include 'koneksi.php'; 
	$sql = "INSERT INTO user (nama, nim, email, pin, idsaldo) VALUES ('".$_POST['INnama']."', '".$_POST['INnim']."', '".$_POST['INemail']."', '".$_POST['INpass']."', '".$_POST['INnim']."')";
	$sqld = "INSERT INTO saldo (idsaldo, jumlahsaldo) VALUES ('".$_POST['INnim']."',0)";
	mysqli_query($config, $sql) or exit("Error query : <b>".$sql."</b>."); 
	mysqli_query($config, $sqld) or exit("Error query : <b>".$sqld."</b>."); 
	//echo "Data berhasil ditambahkan."; 
	//echo "<a href='index.php'>Kembali</a>";
	echo "<br><br><br><br><br><br><br><br><br><br>";
		echo "<center><h1 style='color:white'>Proses Registrasi Berhasil</h1></center>	"; 
		echo "<html><head><meta http-equiv='refresh' content='1;url=index.php'></head><body style='background: #A51F69'></body></html>";
	echo "</center>";
?>