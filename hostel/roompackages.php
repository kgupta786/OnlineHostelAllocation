<?php

include "headeradmin.php";
?>
<div class="container">





    <div class="row" style="padding-left: 400px;padding-right: 400px">
        <form action="insertpackage.php" method="post"><br>
            <h1 class="text-center text-success">Room Packages!!</h1><br><br>
         Select the sharing type:<select name="ddltype" class="form-control" >
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
            </select><br>
            Enter the room description:
            <textarea class="form-control" name="des" ></textarea><br>
Enter the price:<input type="text" name="price" class="form-control"><br>
            <input type="submit" value="Add package!!" class="btn btn-primary">


        </form>

    </div>
</div>
<?php

include "publicfooter.php";
?>