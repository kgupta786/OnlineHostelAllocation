<?php


$s="insert into admins values('".$_POST["textbox1"]."','".$_POST["textbox2"]."','".$_POST["textbox3"]."','".$_POST["textbox4"]."')";
include "connection.php";
mysqli_query($conn,$s);

$s="Row Inserted Sucessfully";
echo $s;?>