<?php
<?php
session_start();
if($_SESSION['userrole']==0)
{
  header("Location:http://localhost/practice-sunday-1/news-template0506/admin/post.php");
}
?>
$conn=mysqli_connect("localhost","root","","newsblog");
$categoryid=$_GET['id'];
$sql="DELETE from category where category_id='{$categoryid}'";
//$result=mysqli_query($conn,$sql);
if(mysqli_query($conn,$sql))
{
	header("Location:http://localhost/practice-sunday-1/news-template0506/admin/category.php");
}
?>