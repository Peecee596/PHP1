<?php
$conn=mysqli_connect("localhost","root","","crud") or die("Connection Failed");
$name=$_POST['sname'];
$address=$_POST['saddress'];
$class=$_POST['class'];
$phone=$_POST['sphone'];

$sql="INSERT into students values 
(null,'{$name}','{$address}','{$class}','{$phone}')";

if(mysqli_query($conn,$sql))
{
	header("Location:http://localhost/practice-sunday-1/crud02");
}

?>