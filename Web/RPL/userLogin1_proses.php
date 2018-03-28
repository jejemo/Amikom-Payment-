<?php
session_start();
$username=$_POST['username'];
$sandi=$_POST['sandi'];

include "koneksi.php";
	$hasil = mysql_query("SELECT * FROM user WHERE nim='$username' and pin='$sandi' ",$id_mysqli);

if (! $hasil)
	die("Permintaan gagal dilaksanakan");

$row=mysql_num_rows($hasil);

if($row==0){
echo "<script>alert('Fatal error : Login gagal, silakan ulangi kembali')</script>";
print("<html><head><meta http-equiv='refresh' content='0;url=userLogin.html'><head><body></body></html>");
}

if($row>0){
	while($baris=mysql_fetch_array($hasil))
{
$username=$baris[username];
$password=$baris[password];
$id_admin=$baris[id_admin];
}

session_start();
session_register("username");
session_register("password");
session_register("id_admin");
print("<html><head><meta http-equiv='refresh' content='0;url=selamat.php'><head><body></body></html>");
}
?>