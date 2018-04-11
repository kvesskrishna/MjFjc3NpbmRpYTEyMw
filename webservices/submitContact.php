<?php
session_start();
require 'webservices/dbconfig.php';
require_once '21PHPMailer/SMTPMailer.php';
var_dump($_POST);
$sql="INSERT INTO `a21csabs_21cssindia`.`21css_webcontacts` (`id`, `name`, `email`, `countrycode`, `phone`, `message`, `type`, `created`, `modified`) VALUES (NULL, '{$_POST['name']}', '{$_POST['email']}', '{$_POST['countrycode']}', '{$_POST['phone']}', '{$_POST['message']}', '{$_POST['type']}', CURRENT_TIMESTAMP, NULL)";
$res=$mysqli->query($sql);
if ($res) {
	$body="
	Dear Visitor,<br>
	<p>Thank you for posting contact request at 21st Century Software Solutions. Our representative will get back to you shortly.
	</p>
	Thanks and Regards,<br>
	Communication Team,<br>
	21st Century Software Solutions.<br>
	Phone:  US +1 201-905-1656, IN +91 7416959668.<br>
	Visit: <a href='http:www.21cssindia.com'>www.21cssindia.com</a>.
	 ";
	SMTPMailer($_POST['email'], 'Contact/Quote request submitted at 21st Century Software Solutions', $body);
$_SESSION['constat']=1;
}
else{
	die($mysqli->error);
$_SESSION['constat']=1;

}
header('Location:'.$_SERVER['HTTP_REFERER']);

?>