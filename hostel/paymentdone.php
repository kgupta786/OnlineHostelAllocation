
<?php

include "connection.php";
include "studentpage.php";

$dateofbooking=("7/17/2017");
$dateofleave=("15/7/2018");
$status="pending";
$s="select * from booking";
$result=mysqli_query($conn,$s);
$flag=0;
while($row=mysqli_fetch_array($result))
{
    if ($row[1] == $_SESSION["roll"])
    {
        $flag = 1;
        break;
    }
}
if($flag==1)
{
    echo"<h1 class='text-danger text-center' >duplicate university rollno</h1><br><br>";
}
else
{
    $s1="insert into booking values(null,".$_SESSION["roll"].",'".$_SESSION["block"]."',".$_SESSION["roomno"].",'$dateofbooking','$dateofleave',".$_SESSION["amount"].",'$status')";
    mysqli_query($conn,$s1);
   echo "<h1 class='text-success text-center'>Booking done successfully!!</h1>";

}
?>
<?php

include"publicfooter.php";