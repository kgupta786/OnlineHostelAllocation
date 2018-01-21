<?php

include "headeradmin.php";


?>
<?php
include "connection.php"
    ?>
<div class="container-fluid">



<div class="row form-group" style="padding-left: 400px;padding-right: 400px" >
    <h1 class="text-center text-success">Add New Blocks!!</h1>
    <form action="insertblock.php" method="post">
    Enter the Blockname<input type="text" name="blockname" class="form-control" width="340px"><br>
    Select the Blocklocation<select class="form-control" name="location"><option>East</option>
        <option>West</option>
        <option>North</option>
        <option>South</option></select><br>
    Select the Blocktype<select class="form-control" name="type">
        <option>Male</option>
        <option>Female</option>
    </select><br>
    <input type="submit" value="Add Block" class="btn btn">
    </form>
</div>
</div>


<?php
include "publicfooter.php";
?>