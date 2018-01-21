<?php
include "connection.php";
$roomno = $_REQUEST["rid"];

$query  = "select  rooms.roomno,rooms.block,rooms.location , rooms.capacity,count(booking.bookingid) as booked , rooms.capacity - count(booking.bookingid) as free  from booking right join rooms on booking.roomno = rooms.roomno where rooms.roomno =  $roomno group by rooms.roomno,rooms.block,rooms.capacity";

$result = mysqli_query($conn,$query);

  $row = mysqli_fetch_array($result);
  //print_r($row);


$query1 = "select price from roompackages where sharingtype = $row[3]";

$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_array($result1);

$price = $row1[0];
  $s="";

  $s = "<table class='table table-bordered'>";
   $s.= "<tr><td>Block Name</td><td> $row[1]</td><td>Room No.</td><td>$row[0]</td></tr>";
   $s.="<tr><td>Amount</td><td> $row1[0] </td><td>Capacity</td><td>  $row[3] </td></tr>";
   $s.= "<tr><td>Booked</td><td>$row[4]</td><td>Free</td><td> $row[5] </td></tr></table>";

   $s.= ",$row[0]-$row[1]-$row1[0]";

echo  html_entity_decode( $s);
