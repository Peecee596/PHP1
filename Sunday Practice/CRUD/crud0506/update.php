<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" value="" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php
    if(isset($_POST['showbtn']))
    {
        $conn=mysqli_connect("localhost","root","","crud");
        $studentid=$_POST['sid'];

        $sql="SELECT * from students where sid='{$studentid}'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {



    ?>


    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="<?php echo $row['sid']?>" />
            <input type="text" name="sname" value="<?php echo $row['sname']?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row['saddress']?>" />
        </div>
        <div class="form-group">
        <label>Class</label>
        <select name="sclass">
            <!-- <option value="" selected disabled>Select Class</option> -->
            
            <?php
            $sql1="SELECT * from studentsclass";
            $result1=mysqli_query($conn,$sql1);
            if(mysqli_num_rows($result1))
            {
                while($row1=mysqli_fetch_assoc($result1))
                {
                    if($row1['cid']==$row['sclass'])
                    {
                        $select="selected";
                    }
                    else
                    {
                        $select="";
                    }

            ?>    

            <option <?php echo $select;?> value="<?php echo $row1['cid']?>"><?php echo $row1['cname']?></option>
            
        <?php

        }
            }



            


        ?>
        </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $row['sphone']?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>

    <?php
            }
            }
        }

    ?>
</div>
</div>
</body>
</html>
