<?php
$email=$_GET["email"];
$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
$pass="";
for ($i = 0; $i < 6; $i++) {
    $n = rand(0, count($alphabet) - 1);
    $pass = $pass . $alphabet[$n];
}
include "./phpmaildir/PHPMailerAutoload.php";

$mail = new PHPMailer;

//Enable SMTP debugging.
$mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;
//Provide username and password
$mail->Username = "vmm.students2010@gmail.com";
$mail->Password = "helloworld06125";
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";
//Set TCP port to connect to
$mail->Port = 587;

$mail->From = "vmm.students2010@gmail.com";
$mail->FromName = "Harpreet Singh";

$mail->addAddress($_POST["tbemail"],$_POST["tbname"]);

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "Congratulations Your Account has been successfully Activated!! Your Password for hostel account is&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$pass;
$mail->AltBody = "Congratulations Your Account has been successfully Activated!! Your Password for hostel account is".$pass;

if(!$mail->send())
{
    echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
    echo "Message has been sent successfully";
}


$s="update signup set status='active',passwrd='".$pass."' where email='".$email."'";

include "connection.php";
mysqli_query($conn,$s);
header("location: viewstudent.php");


