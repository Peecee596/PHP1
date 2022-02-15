<?php include 'header.php'; ?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>

<?php

if(isset($_POST['deletebtn']))
{
	$student_id=$_POST['sid'];
	$conn=mysqli_connect("localhost","root","","crud") or die("Connection Failed");
	$sql="Delete from students where sid ='{$student_id}'";
	$result=mysqli_query($conn,$sql) or die("Query Failed");

	header("Location:http://localhost/Practice-Sunday-1/crud");
}

?>



</div>
</div>
</body>
</html>
