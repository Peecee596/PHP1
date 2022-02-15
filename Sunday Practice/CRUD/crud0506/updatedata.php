<?php

$conn=mysqli_connect("localhost","root","","crud");
$studentid=$_POST['sid'];
$studentname=$_POST['sname'];
$studentaddress=$_POST['saddress'];
$studentclass=$_POST['sclass'];
$studentphone=$_POST['sphone'];
$sql="UPDATE students SET sname='{$studentname}',saddress='{$studentaddress}',sclass='{$studentclass}',sphone='{$studentphone}' where sid='{$studentid}'";

$result=mysqli_query($conn,$sql);

header("location:http://localhost/practice-sunday-1/crud0506/index.php");

?>