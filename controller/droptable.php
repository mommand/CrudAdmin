<?php
// configuration file
include('../config/connection.php');
// get parameters
$db = $_GET['db'];
$tab = $_GET['tab'];
// select database
mysql_select_db($db);
// query
$query = "DROP table ".$tab;

$run_query = mysql_query($query);

if($run_query)
{
    echo "done";
}
else
{
	echo mysql_errno();
}



?>