<?php

$studentid=$_GET['id'];
$conn=mysqli_connect("localhost","root","","crud") or die("Query Failed");
$sql="DELETE FROM students where sid='{$studentid}'";
if(mysqli_query($conn,$sql))
{
	header("Location:http://localhost/crudhtml/index.php");
}
?>