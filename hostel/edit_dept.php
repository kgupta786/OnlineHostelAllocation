<!DOCTYPE html>

<html>
<head>
    <link href="css/bootstrap.css" rel=" stylesheet">
</head>

<body>

<div class="container">

    <div class="row" style="min-height: 50px">

        <?php

        include "headeradmin.php";
        ?>
        </div>
            <div class="row"><h3 style="margin-left: 60%">View Departement</h3><br>

                <?php


               include "connection.php";

                $s="select * from dapartements where department='".$_GET["dept"]."'";

                $result=mysqli_query($conn,$s);

                $row=mysqli_fetch_array($result);

                ?>
                <form action="save_dept.php" method="post">
                    <div class="form-group">
                        Name of Departement
                        <input type="text" data-rule-required="true" readonly name="depart" value="<?php echo $row[0] ?>" class="form-control" >
                    </div>

                    <div class="form-group">
                     location of departement
                        <input type="text" data-rule-required="true" name="loc" value="<?php echo $row[1] ?>" class="form-control" >
                    </div>
                    <div class="form-group">
                         Description
                        <textarea type="text" data-rule-required="true" name="des"  class="form-control" >
<?php echo $row[2] ?>
                        </textarea></div>
                    <div class="form-group">
                        <div class="form-group">
                             Head of Departement
                            <input type="text" data-rule-required="true" name="hod" value="<?php echo $row[3] ?>" class="form-control" >
                        </div>


                        <div class="form-group">
                        <input type="submit" value="Save" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>



</body>


</html>