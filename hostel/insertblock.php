<?php
include "connection.php";
$s="select * from block";
$result=mysqli_query($conn,$s);
$flag=true;
while($row=mysqli_fetch_array($result))
{
    if($row[0]==$_POST["blockname"])
    {
        $flag=false;
        break;
    }
}
if($flag==false)
{
    echo "Duplicate Blockname Not allowed";
}
else
{
    $s1="insert into block values('".$_POST["blockname"]."','".$_POST["location"]."','".$_POST["type"]."')";
    mysqli_query($conn,$s1);
    echo "Block Added Successfully!!";
}

?>