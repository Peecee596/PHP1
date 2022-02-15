<?php include "header.php"; ?>

<div id="admin-content">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
        <h1 class="admin-heading">Update Post</h1>
    </div>
    <div class="col-md-offset-3 col-md-6">
        <!-- Form for show edit-->
        <?php
            $id=$_GET['id'];
            $conn=mysqli_connect("localhost","root","","newsblog") or die("Connection Failed");
            $sql1="SELECT * from post 
                    LEFT JOIN category on post.category = category.category_id
            where post_id='{$id}'";
            $result1=mysqli_query($conn,$sql1) or die("Query Failed");
            if(mysqli_num_rows($result1)>0)
            {
                while($row1=mysqli_fetch_assoc($result1))
                {
        ?>

        <form action="save-update-post.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
                <input type="hidden" name="post_id"  class="form-control" value="<?php echo $row1['post_id']?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputTile">Title</label>
                <input type="text" name="post_title"  class="form-control" id="exampleInputUsername" value="<?php echo $row1['title']?>">
            </div>
            
            
            <div class="form-group">
                <label for="exampleInputPassword1"> Description</label>
                <textarea name="postdesc" class="form-control"  required rows="5">
                    <?php echo $row1['description']?></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputCategory">Category</label>
                <select class="form-control" name="category">
                    <?php

                    $sql="SELECT * from category";
                    $result=mysqli_query($conn,$sql) or die("Query FAiled");
                    if(mysqli_num_rows($result)>0)
                    {

                        while($row=mysqli_fetch_assoc($result))
                        {

                            if($row['category_id']==$row1['category'])
                            {
                                $select="selected";
                            }
                            else
                            {
                                $select="";
                            }


                    ?>


                    <option <?php echo $select;?> value="<?php echo $row['category_id']?>"><?php echo $row['category_name']?></option>
                    
                    <?php


                        }
                    }

                    ?>
                </select>
                <input type="hidden" name="old_category" value="<?php echo $row['category']?>">
            </div>
            <div class="form-group">
                <label for="">Post image</label>
                <input type="file" name="new_image">
                <?php echo $row1['post_img']?>
                <img  src="upload/<?php echo $row1['post_img']?>" height="150px">
                <input type="hidden" name="old_image" value="<?php echo $row1['post_img']?>">
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Update" />
        </form>
        <!-- Form End -->
        <?php

                }
            }

        ?>

      </div>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>
