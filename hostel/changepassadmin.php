<?php

include "headeradmin.php";
?><br>
<div class="container-fluid">


        <div class="row">
            <h3>Change my password!!</h3><br>
                <form action="updateoldpassadmin.php" method="post">

                    <div class="form-group">
                        <div class="form-group">
                            Enter old  Password
                            <input type="password" data-rule-required="true" name="tbold" class="form-control" >
                        </div>
                        <div class="form-group">
                            Enter New Password
                            <input type="password" data-rule-required="true" name="tbnew" class="form-control" >
                        </div>

                        <div class="form-group">
                            Confirm Password
                            <input type="password" data-rule-required="true" name="tbconfirm" class="form-control" >
                        </div>
                        <input type="submit" class="btn btn-success" value="Update ">



                </form>
            </div>
        </div>
<?php
include "publicfooter.php";