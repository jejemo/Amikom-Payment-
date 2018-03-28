<!DOCTYPE html>
<html>
  <head>
    <title>Admin-Apay</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="old/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="old/style.css">
  </head>
  <body>
    <div class="navbar navbar-inverse">
      <div class="navbar-inner">

      </div>
    </div>
    <div class="atas">
      <h2>APAY <small>Admin Page</small></h2>
    </div>
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="span3">
              <!--Sidebar content-->
              <div class="tabbable tabs-left">
                <ul class="nav nav-tabs">
                  <li>
                        <a href="admin.php">Home</a>
                  </li>
                  <li class="active"><a href="saldo.php">Tambah Saldo</a></li>
                  <li><a href="edit.php">Edit Member&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                  <li><a href="logout.php">Logout</a></li>
                </ul>
              </div>
          </div>
<div class="span9">
	<h2>Detail Saldo</h2>
	<?php
		include("koneksi.php");
		$kode= $_GET['kode'];
		$sql   = "SELECT * FROM `saldo` JOIN user ON saldo.idsaldo=user.idsaldo WHERE saldo.idsaldo = '$kode' LIMIT 0,1"; 
		$hasil = mysqli_query($config,$sql) or exit("Error query : <b>".$sql."</b>."); 
		$data  = mysqli_fetch_assoc($hasil); 
		echo "<table class='table table-bordered'>";
			echo "<tr>";
				echo "<td width='20%'>ID Saldo</td>";
				echo "<td>";
					echo $data['idsaldo'];
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td width='20%'>NIM</td>";
				echo "<td>";
					echo $data['nim'];
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td width='20%'>Nama</td>";
				echo "<td>";
					echo $data['nama'];
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td width='20%'>Saldo</td>";
				echo "<td>";
					echo $data['jumlahsaldo'];
				echo "</td>";
			echo "</tr>";
		echo "</table>";
	?>
	<div class="backDetail" align="right"><a href="saldo.php">Kembali</a></div>
	<style type="text/css">
		.backDetail a {
			text-decoration: none;
			padding: 10px;
			border: 1px solid #006191;
			background-color: #006191;
			color: #fff;
		}
		.backDetail a:hover {
			color: #006191;
			background-color: #fff;
			border: 1px solid #006191;
		}
	</style>
</div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="old/js/bootstrap.min.js"></script>
  </body>
</html>