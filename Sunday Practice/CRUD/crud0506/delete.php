<?php include 'header.php'; ?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>


    <?php
    if(isset($_POST['deletebtn']))
    {
        $studentid=$_POST['sid'];
        $conn=mysqli_connect("localhost","root","","crud");
        $sql="DELETE from students where sid ='{$studentid}'";
        $result=mysqli_query($conn,$sql);
        header("location:http://localhost/practice-sunday-1/crud0506/index.php");
    }



    ?>
</div>
</div>
</body>
</html>
