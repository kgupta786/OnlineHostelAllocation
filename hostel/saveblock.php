<?php
include "connection.php";
$s="update block set location='".$_POST["location1"]."',type='".$_POST["type1"]."' where blockname='".$_POST["blockname1"]."'";
mysqli_query($conn,$s);
echo "Your Info has been updated";
?>