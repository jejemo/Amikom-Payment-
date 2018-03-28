
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
						?>



<div class="balance-header row">
	<div class="title-balance">A-PAY BALANCE</div>
	<div class="amount-balance"><?php  echo "Rp. ".number_format($cek, 2, ",", ".");?>,-</div>
	<div class="add-saldo"><a href="isiSaldo.php?kode_isiSaldo=<?php echo $kode; ?>" class="isi-saldo">ISI SALDO</a></div>
</div>
<div class="inside-content row" style="background: #E4E4E4;">
		<table class="table table-striped-custom">
		<thead class="thead-purple">
			<tr>
				<th colspan="5">ALL ACTIVITY</th>
			</tr>
		</thead>
		<thead class="thead-white">
			<tr>
				<th scope="col">No.</th>
				<th scope="col">DATE</th>
				<th scope="col">AMOUNT</th>
				<th scope="col">TYPE</th>
				<th scope="col">STATUS</th>
			</tr>
		</thead>
	
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
											join riwayatsaldo
											on riwayatsaldo.idsaldo=saldo.idsaldo
										WHERE nim='$kode' ";
							$i=0;
							$hasil = mysqli_query($conf,$sql) or exit("Error query: <b>".$sql."</b>.");
							while($data = mysqli_fetch_assoc($hasil))
							{ 
								
	?>
		<tr class="tbody">
			<td>&nbsp;&nbsp;&nbsp;<?php echo $i=$i+1?>.</td>
			<td>&nbsp;<?php echo $data['tanggal'];?></td>
			<td>&nbsp;Rp. <?php echo $data['amount'];?></td>
			<td><p style="color: green"><?php echo $data['type'];?></p></td>
			<td>&nbsp;&nbsp;<?php echo $data['status'];?></td>
	<?php
	 }
	 ?>
		</tr>
</table>
</div>
<?php  } ?>