<div id ="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                $conn=mysqli_connect("localhost","root","","newsblog");
                
                $sql="SELECT * from settings";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0)
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        if($row['footerdesc']=="")
                        {
                            echo $row['websitename'];
                        }
                        else
                        {
                            echo'
                            <span>
                            '.$row['footerdesc'].'
                            </span>';            
                        }

                    }
                }

                ?>

                <!-- <span>© Copyright 2019 News | Powered by <a href="http://www.yahoobaba.net/">Yahoo Baba</a></span> -->
            </div>
        </div>
    </div>
</div>
</body>
</html>
