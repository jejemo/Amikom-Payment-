<?php
session_start();


	
unset($_SESSION[INpin]);
unset($_SESSION[INuser]);
session_unset();
session_destroy();
header("location:../index.php");

?>