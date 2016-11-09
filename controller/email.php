<?php
$to      = $_POST['to'];
$subject = $_POST['subject'];
$body	 = $_POST['msg'];
$header  = "from: zmomand@technation.af";

if(mail($to, $subject,$body, $header))
{
	echo "mail has been sent";
}
else
{
	echo "Mail not sent";
}


?>