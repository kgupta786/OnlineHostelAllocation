
<?php
include "publicheader.html";

?>

<div class="container-fluid">

    <div class="row"  style="padding-left: 400px;padding-right: 400px">

            <br><h1 class="text-success text-center">Student login form</h1><br>
            <form action="checkstudent_login.php" method="post">
                <input type="text" placeholder="Enter the roll no." name="tbloginroll" class="form-control"><br>
                <input type="text" placeholder="Enter the email-id." name="tbloginemail" class="form-control"><br>
                <input type="password" placeholder="Enter the password." name="tbloginpass" class="form-control"><br>

<a href="forgotpassstudent.php"><span style="margin-left: 80%">Forgot Password!!</span></a><br>
                <input type="submit" class="btn btn-success" value="Login">


            </form>
        </div>

    </div>






<?php
include "publicfooter.php";

?>
