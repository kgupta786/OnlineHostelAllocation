<?php
session_start();
if(!isset($_SESSION["email"]))
{
    header("location:adminmain.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel=" stylesheet">
</head>

<body>
<div class="container-fluid">
    <?php

    include "headeradmintop.html";
    ?>

    <div class="row" style="min-height: 500px;border: groove">
        <?php

        include "headeradmin.php";
        ?>
        <div class="col-sm-9">
            <div class="col-sm-6"><h3>Update My Account!!</h3><br>
                <?php

                include "connection.php";
                $s="select * from admins where email='".$_GET["dept"]."'";

                $result=mysqli_query($conn,$s);

                $row=mysqli_fetch_array($result);


                ?>
                <form action="save_admin.php" method="post">
                    <div class="form-group">

                        <div class="form-group">
                            Enter Name
                            <input type="text" data-rule-required="true" name="tbeditname" value="<?php

                            echo $row[0];
                            ?>" class="form-control" >
                        </div>

                        <div class="form-group">
                            Enter Email-id
                            <input type="text" data-rule-required="true" value="<?php

                            echo $row[1];
                            ?>" name="tbeditemail" class="form-control" >
                        </div>
                        <div class="form-group">
                            Enter Mobile-No.
                            <input type="text" data-rule-required="true" value="<?php

                            echo $row[2];
                            ?>" name="tbeditmobile" class="form-control" >
                        </div>

                        <input type="submit" class="btn btn-success" value="Update My Account!!">

                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    include "footeradminbottom.html";
    ?>


</div>

</body>


</html>