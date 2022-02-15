<?php include "header.php"; ?>
<div id="admin-content">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
        <h1 class="admin-heading">Website Settings</h1>
    </div>
    <div class="col-md-offset-3 col-md-6">

        <?php
        $conn=mysqli_connect("localhost","root","","newsblog");
        
        $sql="SELECT * from settings";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {

        ?>


        <!-- Form for show edit-->
        <form action="save-settings-post.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
                <input type="hidden" name="settingsid"  class="form-control" value="<?php echo $row['id']?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputTile">Website Name</label>
                <input type="text" name="settingsname"  class="form-control" id="exampleInputUsername" value="<?php echo $row['websitename']?>">
            </div>
           
            <div class="form-group">

                <label for="">Website Logo</label>
                <input type="file" name="new_image">
                <img src="./images/<?php echo $row['logo']?>" height="90px"/>
                <?php echo $row['logo']?>
                <input type="hidden" name="old_image" value="<?php echo $row['logo']?>">
            </div>
            
             <div class="form-group">
                <label for="exampleInputPassword1"> Footer Description</label>
                <textarea name="settingsfooter" class="form-control"  required rows="5">
                    <?php echo $row['footerdesc']?>
                </textarea>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Save" />
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
