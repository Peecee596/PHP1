<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
<?php

$conn=mysqli_connect("localhost","root","","crud");
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
$sql="SELECT * from students join studentsclass on students.sclass=studentsclass.cid LIMIT {$offset},{$limit}";
$result=mysqli_query($conn,$sql) or die("Query Failed");
if(mysqli_num_rows($result)>0)
{
    
?>

    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
       

<?php            
    }
    
?>

<?php

while($row=mysqli_fetch_assoc($result))
    {


?>

        <tbody>
            <tr>
                <td><?php echo $row['sid']?></td>
                <td><?php echo $row['sname']?></td>
                <td><?php echo $row['saddress']?></td>
                <td><?php echo $row['cname']?></td>
                <td><?php echo $row['sphone']?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid']?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['sid']?>'>Delete</a>
                </td>
            </tr>
<?php          

    }
    
?>
    </tbody>
    </table>


<ul class="pagination"align="center">

    <?php

    $sql1="SELECT * from students";
    $limit=3;
    $result1=mysqli_query($conn,$sql1);
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

        echo '<li class="'.$active.'"><a href="index.php?page='.$i.'">'.$i.'</a></li>';
    }

    ?>


</ul>
</div>

</div>
</body>
</html>
