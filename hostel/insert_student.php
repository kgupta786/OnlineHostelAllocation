<?php
include "connection.php";

$photo=$_FILES['photo']['name'];
$tmp=$_FILES['photo']['tmp_name'];
$size=$_FILES['photo']['size'];
$path='images/'.$photo;

$ext=pathinfo($photo,PATHINFO_EXTENSION);

if($ext=='jpg' || $ext=='png' || $ext=='gif')
{
    move_uploaded_file($tmp,$path);
    $s1="insert into signup values('".$_POST["tbroll"]."','".$_POST["tbname"]."','".$_POST["tbfather"]."','".$_POST["tbmother"]."','".$_POST["tbemail"]."','".$_POST["tbmobile"]."','".$path."','".$_POST["gender"]."','".$_POST["tbarea"]."','".$_POST["dob"]."','".$_POST["course"]."',".$_POST["sem"].",'".$_POST["tbdept"]."','inactive','000')";
mysqli_query($conn,$s1);
//echo $s1;

}
 echo "You have been Signed Up Successfully";
     ?>