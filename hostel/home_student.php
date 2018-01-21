
        <?php
        include "studentpage.php";
        ?>
 <div class="container-fluid">
    <div class="row"  style="padding-left: 400px;padding-right: 400px">
        <h1 class="text-success text-center">Edit My profile</h1><br>
        <form action="update_student.php" method="post">
            Your Roll No.<input type="text" value="<?php echo $_SESSION["roll"]; ?>" name="tbroll" class="form-control"><br>
            Your Name<input type="text" value="<?php echo $_SESSION["name"]; ?>" name="tbname" class="form-control"><br>
            Your Father Name<input type="text" value="<?php echo $_SESSION["fname"]; ?>" name="tbfather" class="form-control"><br>
            Your Mother's Name<input type="text" value="<?php echo $_SESSION["mname"]; ?>" name="tbmother" class="form-control"><br>

         Your Contact Number   <input type="text" value="<?php echo $_SESSION["mobile"]; ?>" name="tbmobile" class="form-control"><br>

            <select class="form-control" value="<?php echo $_SESSION["gender"]; ?>" name="gender"><option>Male</option><option>Female</option></select><br>

            Your Address<textarea type="text"  name="tbarea" class="form-control" ><?php echo $_SESSION["adress"]; ?></textarea><br>
            Select the d.o.b <input type="date" value="<?php echo $_SESSION["dob"]; ?>" name="dob" class="form-control"><br>
            Select the course name<select name="course" value="<?php echo $_SESSION["course"]; ?>" class="form-control"><option>B.Tech</option><option>M.Tech</option><option>MSC</option>
                <option>BSC</option><option>MCA</option><option>BCA</option></select><br>
            Select the semester<select name="sem" value="<?php echo $_SESSION["sem"]; ?>" class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>

            </select><br>
            Your Departement<input type="text" name="tbdept" value="<?php echo $_SESSION["description"]; ?>" placeholder="Enter the  department name" class="form-control"><br>

            <input type="submit" class="btn btn-success" value="Edit My Profile">

        </form>


</div>
       

    </div>

<?php
        include "publicfooter.php";