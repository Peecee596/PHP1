<?php

// echo"<pre>";
// print_r($_SERVER);
// echo"</pre>";

// print_r($_SERVER['PHP_SELF']);
// echo"<br>";
// echo basename($_SERVER['PHP_SELF']);
$conn=mysqli_connect("localhost","root","","newsblog");
$page=basename($_SERVER['PHP_SELF']);

switch($page)
{
    case "single.php":
    if(isset($_GET['id']))
    {
        $sqltitle="SELECT * from post where post_id='{$_GET['id']}'";
        $resulttitle=mysqli_query($conn,$sqltitle);
        $rowtitle=mysqli_fetch_assoc($resulttitle);
        $pagetitle=$rowtitle['title'];
    }
    else{
        $pagetitle="No Post found";
    }
    break;
    case "category.php":
    if(isset($_GET['id']))
    {
        $sqltitle="SELECT * from category where category_id='{$_GET['id']}'";
        $resulttitle=mysqli_query($conn,$sqltitle);
        $rowtitle=mysqli_fetch_assoc($resulttitle);
        $pagetitle=$rowtitle['category_name'];
    }
    else{
        $pagetitle="No Post found";
    }
    break;
    case "author.php":
    if(isset($_GET['id']))
    {
        $sqltitle="SELECT * from user where user_id='{$_GET['id']}'";
        $resulttitle=mysqli_query($conn,$sqltitle);
        $rowtitle=mysqli_fetch_assoc($resulttitle);
        $pagetitle=$rowtitle['username'];
    }
    else{
        $pagetitle="No Post found";
    }
    break;
    case "search.php":
    if(isset($_GET['search']))
    {
        $pagetitle=$_GET['search'];
    }
    else{
        $pagetitle="No Post found";
    }
    break;
    default:
        $pagetitle="NewsBLOG";
    break;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $pagetitle;?></title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- HEADER -->
<div id="header">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- LOGO -->
            <?php
                $conn=mysqli_connect("localhost","root","","newsblog");
                
                $sql="SELECT * from settings";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0)
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        if($row['logo']=="")
                        {
                            echo'<a href="index.php"><h1>'.$row['websitename'].'</h1></a>';
                        }
                        else
                        {
                            echo'
                            <div class=" col-md-offset-4 col-md-4">
                            <a href="index.php" id="logo"><img src="./admin/images/'.$row['logo'].'"></a>
                            </div>';            
                        }

                    }
                }

                ?>


            <!-- <div class=" col-md-offset-4 col-md-4">
                <a href="index.php" id="logo"><img src="./admin/images/<?php echo $row['logo']?>"></a>
            </div>
             -->



            <!-- /LOGO -->
        </div>
    </div>
</div>
<!-- /HEADER -->
<!-- Menu Bar -->
<div id="menu-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- menubar Dynamic -->
                <?php
                $conn=mysqli_connect("localhost","root","","newsblog");
                $sql="SELECT * from category where post>0";
                $result=mysqli_query($conn,$sql) or die("Querry Failed");
                if(isset($_GET['id']))
                {
                    $catid=$_GET['id'];
                }
                
                $active="";
                if(mysqli_num_rows($result))
                {
                    
                ?>

                <ul class='menu'>
                    
                    <li ><a href='index.php'>Home</a></li>
                    
                    <?php
                    
                    while($row=mysqli_fetch_assoc($result))
                    {
                        if(isset($_GET['id']))
                        {

                        if($row['category_id']==$catid)
                        {
                            $active="active";
                        }
                        else
                        {
                            $active="";
                        }
                    }
                    ?>
                    


                    <li ><a class="<?php echo $active?>"href='category.php?id=<?php echo $row['category_id']?>'><?php echo $row['category_name']?></a></li>
                    <?php
                    
                    }
                    
                ?>
                </ul>

                <?php
                    }
                
                ?>
            </div>
        </div>
    </div>
</div>
<!-- /Menu Bar -->
