<?php
$conn=mysqli_connect("localhost","root","","crud");
$id=$_GET['id'];
$sql="delete from students where sid='{$id}'";
$result=mysqli_query($conn,$sql);
header("location:http://localhost/practice-sunday-1/crud0506/index.php");

?>