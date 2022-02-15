<?php
$conn=mysqli_connect("localhost","root","","newsblog");

if(empty($_FILES['new_image']['name']))
{
	$imgname=$_POST['old_image'];
}
else
{
	$errors=[];
	$file_name=$_FILES['new_image']['name'];
	$file_size=$_FILES['new_image']['size'];
	$file_tmp=$_FILES['new_image']['tmp_name'];
	$file_type=$_FILES['new_image']['type'];
	$file_ext=strtolower(end(explode('.',$file_name)));

	$extensions=['jpg','png','JPEG'];

	if(in_array($file_ext, $extensions)==false)
	{
		$errors[]="This is not correct extensions";
	}
	if($file_size>=2097152)
	{
		$errors[]="Upload the file less than 2 MB";
	}
		$newname=time()."_".basename($file_name);
		$imgname=$newname;
		$target="upload/".$newname;
	if(empty($errors)==true)
	{
		move_uploaded_file($file_tmp,$target);
		//move_uploaded_file($file_tmp,"upload/".$file_name);
	}
	else
	{
		print_r($errors);
		die();
	}
}


$postid=$_POST['post_id'];
$posttitle=$_POST['post_title'];
$postdesc=$_POST['postdesc'];
$postcategory=$_POST['category'];
$oldcategory=$_POST['old_category'];




	 $sql="UPDATE post SET title='{$posttitle}',
	 	description='{$postdesc}',
	 	category='{$postcategory}',
	 	post_img='{$imgname}'
		WHERE post_id={$postid};";
		if($oldcategory!=$postcategory)
		{

			$sql.="UPDATE category SET post=post+1 WHERE category_id={$postcategory};";
			$sql.="UPDATE category SET post=post-1 WHERE category_id={$oldcategory};";
		}

	$result=mysqli_multi_query($conn,$sql);

	if($result)
	{
		header("Location:http://localhost/practice-sunday-1/news-template0506/admin/post.php");
	}
	else
	{
		echo"QF";
	}



?>