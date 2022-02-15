<?php include "header.php";
?>
<?php
  if($_SESSION['user_role']==0)
  {
    header("Location:http://localhost/learnphp/news-template/admin/post.php");
  }

?>
<?php
if(isset($_POST['save']))
{
  $category=$_POST['cat'];
  $conn=mysqli_connect("localhost","root","","newsblog") or die("Query Failed");
  $sql="SELECT category_name from category where category_name='{$category}'";
  $result=mysqli_query($conn,$sql) or die("Query failed");
  // if(mysqli_query($conn,$sql))
  // {
  //   header("Location:http://localhost/learnphp/news-template/admin/category.php");
  // }
if(mysqli_num_rows($result)>0)
{
  echo "<b><div align='center' class= 'alert alert-danger'>Category already Exists </div></b>";
}
 else
 {

  $sql1="insert into category
  (category_name) values ('{$category}')";
 
  if(mysqli_query($conn,$sql1))
  {
    header("Location:http://localhost/learnphp/news-template/admin/category.php");
  }

 }
}

?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add New Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat" class="form-control" placeholder="Category Name" required>
                      </div>
                      <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                  </form>
                  <!-- /Form End -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
