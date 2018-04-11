 <?php
$from=$_POST['name'];
$from_email=$_POST['email'];
$mobile=$_POST['mobile'];
$subject="Block Chain Enquiry From ".$from." through 21CSS Website!";
$body=$from." sent the following message from blockchain page on 21cssindia.com website<p>".$_POST['message']. "</p><br>Visitor Email: ".$from_email."<p>Web Admin,<br>21CSS India Website</p>";
$to="blockchain@21cssindia.com";
require_once('PHPMailer/SMTPMailer.php');
$status= SMTPMailer($to,'itadmin@21cssindia.com',$from,$subject,$body);
//echo $status;
?>
<center><p><h3>Thank you for your contact message, we will get back to you shortly!<br><small>Redirecting back...<br><img src="img/redirecting.gif"></small></h3></p></center>
<?php
header( "refresh:5;url=blockchain" );
?>