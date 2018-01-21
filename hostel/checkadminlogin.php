<?php
session_start();
$s="select * from admins";
include "connection.php";
$result=mysqli_query($conn,$s);
$flag=0;
while($row=mysqli_fetch_array($result))
{
    if($row[1]==$_POST["lemail"])
    {
        if($row[2]==$_POST["lmobile"]){
            if($row[3]==$_POST["lpass"])
            {
                $flag=1;
                $_SESSION["name"]=$row[0];
                break;
            }
        }
    }
}
if($flag==1)
{


    $_SESSION["email"]=$_POST["lemail"];
    $_SESSION["mobile"]=$_POST["lmobile"];
    $_SESSION["passwrd"]=$_POST["lpass"];
    header("location:addadmin.php");

}
else{
    header("location:adminmain.php");

}