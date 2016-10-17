<?php
@session_start();
unset($_SESSION['fname']);
unset($_SESSION['lname']);

header('location:../views/login.php');
?>