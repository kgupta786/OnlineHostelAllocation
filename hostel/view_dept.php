<?php

include "headeradmin.php";
?>

<div class="container-fluid">




            <div class="row" style="padding-left: 400px;padding-right: 400px"><br><h1 class="text-center text-success">View Departement</h1><br>
                <table  class="table table-bordered" style="width: 600px;margin-left: 5%">
                    <tr><td>Sr.No.</td>
                        <td>Departement Name</td>
                        <td>Location Name</td>
                        <td>Description</td>
                        <td>Head-Name</td>

                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                <?php



                include "connection.php";
                $s1="select * from dapartements";
                $result=mysqli_query($conn,$s1);

                 $i=1; $s="<tr>";
                while($row=mysqli_fetch_array($result))
                {

                    $s=$s."<td>".$i."</td>";
                    $s=$s."<td>".$row[0] . "</td>";
                    $s=$s."<td>".$row[1] . "</td>";
                    $s=$s."<td>".$row[2] . "</td>";
                    $s=$s."<td>".$row[3] . "</td>";
                    $s=$s.'<td><a href="edit_dept.php?dept='.$row[0].'"><img style="width: 45px;height: 45px" src="edit.png"> </a></td>';
                    $s=$s.'<td><a href="remove_dept.php?dept='.$row[0].'"><img style="width: 45px;height: 45px" src="remove.png"> </a></td>';
                    $s=$s."</tr>";
                    $i++;
                }

                $s=$s."</table>";

                echo $s;
                ?>
            </div>
        </div>



<?php

include "publicfooter.php";
?>