<?php

function SMTPMailer($to,$subject,$body)

{

    $host="mail.21cssindia.com";

    $username="no-reply@21cssindia.com";

    $password="nr@21CSS";

    $from="no-reply@21cssindia.com";

    $from_name="21st Century Software Solutions";

require_once('PHPMailerAutoload.php');

$mail = new PHPMailer(); // create a new object

$mail->IsSMTP(); // enable SMTP

$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only

$mail->SMTPAuth = true; // authentication enabled

$mail->SMTPOptions = array(

    'ssl' => array(

        'verify_peer' => false,

        'verify_peer_name' => false,

        'allow_self_signed' => true

    )

);

//$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail

$mail->Host = $host;

$mail->Port = 587; // or 587

$mail->IsHTML(true);

$mail->Username = $username;

$mail->Password = $password;

$mail->SetFrom($from);

$mail->FromName = $from_name;

$mail->Subject = $subject;

$mail->Body = $body;

$mail->AddAddress($to);

$mail->AddCC("no-reply@21cssindia.com");

 if(!$mail->Send()) {

    $mailstatus= "Mailer Error: " . $mail->ErrorInfo;

    //$mailstatus=0;

 } else {

    //$mailstatus= "Message has been sent";

    $mailstatus=1;

 }

 return $mailstatus;

}

 ?>