<?php
$s1="select * from rooms";

$s="delete from rooms where roomno='".$_GET["dept"]."'";

include "connection.php";
$result=mysqli_query($conn,$s1);
$flag=0;

while($row=mysqli_fetch_array($result))
{
    if($row[0]==$_GET["dept"])
    {
        $flag=1;
        break;
    }
}

if($flag==1)
{
    mysqli_query($conn, $s);

    header("location: viewroom.php");

}

?>