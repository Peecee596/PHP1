<?php include "header.php"; ?>
<?php


if($_SESSION['userrole']==0)
{
  header("Location:http://localhost/practice-sunday-1/news-template0506/admin/post.php");
}
?>

  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Users</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-user.php">add user</a>
              </div>
              <div class="col-md-12">
                  
<?php

  $conn=mysqli_connect("localhost","root","","newsblog") or die("Connection Failed");
  if(isset($_GET['page']))
  {
    $page=$_GET['page'];
  }
  else
  {
    $page=1;
  }
  $limit=3;
  $offset=($page-1)*$limit;
  $sql="SELECT * from USER  LIMIT {$offset},{$limit}";
  
  $result=mysqli_query($conn,$sql) or die("Query Failed");
  
  if(mysqli_num_rows($result)>0)
  {
?>
      <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Full Name</th>
                          <th>User Name</th>
                          <th>Role</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                   
    <?php
  
    $serial=$offset+1;  
    while($row=mysqli_fetch_assoc($result))
    {

?>


                   <tbody>
                          <tr>
                              <td class='id'><?php echo $serial;?></td>
                              <td><?php echo $row['first_name']." ".$row['last_name']?></td>
                              <td><?php echo $row['username']?></td>
                              <td><?php 

                            if($row['role']==0)
                              {
                                echo"normal";
                              }
                              else
                              {
                                echo"admin";
                              }

                              ?>
                                


                              </td>
                              <td class='edit'><a href='update-user.php?id=<?php echo $row['user_id']?>'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-user.php?id=<?php echo $row['user_id']?>'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                      </tbody>
                  
      <?php

      $serial++;
    }
    
    }
      
  
  ?>
  </table>
                  <ul class='pagination admin-pagination'>
                    <?php
                    $sql1="SELECT * from user";
                    $result1=mysqli_query($conn,$sql1) or die("Query Failed");
                    
                    $totalrecords=mysqli_num_rows($result1);
                    $totalpages=ceil($totalrecords/$limit);
                     
                      if($page>1)
                      {
                        echo'<li><a href="users.php?page='.($page-1).'"($page-1)>Prev</a></li>';
                      }
                      
                       for($i=1;$i<=$totalpages;$i++)
                        {
                          echo'<li><a href="users.php?page='.$i.'">'.$i.'</a></li>';
                          
                        } 
                         if($page<$totalpages){
                        echo'<li><a href="users.php?page='.($page+1).'">Next</a></li>';
                      }


                    ?>



                  </ul>
              </div>
          </div>
      </div>
  </div>
<?php include "header.php"; ?>
