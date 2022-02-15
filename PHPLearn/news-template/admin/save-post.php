<?php

	$conn=mysqli_connect("localhost","root","","newsblog") or die("Connection failed");
	
	if(isset($_FILES['fileToUpload']))
	{
		$errors=[];
		$file_name=$_FILES['fileToUpload']['name'];
		$file_size=$_FILES['fileToUpload']['size'];
		$file_tmp=$_FILES['fileToUpload']['tmp_name'];
		$file_type=$_FILES['fileToUpload']['type'];
		$file_ext=strtolower(end(explode('.',$file_name)));
		$extensions=['jpeg','jpg','png'];

		if(in_array($file_ext,$extensions)==false)
		{
			$errors[]="This extension not allowed";
		}
		if($file_size>2097152)
		{
			$errors[]="File must be less than 2 MB";
		}

		if(empty($errors==true))
		{
			move_uploaded_file($file_tmp,"upload/".$file_name);
		}
		else
		{
			print_r($errors);
			die();
		}

	}

	session_start();
	$title=$_POST['post_title'];
	$desc=$_POST['postdesc'];
	$category=$_POST['category'];
	$date=date("d,M, Y");
	$author=$_SESSION['user_id'];	
	


	$sql="INSERT into post values 
	(null,'{$title}','{$desc}','{$category}','{$date}','{$author}','{$file_name}');";
	$sql .="UPDATE category SET post= post + 1 where category_id='{$category}'";
	if(mysqli_multi_query($conn,$sql))
	{
		header("Location:http://localhost/learnphp/news-template/admin/post.php");
	}


?>