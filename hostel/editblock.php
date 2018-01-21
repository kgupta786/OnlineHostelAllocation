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

        $s="select * from block where blockname='".$_GET["dept"]."'";

        $result=mysqli_query($conn,$s);

        $row=mysqli_fetch_array($result);

        ?>
        <form action="saveblock.php" method="post">
            Enter the Blockname<input type="text" name="blockname1" readonly value="<?php echo $row[0] ?>" class="form-control" width="340px"><br>
            Select the Blocklocation<select class="form-control" value="<?php echo $row[1] ?>" name="location1"><option>East</option>
                <option>West</option>
                <option>North</option>
                <option>South</option></select><br>
            Select the Blocktype<select class="form-control" value="<?php echo $row[2] ?>" name="type1">
                <option>Girls</option>
                <option>Boys</option>
            </select><br>
            <input type="submit" value="Update Block" class="btn btn-primary">
        </form>
    </div>
</div>




</body>



</html>