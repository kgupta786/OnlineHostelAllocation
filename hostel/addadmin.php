

<?php
 include "headeradmin.php";
?>
<div class="container-fluid">
        <div class="row" style="padding-left: 400px;padding-right: 400px">
            <h2 class="text-center text-success">Add Admin</h2><br>
                <form action="insert_admin.php" method="post">

                    <div class="form-group">
                        Enter Name
                        <input type="text" data-rule-required="true" name="textbox1" class="form-control" >
                    </div>

                    <div class="form-group">
                        Enter Email-id
                        <input type="text" data-rule-required="true" name="textbox2" class="form-control" >
                    </div>
                    <div class="form-group">
                        Enter Mobile-No.
                        <input type="text" data-rule-required="true" name="textbox3" class="form-control" >
                    </div>
                    <div class="form-group">
                        Enter Password
                        <input type="password" data-rule-required="true" name="textbox4" class="form-control" >
                    </div>

                    <div class="form-group">
                        Confirm Password
                        <input type="password" data-rule-required="true" name="textbox5" class="form-control" >
                    </div>
                    <input type="submit" class="btn btn-success" value="Sign-up"><br>



                </form>

        </div>
    </div>




<?php

include "publicfooter.php";
?>