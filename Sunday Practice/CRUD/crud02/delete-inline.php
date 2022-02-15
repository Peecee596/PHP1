<?php

	$conn=mysqli_connect("localhost","root","","crud") or die("Connection Failed");
	$id=$_GET['id'];
	$sql="DELETE from students where sid='{$id}'";

	if(mysqli_query($conn,$sql))
	{
		header("Location:http://localhost/practice-sunday-1/crud02");
	}
?>