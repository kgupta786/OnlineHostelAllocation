<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php
include "connection.php"
?>
<div class="container">
    <div class="row" style="min-height: 50px">
        <?php

        include "headeradmin.php";


        ?>
    </div>
    <div class="row form-group" >
        <?php


        include "connection.php";

        $s="select * from rooms where roomno='".$_GET["dept"]."'";

        $result=mysqli_query($conn,$s);

        $row=mysqli_fetch_array($result);

        ?>
        <form action="saveroom.php" method="post">
            Select the Block-Name<select name="blockname" readonly="" value="<?php echo $row[1]  ?>" class="form-control">
                <option>A</option>
            </select><br>
            Enter the room no.<input type="text" readonly name="no" value="<?php echo $row[0]  ?>" width="340px" class="form-control"><br>
            Select the Room-Capacity<select name="capacity" value="<?php echo $row[2]  ?>" class="form-control">
                <option>1-seater</option>
                <option>2-seater</option>
                <option>3-seater</option>
                <option>4-seater</option>
                <option>5-seater</option>
                <option>6-seater</option>
            </select><br>
            Select the Room-Location<select value="<?php echo $row[5]  ?>" name="location" class="form-control">
                <option>1st Floor</option>
                <option>2nd Floor</option>
                <option>3rd Floor</option>
                <option>4th Floor</option>
                <option>5th Floor</option>
                <option>6th Floor</option>
            </select><br>

            Select the Room-Type<select name="type" value="<?php echo $row[3]  ?>" class="form-control">
                <option>A.C.</option>
                <option>Non A.C.</option>
            </select><br>
            Room-Description<textarea name="description" class="form-control"><?php echo $row[4]  ?></textarea>


            <br><input type="submit" value="Update Room" class="btn btn-success">
        </form>
    </div>
</div>




</body>



</html>