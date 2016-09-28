<?php
include('../config/mysqliConnect.php');
// get parameters
$id 		= $_POST['id'];
$title 		= $_POST['title'];
$author 	= $_POST['author'];
$location 	= $_POST['location'];
$cat	  	= $_POST['cat'];
$content  	= $_POST['content'];

// query 
$query = "update news set title='$title',author = '$author', location = '$location',category = '$cat',content = '$content' where id = $id";
// execute query
$update = mysqli_query($conn,$query);
//check if success
if($update)
{
	header('location:news.php');
}
else
{
	echo mysqli_error($conn);
}

