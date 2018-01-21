<?php
include "connection.php";
session_start();
$s="update signup set name='".$_POST["tbname"]."',fname='".$_POST["tbfather"]."',mname='".$_POST["tbmother"]."',mobile='".$_POST["tbmobile"]."',photo='".$_SESSION["photo"]."',gender='".$_POST["gender"]."',address='".$_POST["tbarea"]."',dob='".$_POST["dob"]."',course='".$_POST["course"]."',semester='".$_POST["sem"]."',departement='".$_POST["tbdept"]."'where email='".$_SESSION["email"]."'";
mysqli_query($conn,$s);
echo "Your Info has been updated";
?>