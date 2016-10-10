<?php
include('../config/mysqliConnect.php');

// post data
$fname = mysqli_real_escape_String($conn,$_POST['fname']);
$lname = mysqli_real_escape_String($conn,$_POST['lname']);
$email = mysqli_real_escape_String($conn,$_POST['email']);
$password = mysqli_real_escape_String($conn, $_POST['password']);
$rpass    = mysqli_real_escape_String($conn, $_POST['rpassword']);
// array
$arr = array();
$flage = false;
if($fname == '')
{
	$arr[] = "The First name field is required!";
	$flage = true;
}
if($lname == '')
{
	$arr[] = "Last name field is required!";
	$flage = true;
}
if($email == '')
{
	$arr[] = "Email is requied";
	$flage = true;
}
if($password == '' || strlen($password) < 8)
{
	$arr[] = "The password field is required and max length is 8 characters";
	$flage= true;
 }
 if($rpass == '')
 {
 	$arr[] = "The Re-type password field is required";
	$flage= true;
 }
 if(strcmp($password, $rpass) != 0)
 {
 	$arr[] = "Wrong password combination";
 	$flage = true;
 }

 // if Error accurred
if($flage)
{
	session_start();
	$_SESSION['ERR'] = $arr;
	header('location:../views/register.php');
}
$hashed_pass = md5($password);
$q = "INSERT INTO users (id,fname,lname,email,password) VALUES(null,'$fname','$lname','$email','$hashed_pass')";

$run_q = mysqli_query($conn, $q);
if($run_q)
{
	echo "done";
}
else
{
	echo mysqli_error();
}






