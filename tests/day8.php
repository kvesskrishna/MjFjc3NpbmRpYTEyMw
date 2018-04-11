<?php

//trigger a simple plain text email

$to="krishna.kkarthi@gmail.com";
$subject="PHP Training";
$message="
<h2>Hello Krishna</h2>,
<p style='color:green'>
How is the training going on?
</p>
";


if (mail($to, $subject, $message)) {
	# code...
	echo "The mail has been sent";
}
else
echo 'Unable to send the mail';

//trigger a html formatted email

$to_html="krishna.kkarthi@gmail.com";
$subject_html="PHP Training";
$message_html="
<h2>Hello Krishna</h2>,
<p style='color:green'>
How is the training going on?
</p>
";

$from_html="krishna@21cssindia.com";

$headers='MIME-Version: 1.0'."\r\n";
$headers.='Content-type:text/html;charset=iso-88859-1'."\r\n";
$headers.='From: '.$from_html."\r\n".'Reply-To: '.$from_html."\r\n";



if (mail($to_html, $subject_html, $message_html,$headers)) {
	# code...
	echo "The mail has been sent";
}
else
echo 'Unable to send the mail';
?>