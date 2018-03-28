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
	<table class="table table-bordered">
	<tr>
		<th width="10%">ID SALDO</th>
		<th>JUMLAH SALDO</th>
		<th width="40%">Aksi</th>
	</tr>
		<?php
			include("koneksi.php");
			$sql   = "SELECT * FROM `saldo` JOIN user ON saldo.idsaldo=user.idsaldo GROUP BY saldo.idsaldo";
			$hasil = mysqli_query($config,$sql) or exit("Error query: <b>".$sql."</b>.");
			while($data = mysqli_fetch_assoc($hasil))
			{ 
		?>
	<tr>
		<td ><?php echo $data['idsaldo']; ?></td>
		<td><?php echo $data['jumlahsaldo']; ?></td>
		<td class="tombol">
		    <a href="detail.php?kode=<?php echo $data['idsaldo']; ?>" style="text-decoration: none; color: #A3A3A3">   Detail </a>
		    <a href="update.php?kode=<?php echo $data['idsaldo']; ?>" style="text-decoration: none;">   Tambah Saldo </a>
		</td> 
	</tr>
		<?php         
			}         
		?>
	</table>
</div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="old/js/bootstrap.min.js"></script>
  </body>
</html>