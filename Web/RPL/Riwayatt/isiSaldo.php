<?php
						if (session_status() == PHP_SESSION_NONE  || session_id() == '') {
					        session_start();
					    }
						$kode = $_SESSION['kodeAkun']; 
							$conf	= mysqli_connect('localhost','root','','tugasrpl');
							//$cek 	= mysqli_query($conf, "SELECT * FROM user WHERE nim='$kode' ");
							$sql   = "	SELECT * FROM user 
											join saldo 
											on user.idsaldo=saldo.idsaldo
										WHERE nim='$kode' ";
							$hasil = mysqli_query($conf,$sql) or exit("Error query: <b>".$sql."</b>.");
							while($data = mysqli_fetch_assoc($hasil))
							{ 
								$cek	= $data['jumlahsaldo'];
								$jeneng = $data['nama'];
						?>
<center>
	<div class="wreap">
	<br><br>
	<h1 class="title">
		Isi Saldo
		<small></small>
			<?php  
				echo $jeneng;
			?>
		</small>
	</h1>
	<br><br><br>
	<?php 
		$tgl=date('l, d-m-y');
	?>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<form action="isiSaldo_proses.php" method="post">
		<br>
		<div class="form-group">
			<input type="hidden" name="txtSaldoAwal" value="<?php echo $data['jumlahsaldo']; ?>">
			<select class="form-control" id="sell" name="txtTambah" style="width: 80%;">
				<option value="50000">Rp. 50.000,00</option>
				<option value="100000">Rp. 100.000,00</option>
				<option value="150000">Rp. 150.000,00</option>
				<option value="200000">Rp. 200.000,00</option>
				<option value="250000">Rp. 250.000,00</option>
				<option value="300000">Rp. 300.000,00</option>
				<option value="350000">Rp. 500.000,00</option>
				<option value="350000">Rp. 1000.000,00</option>
			</select>
		</div>
		<div>
			<input type="hidden" name="txtID" value="<?php echo $data['idsaldo'];?>" />
			<input type="hidden" name="txtTgl" value="<?php echo $tgl;?>" />
			<input type="hidden" name="txtType" value="Complete" />
			<input type="hidden" name="txtStatus" value="Isi Saldo" />
			<input type="submit" value="Submit">
		</div>
	</form>
	</div>
</center>
<?php  }?>
<style type="text/css">
	.title {
		color: #761D9D;
	}
	input[type=submit] {
		width: 80%;
		padding: 5px;
		border: 1px solid #A51F69;
		background-color: white;
		color: #A51F69;
	}
	input[type=submit]:hover {
		border: 1px solid #A51F69;
		background-color: #A51F69;
		color: #fff;	
	}
	.wreap {
		border: 2px solid #A51F69;
		width: 50%;
		margin-top: 100px;
		padding-bottom: 50px;
		border-radius: 10px;
		box-shadow: 5px 5px 1px;
	}
</style>