<?php include 'header.php'; ?>

<?php


if(isset($_POST['deletebtn']))

{
    $conn=mysqli_connect("localhost","root","","crud");
    $id=$_POST['sid'];
    $sql="DELETE from students where sid='{$id}'";
    if(mysqli_query($conn,$sql))
    {
        header("Location:http://localhost/practice-sunday-1/crud02");
    }
}
?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
,