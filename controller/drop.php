<?php
include('../config/connection.php');
$dbname = $_GET['dbname'];
if($connect)
{
   // query
	$query = "DROP database ".$dbname;
	// run query
	$run_query = mysql_query($query);
	if($run_query)
	{
		header('location:../views/index.php?status=drop-success&&dbname='.$dbname);
	}
	else
	{
		header('location:../views/index.php?status=drop-failur');
	}
}
else
{
	echo mysql_error();
}
?>