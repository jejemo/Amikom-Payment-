
<?php 
	$conf	= mysqli_connect('localhost','root','','tugasrpl');
	error_reporting(E_ALL^(E_NOTICE | E_WARNING));
	$a=$_POST['txtSaldoAwal'];
	$b=$_POST['txtTambah'];
	$idsaldo=$_POST['txtID'];
	$amount=$_POST['txtTambah'];
	$tipe=$_POST['txtType'];
	$status=$_POST['txtStatus'];
	$tgl=$_POST['txtTgl'];
	$hasil=$a+$b;
	$sql= "	UPDATE `saldo` SET 
			`jumlahsaldo` = '$hasil' 
			WHERE `saldo`.`idsaldo` = '".$_POST['txtID']."'
	 ";
	mysqli_query($conf,$sql) or exit("Error query : <b>".$sql."</b>."); 
	$sqli= "	INSERT INTO `riwayatsaldo` (`id_riwayatSaldo`, `idSaldo`, `tanggal`, `amount`, `type`, `status`) VALUES ('', '$idsaldo', '$tgl', '$amount', '$tipe', '$status');
	";
	mysqli_query($conf,$sqli) or exit("Error query : <b>".$sql."</b>."); 
	echo "<center>";
	echo "<br><br><br><br>";
		echo "<h1 style='color:white'>Proses Registrasi Berhasil</h1>	"; 
		echo "<html><head><meta http-equiv='refresh' content='1;url=index.php'></head><body style='background: #A51F69'></body></html>";
	echo "</center>";
?>