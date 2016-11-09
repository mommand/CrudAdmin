<?php
// set cookies
$cookie_name ="Ali";
$cookie_value = "dslfksdlfksdlkfsldkfsdlk";

setcookie($cookie_name, $cookie_value, time()+2000,"/");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cookies</title>
</head>
<body>
<?php
if(!isset($_COOKIE[$cookie_name]))
{
	echo "the cookie named ".$cookie_name. " is not set";
}
else
{
	echo " Cookies by name of  ". $cookie_name . " is seted"."<br>";
	echo "cookie value is ". $_COOKIE[$cookie_name];
}
?>

</body>
</html>