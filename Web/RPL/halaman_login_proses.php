
	<?php /* 
		include "koneksi.php";
		$sql   = "SELECT * FROM `user`"; 

		$hasil = mysqli_query($config,$sql) or exit("Error query : <b>".$sql."</b>."); 
		$data  = mysqli_fetch_assoc($hasil); 
		$user = $_POST['INuser'];
		$pin = $_POST['INpin'];
		$dataUser = $data['user'];
		$dataPin = $data['pin'];
		if ($user==$datauser & $pin==$datapin) {
			# code...
			echo "<br><br><br><br>";
			echo "<center style='border:1px solid #F0F0F0; padding:100px; padding-left:100px; padding-right:1000px; background: #F0F0F0;'>";
			echo "<p style='font-size: 40px;font-family:calibri;'>Login Berhasil!</p>";
			echo "<p style='margin-top:-30px;'><a href='admin.php' style='text-decoration: none; padding:5px; padding-left:80px; padding-right:80px; border: 1px solid #000; color: #000;'>Start Admin</a></p>";
			echo "</center>";
		} else {
			echo "<br><br><br><br>";
			echo "<center style='border:1px solid #F0F0F0; padding:100px; padding-left:100px; padding-right:1000px; background: #F0F0F0;'>";
			echo "<p style='font-size: 40px;font-family:calibri;'>Login Gagal!</p>";
			echo "<p style='margin-top:-30px;'><a href='halaman_login.php' style='text-decoration: none; padding:5px; padding-left:65px; padding-right:65px; border: 1px solid #000; color: #000;'>Coba Lagi</a></p>";
			echo "</center>";
		}
		*/
	

	include "koneksi.php";
$pin=$_POST['INpin'];
$sql="SELECT * FROM user where nama='$_POST[INuser]' and pin='$pin'";

$login=mysqli_query($config, $sql);
$found=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);

if($found > 0) {
	session_start() ;
	
	$_SESSION[INuser]=$r['INuser'];
	$_SESSION[INpin]=$r['INpin'];
	//$_SESSION[leveladmin]=$r['level'];
	header('location:admin.php?'); 
	}
else {
	echo "<link href=../config/adminstyle.css rel=stylesheet type=text/css>";
  	echo "<center>Login gagal! username atau password salah<br>";
  	echo "<a href=halaman_login.php><b>Silahkan coba lagi</b></a></center>"; }

  	?>