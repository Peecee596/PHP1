<?php
$conn=mysqli_connect("localhost","root","","newsblog");
session_start();
session_unset();
session_destroy();
header("Location:http://localhost/practice-sunday-1/news-template0506/admin/index.php");

?>
