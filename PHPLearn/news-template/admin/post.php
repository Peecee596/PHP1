<?php include "header.php"; ?>

  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Posts</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-post.php">add post</a>
              </div>
              <div class="col-md-12">
<?php
$conn=mysqli_connect("localhost","root","","newsblog") or die("Connection Failed");

//echo $_GET['page'];
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
  if($_SESSION['user_role']==1)
  {
    $sql="SELECT * FROM post 
      LEFT JOIN category on post.category = category.category_id
      LEFT JOIN user on user.user_id = post.author 
      LIMIT {$offset},{$limit}
     ";
  }
  elseif($_SESSION['user_role']==0)
  {
    $sql="SELECT * FROM post 
      LEFT JOIN category on post.category = category.category_id
      LEFT JOIN user on user.user_id = post.author 
      where post.author={$_SESSION['user_id']}

      ORDER BY post_id desc
      LIMIT {$offset},{$limit}
     ";
  }

   
$result=mysqli_query($conn,$sql) or die("Query Failed");
if(mysqli_num_rows($result)>0)
{

?>

                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Date</th>
                          <th>Author</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
<?php

while($row=mysqli_fetch_assoc($result))
 {

?>

                      <tbody>
                          <tr>
                              <td class='id'><?php echo $row['post_id']?></td>
                              <td><?php echo $row['title']?></td>
                              <td><?php echo $row['category_name']?></td>
                              <td><?php echo $row['post_date']?></td>
                              <td><?php echo $row['username']?></td>
                              <td class='edit'><a href='update-post.php?id=<?php echo $row['post_id']?>'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-post.php?id=<?php echo $row['post_id']?>'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                      </tbody>
<?php
  }
?>

                  </table>
<?php
  }
?>

                  <ul class='pagination admin-pagination'>
                      <!-- <li class="active"> -->

                      <?php
                        $sql1="SELECT * from post";
                        $result1=mysqli_query($conn,$sql1) or die("Query Failed");
                        if(mysqli_num_rows($result1)>0)
                        {
                          $totalrecords=mysqli_num_rows($result1);
                          //$limit=3;
                          $totalpages=ceil($totalrecords/$limit);

                          for($i=1;$i<=$totalpages;$i++)
                          {
                            echo "<li><a href='post.php?page=$i'>$i</a></li>"; 

                          }


                        }


                      ?>
                      
                    </ul>
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
