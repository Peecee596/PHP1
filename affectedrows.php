<?php

$conn= mysqli_connect("localhost","root","","test") or die("Connection Failed");
//$sql="SELECT * from students";
$sql="Update students
		set lname='Tiwari'
		where lname='Khan'";
$result = mysqli_query($conn,$sql) or die("Query Failed");

echo"Total rows affected:".mysqli_affected_rows($conn);
?>