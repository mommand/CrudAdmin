<?php
include('../config/mysqliConnect.php');

$uname = $_POST['username'];
$password = $_POST['password'];

$arr = array();
$flage = false;

if($uname == '')
{
	$arr[] = " Usrename is required ";
	$flage = true;
}
if($password == '')
{
	$arr[] = " Password is required ";
	$flage = true;
}
if($flage)
{
	session_start();
	$_SESSION['err'] = $arr;
	header('location:../views/login.php');
}
$q = "select * from users where email ='".$uname."' AND password = '".md5($password)."'";
$run_q = mysqli_query($conn, $q);
if(mysqli_num_rows($run_q) == 1)
{
	$user_data = mysqli_fetch_assoc($run_q);
	session_start();
	$fname = $user_data['fname'];
	$lname = $user_data['lname'];
	$_SESSION['fname'] = $fname;
	$_SESSION['lname'] = $lname;
	header('location:../views/newsupload.php?status=success');
}
else
{
	
	 header('location:../views/login.php?status=fail');
	 session_destroy();
}


?>