<?php

$conn=mysqli_connect("localhost","root","","crud") or die("Connection Failed");
$studentid=$_POST['sid'];
$studentname=$_POST['sname'];
$studentaddress=$_POST['saddress'];
$studentclass=$_POST['sclass'];
$studentphone=$_POST['sphone'];

$sql="UPDATE students SET 
sname='{$studentname}',
saddress='{$studentaddress}',
sclass='{$studentclass}',
sphone='{$studentphone}'
where sid='{$studentid}'
";
if(mysqli_query($conn,$sql))
{
	header("Location:http://localhost/crudhtml/index.php");
}


?>