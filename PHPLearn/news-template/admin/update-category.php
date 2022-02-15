<?php include "header.php"; ?>
<?php
  if($_SESSION['user_role']==0)
  {
    header("Location:http://localhost/learnphp/news-template/admin/post.php");
  }

?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  

<?php

$conn=mysqli_connect("localhost","root","","newsblog") or die("Connecton Failed");
$categoryid=$_GET['id'];
$sql="SELECT * from category where category_id='{$categoryid}'";
$result=mysqli_query($conn,$sql) or die("Querry Failed");
if(mysqli_num_rows($result))
{
  while($row=mysqli_fetch_assoc($result))
  {

?>
                  <form action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="cat_id"  class="form-control" value="<?php echo $row['category_id']?>" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat_name" class="form-control" value="<?php echo $row['category_name']?>"  placeholder="" required>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
<?php

  }
}
?>


                </div>
              </div>
            </div>
          </div>


<?php

if(isset($_POST['submit']))
{
  
  $categoryname=$_POST['cat_name'];
  $categoryid=$_POST['cat_id'];

    $sql1 = "UPDATE category SET
    category_name='{$categoryname}' 
    WHERE category_id={$categoryid}";

 

  if(mysqli_query($conn,$sql1))
  {
    header("Location:http://localhost/learnphp/news-template/admin/category.php");
  }
}

?>

<?php include "footer.php"; ?>
