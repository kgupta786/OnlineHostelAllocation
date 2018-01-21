<?php

$deptname=$_POST["tbdepart"];
$loc=$_POST["tbloc"];
$head=$_POST["tbhod"];
$desc=$_POST["tbdes"];
include "connection.php";

$s1="select * from dapartements";

$result=mysqli_query($conn,$s1);

$flag=0;

while($row=mysqli_fetch_array($result))
{
    if($row[0]==$deptname)
    {
        $flag=1;
        break;
    }
}
if($flag==1)
{
    echo '<h3 class="text-danger">Duplicate Department Name</h3>';
}
else {
    $s = "insert into dapartements values('" . $deptname . "','" . $loc . "','"
        . $desc . "','".$head."')";

    mysqli_query($conn, $s);

    header("location: view_dept.php");
}

?>