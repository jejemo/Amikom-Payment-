<?php 
	include 'koneksi.php'; 
	//$nim='';
	$sql = "select * from user where email='".$_POST['user']."' and pin='".$_POST['pass']."'";
	$cek=mysqli_query($config, $sql) or exit("Error query : <b>".$sql."</b>."); 
	//$data=mysqli_fetch_array($sql);
	//$nim=$data['nim'];	
	
	
	
if($cek) {
	session_start() ;
	
	//$_SESSION['INnim']= $_POST['user'];
	$_SESSION['INuser']=$_POST['user'];
	$_SESSION['INpin']=$_POST['pass'];
	//$_SESSION[leveladmin]=$r['level'];
	header('location:Riwayat.php?'); 
	}
/*echo "Anda Berhasil Login"; 
	echo "<a href='Riwayat.php'>Kembali</a>";}
	else{
echo "Data tidak ada"; 
echo "<a href='index.php'>Kembali</a>";}
?>