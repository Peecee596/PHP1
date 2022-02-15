<?php
	
	$conn=mysqli_connect("localhost","root","","newsblog");
	if(isset($_FILES['fileToUpload']))
	{
		$errors=[];
		$file_name=$_FILES['fileToUpload']['name'];
		$file_size=$_FILES['fileToUpload']['size'];
		$file_type=$_FILES['fileToUpload']['type'];
		$file_tmp=$_FILES['fileToUpload']['tmp_name'];
		$file_ext=strtolower(end(explode ( '.' , $file_name )));
		$extensions=["png","jpg","jpeg"];

		if(in_array($file_ext,$extensions)==false)
		{
			$error[]="This extensions not allowed";
		}
		if($file_size>2097152)
		{
			$error[]="Upload file less than 2MB";
		}
		$newname=time()."_".basename($file_name);
		$imgname=$newname;
		$target="upload/".$newname;
		if(empty($errors)==true)
		{
			move_uploaded_file($file_tmp,$target);
		}
		else
		{
			print_r($errors);
			die();
		}


	}

	session_start();
	$posttitle=$_POST['post_title'];
	$postdesc=$_POST['postdesc'];
	$category=$_POST['category'];
	//$post_id=$_POST['post_id'];
	$date=date("d M,Y");
	$author=$_SESSION['userid'];

	$sql="INSERT into post values(null,'{$posttitle}','{$postdesc}','{$category}','{$date}','{$author}','{$imgname}');";

	$sql.="UPDATE category
		SET post=post+1
		WHERE category_id={$category}";
	$result=mysqli_multi_query($conn,$sql);
	

	header("Location:http://localhost/practice-sunday-1/news-template0506/admin/post.php");

	


?>