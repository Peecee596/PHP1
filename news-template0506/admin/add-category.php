<?php include "header.php"; ?>
<?php
session_start();
if($_SESSION['userrole']==0)
{
  header("Location:http://localhost/practice-sunday-1/news-template0506/admin/post.php");
}
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add New Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                <?php
                if(isset($_POST['save']))
                {
                $conn=mysqli_connect("localhost","root","","newsblog");
                $categoryname=$_POST['cat'];
                $sql="SELECT category_name from category where category_name ='{$categoryname}'";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0)
                {
                  echo"Username already exists";
                }
                else
                {
                  $sql1="INSERT into category (category_id,category_name) values(null,'{$categoryname}')";
                  if(mysqli_query($conn,$sql1))
                  {
                    header("Location:http://localhost/practice-sunday-1/news-template0506/admin/category.php");
                  }
                }
              }

                ?>
                  <!-- Form Start -->
                  <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" autocomplete="off">
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
