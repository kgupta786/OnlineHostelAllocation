<?php
include "publicheader.html";
?>
<div class="container-fluid">



    <div class="row" >

        <br><h1 class="text-center text-success">Student sign-up form</h1><br>
        <div class="form-group" style="padding-left: 400px;padding-right: 400px">
          <form action="insert_student.php" method="post" enctype="multipart/form-data">
<input type="text" placeholder="Enter the roll no." name="tbroll" class="form-control"><br>
<input type="text" placeholder="Enter student name" name="tbname" class="form-control"><br>
              
        <input type="text" placeholder="Enter father name" name="tbfather" class="form-control"><br>
        <input type="text" placeholder="Enter Mother name" name="tbmother" class="form-control"><br>
       <input type="email" placeholder=" Enter Email-id" name="tbemail" class="form-control"><br>
       <input type="text" placeholder=" Enter Mobile-No." name="tbmobile" class="form-control"><br>
         Photo Upload  <input type="file" name="photo"><br>
     <select class="form-control" name="gender"><option>Male</option><option>Female</option></select><br>

         <textarea type="text" placeholder="Enter Address" name="tbarea" class="form-control" ></textarea><br>
Select the d.o.b <input type="date" placeholder="" name="dob" class="form-control"><br>
Select the course name<select name="course" class="form-control"><option>B.Tech</option><option>M.Tech</option><option>MSC</option>
              <option>BSC</option><option>MCA</option><option>BCA</option></select><br>
        Select the semester<select name="sem" class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>

          </select><br>
        <input type="text" name="tbdept" placeholder="Enter the  department name" class="form-control"><br>

        <input type="submit" class="btn btn-success" value="Add Student">

          </form>
</div></div>
</div>
<?php
include "publicfooter.php";
?>