
<?php

$student_name=$_POST['sname'];
$student_address=$_POST['saddress'];
$student_class=$_POST['class'];
$student_phone=$_POST['sphone'];

$conn=mysqli_connect("localhost","root","","crud") or die("Connection Failed");
$sql="INSERT into students values(
null,'{$student_name}',
'{$student_address}',
'{$student_class}',
'{$student_phone}')";
$result=mysqli_query($conn,$sql) or die("Query Failed");

header("Location:http://localhost/practice-sunday-1/crud")



?>