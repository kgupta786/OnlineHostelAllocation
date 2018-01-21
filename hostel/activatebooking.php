<?php
include "connection.php";
$rn=$_GET["roll"];

$s="select * from signup where roll=".$rn;
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_array($result);
$email=$row[4];
    $name=$row[1];
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

$mail->addAddress("$email","$name");

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "Congratulations Your Room has been successfully Booked!!";
$mail->AltBody = "Congratulations Your Account has been successfully Activated!! Your Password for hostel account is";

if(!$mail->send())
{
    echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
    echo "Message has been sent successfully";
}

include "connection.php";
$s="update booking set status='booked' where rollno=".$rn;


mysqli_query($conn,$s);
echo "activated successfully!!";




