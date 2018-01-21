<?php

$dept=$_POST["depart"];
$loc=$_POST["loc"];
$head=$_POST["hod"];
$desc=$_POST["des"];

$s="update dapartements set location='".$loc."',headname='".
    $head."',description='".$desc."' where department='".$dept."'";

include "connection.php";
mysqli_query($conn,$s);

header("location: view_dept.php");


