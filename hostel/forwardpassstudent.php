<?php
include "connection.php";
$s="select * from signup";
$result=mysqli_query($conn,$s);
$flag=true;
session_start();
$_SESSION["forgotemail"]=$_POST["tbforgotemail"];
while($row=mysqli_fetch_array($result))
{
    if($row[4]==$_SESSION["forgotemail"])
    {
        $flag=false;
        break;
    }
}
if($flag==false)
{

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

    $mail->addAddress($row[4],$row[1]);

    $mail->isHTML(true);

    $mail->Subject = "Subject Text";
    $mail->Body = "<i><b>Your Password for hostel account is&nbsp;&nbsp;&nbsp;&nbsp;</b></i>".$row[14];
    $mail->AltBody = "Your Password for hostel account is".$row[14];

    if(!$mail->send())
    {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else
    {
        echo "Message has been sent successfully";
    }



}
else{
    echo "Email didn't matched up!!";
}