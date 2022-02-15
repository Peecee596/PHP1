<?php


$student_id=$_POST['sid'];
$student_name=$_POST['sname'];
$student_address=$_POST['saddress'];
$student_class=$_POST['sclass'];
$student_phone=$_POST['sphone'];

$conn=mysqli_connect("localhost","root","","crud") or die("Connection Failed");
$sql=" UPDATE students SET
sname='{$student_name}',
saddress='{$student_address}',
sclass='{$student_class}',
sphone='{$student_phone}'
where sid=$student_id
"; 
$result=mysqli_query($conn,$sql) or die("Query Failed");
header("Location:http://localhost/Practice-Sunday-1/crud")


?>