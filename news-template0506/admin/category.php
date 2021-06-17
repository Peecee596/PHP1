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
            <div class="col-md-10">
                <h1 class="admin-heading">All Categories</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="add-category.php">add category</a>
            </div>
            <div class="col-md-12">

                <?php
                    $conn=mysqli_connect("localhost","root","","newsblog");
                    if (isset($_GET['page'])) 
                    {
                        $page=$_GET['page'];    
                    }
                    else
                    {
                        $page=1;
                    }
                    $limit=3;
                    $offset=($page-1)*$limit;
                    $sql="SELECT * from category LIMIT {$offset},{$limit}";                    
                    $result=mysqli_query($conn,$sql)or die("Query failed");
                    if(mysqli_num_rows($result)>0)
                    {
                        
                ?>

                <table class="content-table">
                    <thead>
                        <th>S.No.</th>
                        <th>Category Name</th>
                        <th>No. of Posts</th>
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
                            <td class='id'><?php echo $serial?></td>
                            <td><?php echo $row['category_name']?></td>
                            <td><?php echo $row['post']?></td>
                            <td class='edit'><a href='update-category.php?id=<?php echo $row['category_id']?>'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete-category.php?id=<?php echo $row['category_id']?>'><i class='fa fa-trash-o'></i></a></td>
                        </tr>
            <?php
            $serial++;
                        }
            

                ?>                
                    </tbody>
                </table>
                <?php

                        }
            

                ?>

                <ul class='pagination admin-pagination'>
                    <?php
                    $conn=mysqli_connect("localhost","root","","newsblog");
                    $sql="SELECT * from category";
                    $result=mysqli_query($conn,$sql);
                    $limit=3;
                    $totalrecords=mysqli_num_rows($result);
                    $totalpages=ceil($totalrecords/$limit);
                    if($page>1)
                    {
                        echo'<li><a href="category.php?page='.($page-1).'">Prev</a></li>';
                    }
                    for($i=1;$i<=$totalpages;$i++)
                    {
                        echo'<li><a href="category.php?page='.$i.'">'.$i.'</a></li>';
                    }
                    if($page<$totalpages)
                    {
                        echo'<li><a href="category.php?page='.($page+1).'">Next</a></li>';
                    }


                    ?>

                    
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
