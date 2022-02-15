<?php include 'header.php'; ?>
    <div id="main-content">
      <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- post-container -->
                <div class="post-container">

                    <?php
                     $conn=mysqli_connect("localhost","root","","newsblog");
                     $searchterm=$_GET['search'];
   
                     ?>

                  <h2 class="page-heading">Search:<?php echo $searchterm;?></h2>

                  
                  <?php

                        
                     


                  $searchterm=$_GET['search'];

                    $conn=mysqli_connect("localhost","root","","newsblog");

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
                    $sql="SELECT * FROM post
                    LEFT join user on post.author=user.user_id
                    LEFT join category on post.category=category.category_id
                    where post.title LIKE '%{$searchterm}%' or post.description LIKE '%{$searchterm}%'
                    LIMIT {$offset},{$limit}";

                    $result=mysqli_query($conn,$sql) or die("Query Failed");
                    if(mysqli_num_rows($result)>0)
                    {
                        while($row=mysqli_fetch_assoc($result))
                        {

                    ?>

                    <div class="post-content">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="post-img" href="single.php?id=<?php echo $row['post_id']?>"><img src="admin/upload/<?php echo $row['post_img']?>" alt=""/></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="inner-content clearfix">
                                        <h3><a href='single.php?id=<?php echo $row['post_id']?>'><?php echo $row['title']?></a></h3>
                                        <div class="post-information">
                                            <span>
                                                <i class="fa fa-tags" aria-hidden="true"></i>
                                                <a href='category.php?id=<?php echo $row['category']?>'><?php echo $row['category_name']?></a>
                                            </span>
                                            <span>
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <a href='author.php?id=<?php echo $row['user_id']?>'><?php echo $row['username']?>
                                           </a>
                                            </span>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <?php echo $row['post_date']?>
                                            </span>
                                        </div>
                                        <p class="description">
                                            <?php echo substr($row['description'],0,130).'...'?>
                                        </p>
                                        <a class='read-more pull-right' href='single.php?id=<?php echo $row['post_id']?>'>read more</a>
                                </div>
                            </div>
                        </div>

                    </div>

                   <?php
                    
                        }
                    }
                    else{
                        echo"<div class='alert alert-danger'>No records found----Try Again</div>";
                    }
                    ?> 
                    <ul class='pagination'>
                        <?php
                            $sql1="SELECT * from post 
                            where title LIKE'%{$searchterm}%' or description LIKE '%{$searchterm}%'";
                            $result1=mysqli_query($conn,$sql1);
                            $limit=3;
                            $totalrecords=mysqli_num_rows($result1);
                            $totalpages=ceil($totalrecords/$limit);


                            for($i=1;$i<=$totalpages;$i++)
                                
                            {
                                if($i==$page)
                                {
                                    $active="active";
                                }
                                else
                                {
                                    $active="";
                                }



                                echo '<li class="'.$active.'"><a href="search.php?search='.$searchterm.'&page='.$i.'">'.$i.'</a></li>';
                            }

                            ?>



                            <!-- <li class="active"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li> -->
                        </ul>
                  
                </div><!-- /post-container -->
            </div>
            <?php include 'sidebar.php'; ?>
        </div>
      </div>
    </div>
<?php include 'footer.php'; ?>
