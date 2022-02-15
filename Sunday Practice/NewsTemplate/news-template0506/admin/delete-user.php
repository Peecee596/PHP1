<?php
session_start();
if($_SESSION['userrole']==0)
{
  header("Location:http://localhost/practice-sunday-1/news-template0506/admin/post.php");
}
?>

$conn=mysqli_connect("localhost","root","","newsblog");
$userid=$_GET['id'];
$sql="DELETE from user where user_id='{$userid}'";
if(mysqli_query($conn,$sql))
{
	header("Location:http://localhost/practice-sunday-1/news-template0506/admin/users.php");
}


?>