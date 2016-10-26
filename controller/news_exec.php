<?php
 $connect = @mysql_connect("localhost","root","root") or die("Can not connection to mysql server");
// select database
mysql_select_db('newsup');
// post data
$target_folder = '../uploads/';
$target_file = $target_folder . basename($_FILES["file"]["name"]);
$title = trim($_POST['title']);
$author = trim($_POST['author']);
$location = trim($_POST['location']);
$category = trim($_POST['cat']);
$content  = trim($_POST['content']);
$append    = time();
$file     = basename($_FILES["file"]["name"]).$append;

// create query
$insert = "INSERT INTO news (id,title,author,location,category,photo,content) VALUES (null,'$title','$author','$location','$category','$file','$content')";
// run query
$run_insert_query = mysql_query($insert);
if($run_insert_query)
{
		if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        	 @header('location:../controller/news.php?status=success');

	    } 
	    else {
	        echo "Sorry, there was an error uploading your file.";
	    }
       
	
}
else
{
	echo mysql_error();
}
?>