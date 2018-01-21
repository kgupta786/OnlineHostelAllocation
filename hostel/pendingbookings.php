<?php

include "headeradmin.php";
?>
<div class="container-fluid">

    <div class="row" style="padding-left: 400px;padding-right: 400px">
        <br><h1 class="text-center text-success">Pending Bookings</h1><br>
        <table  class="table table-bordered" style="width: 500px;margin-left: 0%">
            <tr><td>Booking-id</td>
                <td>Rollno</td>
                <td>BlockName</td>
                <td>Room-no</td>
                <td>Booking-date</td>
                <td>Leave-date</td>
                <td>Amount</td>
                <td>Status</td>
                <td>Activate</td>
            </tr>
            <?php

            include "connection.php";
            $s1="select * from booking where status='pending'";
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
                $s=$s."<td>".$row[6] . "</td>";
                $s=$s."<td>".$row[7] . "</td>";
                 $s=$s.'<td><a href="activatebooking.php?roll='.$row[1].'"><img style="width: 45px;height: 45px" src="edit.png"> </a></td>';
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