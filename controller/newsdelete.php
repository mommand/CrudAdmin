<?php
include('../config/mysqliConnect.php');
// get id from url
$id = $_GET['id'];
// delete query
$query = "DELETE FROM news WHERE id = $id";

// execute query
 $delete = mysqli_query($conn,$query);

 // check if delete success

 if($delete)
 {
 	header('location:news.php?stauts=success');
 }
 else
 {
 	echo mysqli_error($conn);
 }

