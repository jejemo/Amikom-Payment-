<?php 
	include("koneksi.php");
	error_reporting(E_ALL^(E_NOTICE | E_WARNING));
	$nim=$_POST['INnim'];
	$nama=$_POST['INnama'];
	$pin=$_POST['INpin'];
	$idsaldo=$_POST['INidsaldo'];
	$sql= "	UPDATE `user` SET 
			`nim` = '$nim',
			`nama` = '$nama',
			`pin` = '$pin',
			`idsaldo` = '$idsaldo'
			WHERE `user`.`nim` = '$nim'
	 ";
	mysqli_query($config,$sql) or exit("Error query : <b>".$sql."</b>."); 
	echo "<center>";
	echo "<br><br><br><br>";
		echo "Berhasil Mengedit Data..."; 
		echo "<a href='edit.php' style='text-decoration: none;color: #006191;'> Kembali</a>";
	echo "</center>";
?>