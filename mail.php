<?php
$to      = 'mailhostingserver@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@21cssindia.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 
