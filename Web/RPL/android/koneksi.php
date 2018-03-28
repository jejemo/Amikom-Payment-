<?php
	$server		= "localhost"; //sesuaikan dengan nama server
	$user		= "root"; //sesuaikan username
	$password	= ""; //sesuaikan password
	$database	= "database_android"; //sesuaikan target databese
	$con = mysqli_connect($server, $user, $password, $database);
	if ($con){
	//echo "Terhubung Koneksi";
	 }
else{
echo "Gagal terhubung MySQL: " . mysqli_connect_error();
}

?>