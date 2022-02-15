<?php
$studentname=$_POST['sname'];
$student_address=$_POST['saddress'];
$student_class=$_POST['sclass'];
$student_phone=$_POST['sphone'];

$conn=mysqli_connect("localhost","root","","crud") or die("Connection Failed");
$sql="INSERT into students values(null,'{$studentname}','{$student_address}','{$student_class}','{$student_phone}')";
if(mysqli_query($conn,$sql))
{
	header("Location:http://localhost/crudhtml/index.php");
}



?>