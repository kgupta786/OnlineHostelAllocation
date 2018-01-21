<?php
include "connection.php";
$s="update rooms set location='".$_POST["location"]."',roomtype='".$_POST["type"]."',capacity='".$_POST["capacity"]."',description='".$_POST["description"]."' where roomno='".$_POST["no"]."'";
mysqli_query($conn,$s);
echo "Your Info has been updated";
?>