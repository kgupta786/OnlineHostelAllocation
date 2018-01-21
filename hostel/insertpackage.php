<?php
include "connection.php";
$s="select * from roompackages";
$result=mysqli_query($conn,$s);
$flag=true;
while($row=mysqli_fetch_array($result))
{
    if($row[1]==$_POST["ddltype"])
    {$flag=false;
        break;
    }
}
if($flag==false)
{
    echo "Sharing type already existed!!";
}
else
{include "connection.php";
    $s1="insert into roompackages values(null,'".$_POST["ddltype"]."','".$_POST["des"]."','".$_POST["price"]."')";
    mysqli_query($conn,$s1);
    echo "Package inserted successfully!!";
}