<?php
$conn=mysqli_connect("localhost","root","","newsblog") or die("Connection Failed");

if(empty($_FILES['new_image']['name']))
{
	$file_name=$_POST['old_image'];
}
else
{
	$errors=[];
	$file_name=['new_image']['name'];
	$file_size=['new_image']['size'];
	$file_tmp=['new_image']['tmp_name'];
	$file_type=['new_image']['type'];
	$file_ext=strtolower(end(explode('.',$file_name)));
	$extensions=["jpeg","jpg","png"];
	if(in_array($file_ext,$extensions)==false)
	{
		$errors[]="Upload correct extensions";
	}
	if($file_size>2097152)
	{
		$errors[]="File must be less than 2 MB";
	}
	if(empty($errors=true))
	{
		move_uploaded_file($file_tmp,"upload/".$file_name);
	}
	else
	{
		print_r($errors);
		die();
	}
}


$title=$_POST['post_title'];
$desc=$_POST['postdesc'];
$category=$_POST['category'];
$post_id=$_POST['post_id'];

$sql="UPDATE post SET title='{$title}'
	description='{$desc}',
	category={$category},
	post_img='{$file_name}'
	where post_id={$post_id}
";

$result=mysqli_query($conn,$sql);
if($result)
{
	header("location:http://localhost/learnphp/news-template/admin/post.php");
}	
?>