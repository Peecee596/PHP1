<?php
$student_id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","crud") or die("Connection Failed");
$sql="DELETE from students where sid='{$student_id}'";
$result=mysqli_query($conn,$sql)or die("Query Failed");
header("Location:http://localhost/Practice-Sunday-1/crud"); 

?>