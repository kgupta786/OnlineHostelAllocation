
<div class="container-fluid">


    <div class="row" style="min-height: 50px">
        <?php

        include "publicheader.html";

        ?> </div><div class="row form-group" style="padding-left: 400px;padding-right: 400px"><br>
            <form action="checkadminlogin.php" method="post">
                <h2 class="text-success text-center">Login Required!!</h2><br>
                <input type="text" name="lemail" style="width: 400px;margin-left: 25%" class="form-control" placeholder="enter the email-id"><br>
                <input type="password" name="lpass" class="form-control"  style="
                width:400px;margin-left: 25%"  placeholder="enter the passsword"><br>
                <input type="text" name="lmobile" style="width: 400px;margin-left: 25%" class="form-control" placeholder="enter the Mobile No."><br>
                
                <input type="submit"  style="margin-left: 44%;width:100px" value="log-in" class="btn btn-success"><br>

            </form>
        </div>

    </div>
<?php
include "publicfooter.php";
?>