<?php

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

$mail->addAddress("", "");

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Sending Mail From PHP Mailer...</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
echo "Message has been sent successfully";
}

?>