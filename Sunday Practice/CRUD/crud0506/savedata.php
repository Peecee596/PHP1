<?php

$conn=mysqli_connect("localhost","root","","crud");
$studentid=$_POST['id'];
$studentname=$_POST['sname'];
$studentclass=$_POST['class'];
$studentaddress=$_POST['saddress'];
$studentphone=$_POST['sphone'];
$sql="INSERT into students values (null,'{$studentname}','$studentaddress','{$studentclass}','{$studentphone}')";

$result=mysqli_query($conn,$sql);

header("location:http://localhost/practice-sunday-1/crud0506/index.php");

?>