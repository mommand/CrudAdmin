<?php
include('../config/mysqliConnect.php');

$uname = $_POST['username'];
$pass  = $_POST['password'];

$arr = array();
$flage = false;
if($uname == '')
{
	$arr[] = "Username feild is required!";
	$flage = true;
}
if($pass == '')
{
	$arr[] = "The password Field is required!";
	$flage = true;
}
if($flage)
{
	session_start();
	$_SESSION['ERR'] == $arr;

}
$q = "select * from users where email = '$uname' AND password = '".md5($pass)."'";
$run_q = mysqli_query($conn,$q);
if($run_q)
{
	if(mysqli_num_rows($run_q) > 0)
	{
		while ($user_data = mysqli_fetch_assoc($run_q)) {
			
			session_start();
			$_SESSION['fname'] = $user_data['fname'];
			$_SESSION['lname'] = $user_data['lname'];
			header('location:../views/newsupload.php');
		}
	}
	else
	{
		header('location:../views/login.php?status=fail');
	}

}
else
{
	echo mysqli_error($conn);
}


?>