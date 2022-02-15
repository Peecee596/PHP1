<?php

if($_SESSION['user_role']==0)
{
	header("Location:http://localhost/learnphp/news-template/admin/post.php");
}

?>

<?php

$categoryid=$_GET['id'];

$conn=mysqli_connect("localhost","root","","newsblog") or die("Connection failed");
$sql="DELETE from category where category_id ='{$categoryid}'";
if(mysqli_query($conn,$sql))
{
	header("Location:http://localhost/learnphp/news-template/admin/category.php");
}

?>