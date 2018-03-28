<center>
<?php
include "koneksi.php";
$sql = "DELETE FROM user WHERE nim = '".$_GET['kode']."'";
mysqli_query($config,$sql) or exit("Error query : <b>".$sql."</b>.");
echo "<br><br><br><br><br><h1>Data has been deleted.</h1>";
?>
</center>
<!DOCTYPE html>
<html>
<head>
	<title>Hapus Member</title>
</head>
<body>
       <p align="center" class="kembali"><a href="edit.php">Back</a> </p>
       <style type="text/css">
       			body {
       				text-align: center;
       			}
			 	.kembali a {
			 		text-decoration: none;
			 		padding: 5px 30px;
			 		background-color: #CA0F35;
			 		color: white;
			 		border: 1px solid #CA0F35;
			 	}
			 	.kembali a:hover {
			 		background-color: #fff;
			 		color: #CA0F35;
			 		border: 1px solid #CA0F35;	
			 	}
			 	input[type=submit] {
			 		text-decoration: none;
			 		padding: 5px 30px;
			 		background-color: #fff;
			 		color: #CA0F35;
			 		border: 1px solid #CA0F35;	
			 		float: right;
			 	}
			 	input[type=submit]:hover{
			 		background-color: #CA0F35;
			 		color: white;
			 		border: 1px solid #CA0F35;
			 	}
			 	input[type=text] {
			 		width: 100%;
			 		padding: 5px;
			 	}
		</style>
</body>
</html>