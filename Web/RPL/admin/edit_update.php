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
                  <li><a href="saldo.php">Tambah Saldo</a></li>
                  <li class="active"><a href="edit.php">Edit Member&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                  <li><a href="logout.php">Logout</a></li>
                </ul>
              </div>
          </div>
          <div class="span9">
	<style type="text/css">
		table tr td{
			padding-left: 10px;
			padding: 1px;
		}
		input[type=text] {
			padding: 10px;
			width: 80%;
		}
		input[type=number] {
			padding: 10px;
			width: 80%;
		}
		input[type=submit] {
			color: black;		
			padding: 5px;
			padding-right: 30px;
			padding-left: 30px;
			background-color: white;
			border: 1px solid #000;
		}
		input[type=submit]:hover {
			color: white;
			background: black;
		}
		.back a {
			color: black;
			text-decoration: none;
			padding: 7px;
			padding-right: 30px;
			padding-left: 30px;
			background-color: white;
			border: 1px solid #000;	
		}
		.back a:hover {
			color: white;
			background: #006191;
			border: 1px solid #006191;	
		}
	</style>
	<?php
		include("koneksi.php");
		$kode= $_GET['kode'];
		$sql = "SELECT * FROM user ";
		$sql.= "WHERE user.nim= '$kode'";
		$hasil = mysqli_query($config,$sql) or exit("Error query : <b>".$sql."</b>.");
		$data  = mysqli_fetch_assoc($hasil);
	?>
	<h2>Edit Member</h2>
	<form action="edit_update_proses.php" method="post">
		<table width="100%" border="0">
			<tr>
				<td>NIM</td>
				<td><input type="text" name="INnim" value="<?php echo $data['nim']; ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="INnama" value="<?php echo $data['nama']; ?>"></td>
			</tr>
			<tr>
				<td>pin</td>
				<td><input type="text" name="INpin" value="<?php echo $data['pin']; ?>"></td>
			</tr>
			<tr>
				<td>ID Saldo</td>
				<td><input type="text" name="INidsaldo" value="<?php echo $data['idsaldo']; ?>"></td>
			</tr>
		</table>
			<br>
		<table>
			<tr>
				<td>
					<div class="back">
						<a href="edit.php">Back</a>
					</div>	
				</td>
				<td>
					<input type="submit" value="Simpan">
				</td>
			</tr>
		</table>
	</form>
</div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="old/js/bootstrap.min.js"></script>
  </body>
</html>