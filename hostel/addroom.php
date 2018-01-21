
        <?php

        include "headeradmin.php";


        ?>
<div class="container-fluid">
    <div class="row " style="padding-left: 400px;padding-right: 400px" ><br>
        <h1 class="text-center text-success">Add New Rooms!!</h1><br>
        <form action="insertroom.php" method="post">
           Select the Block-Name <select name="blockname" class="form-control">
                <option value="">--- Select ---</option>
                <?php
                include "connection.php";
                $list="select * from block";
                $result = mysqli_query($conn,$list);
                while($row_list=mysqli_fetch_array($result)){
                    ?>
                    <option>
                        <?php echo $row_list[0]; ?>
                    </option>
                    <?php
                }
                ?>
            </select><br>
            Enter the room no.<input type="text" name="no" width="340px" class="form-control"><br>
            Select the Room-Capacity<select name="capacity" class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
            </select><br>
            Select the Room-Location<select name="location" class="form-control">
                <option>1st Floor</option>
                <option>2nd Floor</option>
                <option>3rd Floor</option>
                <option>4th Floor</option>
                <option>5th Floor</option>
                <option>6th Floor</option>
            </select><br>

            Select the Room-Type<select name="type" class="form-control">
                <option>A.C.</option>
                <option>Non A.C.</option>
                </select><br>
            Room-Description<textarea name="description" class="form-control"></textarea>


            <br><input type="submit" value="Add Room" class="btn btn-success">
        </form>
    </div>


</div>
        <?php
        include "publicfooter.php";


