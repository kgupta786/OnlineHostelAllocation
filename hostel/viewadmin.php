<?php
include "headeradmin.php";
?>
<div class="container-fluid">

        <div class="row" style="padding-left: 400px;padding-right: 400px"><br>
            <h1 class="text-center text-success">View Admins</h1><br>
            <table class="table table-bordered">
                <tr><td>Sr.No.</td>
                    <td>Name</td>
                    <td>E-mail</td>
                    <td>Mobile No.</td>
<td>Edit</td>
                    <td>Delete</td>
                </tr>

            <?php
            // include "header.html";
            $s="select * from admins";

           include "connection.php";
            $result=mysqli_query($conn,$s);

            $i=1;
            while($row=mysqli_fetch_array($result))
            {
                $s="<tr>";
                $s=$s."<td>".$i."</td>";
                $s=$s."<td>".$row[0] . "</td>";
                $s=$s."<td>".$row[1] . "</td>";
                $s=$s."<td>".$row[2] . "</td>";
                $s=$s.'<td><a href="edit_admin.php?dept='.$row[1].'"><img style="width: 45px;height: 45px" src="edit.png"> </a></td>';
                $s=$s.'<td><a href="remove_admin.php?dept='.$row[1].'"><img style="width: 45px;height: 45px" src="remove.png"> </a></td>';
                $s=$s."</tr>";
                $i++;
                echo $s;
            }




            ?>
            </table>
        </div>
    </div>

<?php
include "publicfooter.php";
?>
