
<div class="container-fluid">

        <?php
        include "publicheader.html";

        ?>


        <div class="row"  style="padding-left: 400px;padding-right: 400px"> <br><h2 class="text-center text-success">Password Recovery Manager!!</h2>
            <br><form action="forwardpassstudent.php" method="post">
                <input type="text" placeholder="Enter the email-id." name="tbforgotemail" class="form-control"><br>
                <input type="submit" class="btn btn-primary" value="Send Me Code!!">


            </form>
        </div>

    </div>


<?php
include "publicfooter.php";