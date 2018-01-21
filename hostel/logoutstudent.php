<?php
session_start();
$_SESSION["email"]=null;
$_SESSION["roll"]=null;
$_SESSION["passwrd"]=null;
session_destroy();
header("location:student_login.php");
?>