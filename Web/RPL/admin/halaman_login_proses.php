	<?php  
		include "koneksi.php";
		$sql   = "SELECT * FROM `admin`"; 
		$hasil = mysqli_query($config,$sql) or exit("Error query : <b>".$sql."</b>."); 
		$data  = mysqli_fetch_assoc($hasil); 
		$user = $_POST['INuser'];
		$pass = $_POST['INpass'];
		$dataUser = $data['user'];
		$dataPass = $data['pass'];
		if ($user==$dataUser & $pass==$dataPass) {
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
			echo "<p style='margin-top:-30px;'><a href='index.php' style='text-decoration: none; padding:5px; padding-left:65px; padding-right:65px; border: 1px solid #000; color: #000;'>Coba Lagi</a></p>";
			echo "</center>";
		}
	?>