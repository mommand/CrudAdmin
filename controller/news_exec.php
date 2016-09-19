<?php
include('../config/connection.php');
// select database
mysql_select_db('newsup');
// post data
$title = trim($_POST['title']);
$author = trim($_POST['author']);
$location = trim($_POST['location']);
$category = trim($_POST['cat']);
$content  = trim($_POST['content']);

// create query
$insert = "INSERT INTO news (id,title,author,location,category,content) VALUES (null,'$title','$author','$location','$category','$content')";
// run query
$run_insert_query = mysql_query($insert);
if($run_insert_query)
{
	header('../views/newsupload.php?status=success');
}
else
{
	echo mysql_error();
}
?>