<?php
	$conn=mysqli_connect("localhost","root","","newsblog") or die("Connect");
	session_start();
	session_unset();
	session_destroy();
	header("Location:http://localhost/learnphp/news-template/admin");


?>
