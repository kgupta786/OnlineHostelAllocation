<?php
$roll=$_POST["tbloginroll"];
$email=$_POST["tbloginemail"];
$pass=$_POST["tbloginpass"];
include "connection.php";

$s="select * from signup where email='".$email."'";
$result=mysqli_query($conn,$s);
$flag=true;
while($row=mysqli_fetch_array($result))
{if($row[4]==$email &&$row[0]==$roll&&$row[14]==$pass)
{

    $flag=false;
    session_start();
    $_SESSION["roll"]=$row[0];
    $_SESSION["name"]=$row[1];
        $_SESSION["fname"]=$row[2];
            $_SESSION["mname"]=$row[3];
                $_SESSION["email"]=$row[4];
                    $_SESSION["mobile"]=$row[5];
                        $_SESSION["photo"]=$row[6];
                            $_SESSION["gender"]=$row[7];
                                $_SESSION["adress"]=$row[8];
                                    $_SESSION["dob"]=$row[9];
                                        $_SESSION["course"]=$row[10];
                                            $_SESSION["sem"]=$row[11];
                                                $_SESSION["description"]=$row[12];
    $_SESSION["status"]=$row[13];
    $_SESSION["passwrd"]=$row[14];
    break;


}

}
if($flag==false)
{
    echo "login Successfully";
    header("location:Welcome.php");
}
else
{
    echo "login failed";
}

?>