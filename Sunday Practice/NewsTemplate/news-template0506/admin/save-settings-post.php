<!-- <?php
$conn=mysqli_connect("localhost","root","","newsblog");

if(empty($_FILES['new_image']['name']))
{
	$file_name=$_POST['old_image'];
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
	if(empty($errors)==true)
	{
		move_uploaded_file($file_tmp,"images/".$file_name);
		//move_uploaded_file($file_tmp,"upload/".$file_name);
	}
	else
	{
		print_r($errors);
		die();
	}
}


$settingsid=$_POST['settingsid'];
$settingsname=$_POST['settingsname'];
$settingsfooter=$_POST['settingsfooter'];

	echo  $sql="UPDATE settings SET websitename='{$settingsname}',
	 		 	logo='{$file_name}',
	 		 	footerdesc='{$settingsfooter}'";
		
	$result=mysqli_multi_query($conn,$sql);

	if($result)
	{
		header("Location:http://localhost/practice-sunday-1/news-template0506/admin/settings.php");
	}
	else
	{
		echo"QF";
	}



?> -->