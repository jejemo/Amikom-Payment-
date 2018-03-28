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
                  <li  class="active"><a href="saldo.php">Tambah Saldo</a></li>
                  <li><a href="edit.php">Edit Member&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
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
		$sql = "SELECT * FROM saldo ";
		$sql.= "WHERE saldo.idsaldo= '$kode'";
		$hasil = mysqli_query($config,$sql) or exit("Error query : <b>".$sql."</b>.");
		$data  = mysqli_fetch_assoc($hasil);
	?>
	<h2>Tambah Saldo</h2>
	<form action="update_proses.php" method="post">
		<table width="100%" border="0">
			<tr>
				<td width="25%"></td>
				<td><input type="hidden" name="txtIdsaldo" value="<?php echo $data['idsaldo']; ?>" /></td>
			</tr>
			<tr>
				<td>ID Saldo</td>
				<td><input type="text" value="<?php echo $data['idsaldo']; ?>" disabled/></td>
			</tr>
			<tr>
				<td>Saldo</td>
				<td>
					<input type="hidden" name="txtSaldoAwal" value="<?php echo $data['jumlahsaldo']; ?>" />
					<input type="number" value="<?php echo $data['jumlahsaldo']; ?>" disabled />
				</td>
			</tr>

			<tr>
				<td>Tambah Saldo</td>
				<td>
					<div class="form-group">
						<label for="sell"></label>
						<select class="form-control" id="sell" name="txtTambah">
							<option value="50000">Rp. 50.000,00</option>
							<option value="100000">Rp. 100.000,00</option>
							<option value="150000">Rp. 150.000,00</option>
							<option value="200000">Rp. 200.000,00</option>
							<option value="250000">Rp. 250.000,00</option>
							<option value="300000">Rp. 300.000,00</option>
							<option value="350000">Rp. 350.000,00</option>
					</select>
					</div>
				</td>
			</tr>
		</table>
			<br>
		<table>
			<tr>
				<td>
					<div class="back">
						<a href="saldo.php">Back</a>
					</div>	
				</td>
				<td>
					<input type="hidden" name="txtID" value="<?php echo $data['idsaldo'];         ?>" />
					<input type="submit" value="Submit">
				</td>
			</tr>
		</table>
	</form>
</div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="old/js/bootstrap.min.js"></script>
  </body>
</html>