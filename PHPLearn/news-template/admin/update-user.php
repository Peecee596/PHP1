<?php include "header.php"; ?>
<?php
  if($_SESSION['user_role']==0)
  {
    header("Location:http://localhost/learnphp/news-template/admin/post.php");
  }

?>

<?php 
if(isset($_POST['submit']))
{

$conn=mysqli_connect("localhost","root","","newsblog");
$userid=mysqli_real_escape_string($conn,$_POST['user_id']);
$first_name=mysqli_real_escape_string($conn,$_POST['f_name']);
$last_name=mysqli_real_escape_string($conn,$_POST['l_name']);
$username=mysqli_real_escape_string($conn,$_POST['username']);
$role=mysqli_real_escape_string($conn,$_POST['role']);

$sql1="
  UPDATE user set first_name='{$first_name}',
  last_name='{$last_name}',
  username='{$username}',
  role='{$role}'
  where user_id='{$userid}'";

if(mysqli_query($conn,$sql1))
{
  header("Location:http://localhost/learnphp/news-template/admin/users.php");
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

                <?php
                $conn=mysqli_connect("localhost","root","","newsblog");
                $userid=$_GET['id'];
                $sql="SELECT * from user where user_id='{$userid}'";
                //$sql = "SELECT * FROM user WHERE user_id = '{$userid}'";

                $result=mysqli_query($conn,$sql) or die("Querry failed");
                if(mysqli_num_rows($result)>0)
                {
                  while($row=mysqli_fetch_assoc($result))
                {
        


              ?> 


                  <!-- Form Start -->
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
                          <select class="form-control" name="role" value="<?php echo $row['role']; ?>">
                            <?php
                              if($row['role']==0)
                              {
                                echo"<option value='0' selected>Normal</option>
                                  <option value='1'>Admin</option>";
                              }
                              else
                              {
                                echo"<option value='0'>Normal</option>
                                  <option value='1' selected>Admin</option>";
                              }


                            ?>


                             </select>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>                 
                  <!-- /Form -->
              
<?php

 }
                }


?>


              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
