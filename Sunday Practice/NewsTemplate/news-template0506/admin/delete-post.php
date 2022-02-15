<?php

$conn=mysqli_connect("localhost","root","","newsblog");
$post_id=$_GET['id'];
$categoryid=$_GET['catid'];

echo $sql1="SELECT * from post where post_id='{$post_id}'";

$result=mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($result);
unlink("upload/".$row['post_img']);
// echo"<pre>";
// print_r($row);
// echo"</pre>";
// die();
$sql="DELETE from post where post_id='{$post_id}';";
$sql.="UPDATE category set post=post-1 where category_id='{$categoryid}';";


if(mysqli_multi_query($conn,$sql))
{
	header("Location:http://localhost/practice-sunday-1/news-template0506/admin/post.php");
}

?>