<?php include "header.php"; ?>
<?php

if($_SESSION['userrole']==0)
{
    header("location:http://localhost/practice-sunday-1/news-template0506/admin/post.php");
}

?>

  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Category</h1>
              </div>

                           <div class="col-md-offset-3 col-md-6">
               <form action="save-update-category.php" method ="POST">
                <?php
                $conn=mysqli_connect("localhost","root","","newsblog");
                $categoryid=$_GET['id'];
                 $sql="SELECT * from category where category_id={$categoryid}";
                 $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0)
                {
                  while($row=mysqli_fetch_assoc($result))
                  {
                ?>


 
                      <div class="form-group">
                          <input type="hidden" name="cat_id"  class="form-control" value="<?php echo $row['category_id']?>" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat_name" class="form-control" value="<?php echo $row['category_name']?>"  placeholder="" required>
                      </div>
                      <input type="submit" name="sumbit" class="btn btn-primary" value="Update" required />
                  
                  <?php
                   }
                }
                  ?>
                  </form>
                </div>
              </div>
            </div>
          </div>
<?php include "footer.php"; ?>
