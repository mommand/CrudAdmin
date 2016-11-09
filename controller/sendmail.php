<?php

$to = $_POST['to'];
$subject = $_POST['subject'];
$txt = $_POST['body'];
$headers = "From: zmomand@csf.edu.af" . "\r\n";

if(mail($to,$subject,$txt,$headers)){
	echo "mail sent";
}
else
{
	echo "mail not sent";
}
?>