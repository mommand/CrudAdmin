<?php

if(!isset($_SESSION['fname']) && !isset($_SESSION['lname']))
{
	header('location:../views/login.php');
	session_destroy();
}
?>