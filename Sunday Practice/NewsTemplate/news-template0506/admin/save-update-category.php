 <?php
 session_start();
if($_SESSION['userrole']==0)
{
  header("Location:http://localhost/practice-sunday-1/news-template0506/admin/post.php");
}
?>
              
 <?php               
                  $conn=mysqli_connect("localhost","root","","newsblog");
                  $categoryid=$_POST['cat_id'];
                  $categoryname=$_POST['cat_name'];
                  $sql1="SELECT category_name from category where category_name ='{$categoryname}'";
                  $result1=mysqli_query($conn,$sql1);
                  if(mysqli_num_rows($result1)>0)
                  {
                     echo"Category Name already exists";
                  }
                  else
                  {
                    $sql2="UPDATE category SET  category_name ='{$categoryname}'
                    where category_id={$categoryid}";
                   if(mysqli_query($conn,$sql2))                  
                   
                    {
                      header("Location:http://localhost/practice-sunday-1/news-template0506/admin/category.php");
                    }
                  }

                
             ?>