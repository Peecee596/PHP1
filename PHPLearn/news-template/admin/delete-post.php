<?php

$conn=mysqli_connect("localhost","root","","newsblog") or die("Connection Failed");
$id=$_GET['id'];

$sql="DELETE from post where post_id='{$id}'";
if(mysqli_query($conn,$sql))
{
	header("Location:http://localhost/learnphp/news-template/admin/post.php");
}

?>