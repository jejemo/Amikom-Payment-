<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Purple</title>
	<link href="riwayat/style.css" rel="stylesheet">
</head>
<body>
<div class="main-content">
	<div class="content-wrapper">
		<div class="header">
			<div class="logo"><img src="riwayat/logo.png"></div>
			<div class="right-content">
				<div class="avatar"><img src="riwayat/avatar.jpg"></div>
				<div class="name">
				<?php 
				session_start() ;
				echo $_SESSION['INuser'];
				?>
				</div>
				<div class="button"><button class="btn"><a href="index.php">LOGOUT</a></button></div>
			</div>
		</div>
		<div class="content">
			<div class="left-sidebar">
				<div class="top-title">DASHBOARD</div>
				<div class="menu">
					<ul class="menu-list">
						<li class="list-item">
							<span class="purple"></span><span class="icon"><img src="riwayat/balance.png"></span><span class="menu-text">BALANCE</span>
						</li>
						<li class="list-item">
							<span class="purple"></span><span class="icon"><img src="riwayat/cart.png"></span><span class="menu-text">ORDER</span>
						</li>
						<li class="list-item">
							<span class="purple"></span><span class="icon"><img src="riwayat/history.png"></span><span class="menu-text">RIWAYAT</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="content-box"></div>
		</div>
	</div>
</div>
</body>
</html>