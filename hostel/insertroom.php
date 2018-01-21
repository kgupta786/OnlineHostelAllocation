<?php
include "connection.php";
$s="select * from rooms";
$result=mysqli_query($conn,$s);
$flag=true;
while($row=mysqli_fetch_array($result))
{
    if($row[0]==$_POST["no"]&&$row[1]==$_POST["blockname"])
    {
        $flag=false;
        break;
    }
}
if($flag==false)
{
    echo "Duplicates Not allowed";
}
else
{
    $s1="insert into rooms values('".$_POST["no"]."','".$_POST["blockname"]."','".$_POST["capacity"]."','".$_POST["type"]."','".$_POST["description"]."','".$_POST["location"]."')";
    mysqli_query($conn,$s1);
    echo "Room Added Successfully!!";
}

?>