<?php 
	include("koneksi.php");
	error_reporting(E_ALL^(E_NOTICE | E_WARNING));
	$a=$_POST['txtSaldoAwal'];
	$b=$_POST['txtTambah'];
	$hasil=$a+$b;
	$sql= "	UPDATE `saldo` SET 
			`jumlahsaldo` = '$hasil' 
			WHERE `saldo`.`idsaldo` = '".$_POST['txtIdsaldo']."'
	 ";
	mysqli_query($config,$sql) or exit("Error query : <b>".$sql."</b>."); 
	echo "<center>";
	echo "<br><br><br><br>";
		echo "Saldo Berhasil Ditambahkan."; 
		echo "<a href='saldo.php' style='text-decoration: none;color: #006191;'> Kembali</a>";
	echo "</center>";
?>