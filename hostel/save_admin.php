<?php

$name=$_POST["tbeditname"];
$email=$_POST["tbeditemail"];
$mobile=$_POST["tbeditmobile"];

$s="update admins set name='".$name."',mobile='".
    $mobile."' where email='".$email."'";
include "connection.php";
mysqli_query($conn,$s);

header("location: viewadmin.php");


