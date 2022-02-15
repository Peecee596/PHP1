<?php

	$conn=mysqli_connect("localhost","root","","crud") or die("Connection failed");
	$id=$_POST['sid'];
	$name=$_POST['sname'];
	$address=$_POST['saddress'];
	$class=$_POST['sclass'];
	$phone=$_POST['sphone'];
	$sql="UPDATE students
			SET sname='{$name}',
			saddress='{$address}',
			sclass='{$class}',
			sphone='{$phone}'
			where sid='{$id}'";
	if(mysqli_query($conn,$sql))
	{
		header("Location:http://localhost/practice-sunday-1/crud02");
	}


?>