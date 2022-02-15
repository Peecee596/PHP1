
<?php
  if($_SESSION['user_role']==0)
  {
    header("Location:http://localhost/learnphp/news-template/admin/post.php");
  }

?>

<?php
$conn=mysqli_connect("localhost","root","","newsblog") or die("Connection Failed");
$user_id=$_GET['id'];
$sql="DELETE FROM user where user_id = '{$user_id}'";
if(mysqli_query($conn,$sql))
{
	header("Location:http://localhost/learnphp/news-template/admin/users.php");
}


?>