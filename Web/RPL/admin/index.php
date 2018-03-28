<!DOCTYPE html>
<html>
<head>
	<title>Login Admin Apay</title>
	<!-- Meta -->
        <meta charset="utf-8">
        <meta name="description" content="StartUp Landing Page Template" />
        <meta name="keywords" content="Treetoper, startup, landing page, gradient background, image background, video background, template, responsive, bootstrap" />
        <meta name="developer" content="TemplateOcean">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- FAV AND TOUCH ICONS   -->
        <link rel="icon" href="images/favicon.ico">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- GOOGLE FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600' rel='stylesheet' type='text/css'>
        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Image Slider -->
        <link rel="stylesheet" href="css/plagin-css/plagin.css">
        <!-- FONT ICONS -->
        <link rel="stylesheet" href="icons/toicons/css/styles.css">
        <!--   COUSTOM CSS link  -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <!--[if lt IE 9]>
            <script src="js/plagin-js/html5shiv.js"></script>
            <script src="js/plagin-js/respond.min.js"></script>
        <![endif]-->
</head>
<body>
<center>
<div class="log">
	<h2>Form Login Admin</h2>
	<form action="halaman_login_proses.php" method="post">
		<div class="form-group">
		    <input type="text" class="form-control" name="INuser" placeholder="Enter Your Username">
		</div>
		<div class="form-group">
		    <input type="text" class="form-control" name="INpass" placeholder="Enter Your password">
		</div>
		<div class="form-group">
			<a href="index.php" class="wkwk">Batal</a>
		</div>
		<div class="form-group">
		    <input type="submit" value="Login">
		</div>
	</form>
</div>
</center>
</body>
</html>
<style type="text/css">
	body {
		padding: 70px;
	}
	.log {
		padding: 20px;
		padding-right: 300px;
		padding-left: 300px;
	}
	.wkwk {
		padding: 5px;
		color: #003A57;
		width: 100%;
		border: 1px solid #003A57;
		border-radius: 5px;
	}
	.wkwk:hover {
		background: #003A57;
		border: 1px solid #003A57;
		color: white;
	}
	input[type=submit] {
		padding: 5px;
		color: #003A57;
		background: white;
		width: 100%;
		border: 1px solid #003A57;
		border-radius: 5px;
	}
	input[type=submit]:hover {
		background: #003A57;
		border: 1px solid #003A57;
		color: white;
	}
</style>