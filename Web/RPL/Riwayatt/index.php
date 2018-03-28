<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Purple</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php
	include ("../js/confirmLogout.js");
?>
<div class="main-content container">
	<div class="content-wrapper row">
		<div class="header">
			<div class="logo"><img src="logo.png"></div>
			<div class="right-content">
				<div class="avatar"><img src="avatar.jpg"></div>
				<div class="name">
					<?php
						if (session_status() == PHP_SESSION_NONE  || session_id() == '') {
					        session_start();
					    }
						$kode = $_SESSION['kodeAkun']; 
							$conf	= mysqli_connect('localhost','root','','tugasrpl');
							//$cek 	= mysqli_query($conf, "SELECT * FROM user WHERE nim='$kode' ");
							$sql   = "SELECT * FROM user WHERE nim='$kode' ";
							$hasil = mysqli_query($conf,$sql) or exit("Error query: <b>".$sql."</b>.");
							while($data = mysqli_fetch_assoc($hasil))
							{ 
								echo $data['nama'];
						?>

						<?php  } ?>
				</div>
				<div class="button"><button class="btn">
					<a href="logout.php "  style="color: white; text-decoration-line: none; padding: 5px;">Logout</a>
				</button></div>
				
			</div>
		</div>
		<div class="content">
			<div class="left-sidebar col-md-3">
				<div class="row">
					<div class="top-title">DASHBOARD</div>
					<div class="menu">
						<ul class="menu-list">
							<li class="list-item <?php if(isset($_GET['page']) || $_GET['page'] == 'home'){ echo "active";}?>" >
								<a href="?page=home"><span class="purple"></span><span class="icon wallet"></span><span class="menu-text">BALANCE</span></a>
							</li>
							<li class="list-item <?php if(isset($_GET['page']) && $_GET['page'] == 'order'){ echo "active";}?>" >
								<a href="?page=order"><span class="purple"></span><span class="glyphicon glyphicon-shopping-cart"></span><span class="menu-text">ORDER</span></a>
							</li>
							<li class="list-item <?php if(isset($_GET['page']) && $_GET['page'] == 'riwayat'){ echo "active";}?>" >
								<a href="?page=riwayat"><span class="purple"></span><span class="glyphicon glyphicon-th-list"></span><span class="menu-text">RIWAYAT</span></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="content-box col-md-9">
				<?php
				if (isset($_GET['page']) && $_GET['page'] != '')
				{
					if($_GET['page'] == 'home')
					{
						include ('home.php');
						//echo "tes";
					}
					if($_GET['page'] == 'order')
					{
						include ('order.php');
					}
					if($_GET['page'] == 'riwayat')
					{
						include ('riwayat.php');
					}
				}
				else
				{
					include ('home.php');
				}

					?>
			</div>
		</div>
	</div>
</div>
</body>
</html>