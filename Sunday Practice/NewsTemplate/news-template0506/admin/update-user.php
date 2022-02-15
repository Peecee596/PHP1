<?php include "header.php"; ?>
<?php

if($_SESSION['userrole']==0)
{
    header("location:http://localhost/practice-sunday-1/news-template0506/admin/post.php");
}

?>


<?php

  if(isset($_POST['submit']))
  {
    $userid=$_POST['user_id'];
    $firstname=$_POST['f_name'];
    $lastname=$_POST['l_name'];
    $username=$_POST['username'];
    $userrole=$_POST['role'];

    
    $sql1="UPDATE user SET first_name='{$firstname}',last_name='{$lastname}',username='{$username}',role='{userrole}' where user_id='{$userid}'";
    if(mysqli_query($conn,$sql1))
    {
      header("http://localhost/practice-sundays/NewsTemplate/news-template0506/admin/users.php");
    }
  }

?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Modify User Details</h1>
              </div>
              <div class="col-md-offset-4 col-md-4">
                  <!-- Form Start -->

                  <?php

                  $conn=mysqli_connect("localhost","root","","newsblog");
                  $user_id=$_GET['id'];
                  $sql="SELECT * from USER where user_id={$user_id}";
                  $result=mysqli_query($conn,$sql);
                  if(mysqli_num_rows($result))
                  {
                    while($row=mysqli_fetch_assoc($result))
                    {

                  ?>
                  <form  action="<?php echo $_SERVER['PHP_SELF']?>" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="user_id"  class="form-control" value="<?php echo $row['user_id']?>" placeholder="" >
                      </div>
                          <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="f_name" class="form-control" value="<?php echo $row['first_name']?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="l_name" class="form-control" value="<?php echo $row['last_name']?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="username" class="form-control" value="<?php echo $row['username']?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" value="<?php echo $row['role']?>">

                            <?php

                                                     
                              if($row['role'] == 0)
                              {
                                echo "<option value='0'selected>Normal</option>
                                <option value='1'>Admin</option>
                                ";
                              }
                              else
                              {
                                echo "<option value='0'>Normal</option>
                                <option value='1'selected>Admin</option>";
                              }

                                                       
                            ?>
                          </select>
                      </div>

                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
                  <?php

                    }
                  }

                  ?>

                  <!-- /Form -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
