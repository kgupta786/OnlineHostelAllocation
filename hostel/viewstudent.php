<?php

include "headeradmin.php";
?>

<div class="container-fluid">





    <div class="row" style="padding-left: 200px;padding-right: 200px"><br>
        <h1 class="text-center text-success">View Inactive Students Data</h1><br>
        <table  class="table table-bordered" style="width: 100px;margin-left: 0%">
            <tr><td>Roll No.</td>
                <td>Student Name</td>
                <td>Father's Name</td>
                <td>Mother's Name</td>
                <td>Email-id</td>
                <td>Mobile No.</td>
                <td>Gender</td>
                <td>Address</td>
                <td>Date Of Birth</td>
                <td>Course</td>
                <td>Semester</td>
                <td>Departement</td>
                <td>Status</td>
                <td>Activate</td>
            </tr>
            <?php



            include "connection.php";
            $s1="select * from signup where status='inactive'";
            $result=mysqli_query($conn,$s1);

            $s="<tr>";
            while($row=mysqli_fetch_array($result))
            {

                
                $s=$s."<td>".$row[0] . "</td>";
                $s=$s."<td>".$row[1] . "</td>";
                $s=$s."<td>".$row[2] . "</td>";
                $s=$s."<td>".$row[3] . "</td>";
                $s=$s."<td>".$row[4] . "</td>";
                $s=$s."<td>".$row[5] . "</td>";
                $s=$s."<td>".$row[7] . "</td>";
                $s=$s."<td>".$row[8] . "</td>";
                $s=$s."<td>".$row[9] . "</td>";
                $s=$s."<td>".$row[10] . "</td>";
                $s=$s."<td>".$row[11] . "</td>";
                $s=$s."<td>".$row[12] . "</td>";
                $s=$s."<td>".$row[13] . "</td>";
                $s=$s.'<td><a href="activatestatus.php?email='.$row[4].'"><img style="width: 45px;height: 45px" src="edit.png"> </a></td>';
                $s=$s."</tr>";
               
            }

            $s=$s."</table>";

            echo $s;
            ?>
    </div>
</div>



<?php

include "publicfooter.php";
?>