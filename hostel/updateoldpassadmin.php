<?php
session_start();
if(!isset($_SESSION["email"]))
{
    header("location:adminmain.php");
}
else{
    if($_POST["tbold"]==$_SESSION["passwrd"])
    {
        $s1="update admins set password='".$_POST["tbnew"]."' where email='".$_SESSION["email"]."'";
      include "connection.php";
        mysqli_query($conn,$s1);
        echo "Password updated succesfully!!";

    }
    else
    {
        echo "Old Password didn't Matched";
    }
}