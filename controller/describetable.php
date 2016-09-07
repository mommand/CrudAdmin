<?php
include ('../config/connection.php');
// get parameters from url
$db = $_GET['db'];
$tab = $_GET['tab'];
// select database
mysql_select_db($db);
// query
$query = "Describe ".$tab;
// run query
$run_query = mysql_query($query);
if($run_query)
{
	echo "<table class='table table-bordered'>";
	echo "<tr>
	        <th>Field</th>
	        <th>Type</th>
	        <th>Null</th>
	        <th>Key</th>
	        <th>Default</th>
	        <th>Extra</th>
		 </tr>";
     while ($rows = mysql_fetch_array($run_query)) {
     	# code...
     	echo "<tr>
     	       <td>".$rows['Field']."</td>
     	       <td>".$rows['Type']."</td>
     	       <td>".$rows['Null']."</td>
     	       <td>".$rows['Key']."</td>
     	       <td>".$rows['Default']."</td>
     	       <td>".$rows['Extra']."</td>
     		 </tr>";
     }

     echo "</table>";
   
}
else
{
	echo mysql_error();
}
?>