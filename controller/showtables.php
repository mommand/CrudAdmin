<?php
include ('../config/connection.php');
$dbname = $_GET['dbname'];
// query
$query = "SHOW tables FROM ".$dbname;
// run query
$run_query = mysql_query($query);
if($run_query)
{
	?>
	<div class="page-header text-center"><h4>Tables in <?php echo $dbname ?> Database</h4></div>
		<table class="table table-bordered table-hovered">
		<tr>
		   <th>Table Name</th><th colspan="3">More Actions</th>
		</tr>
	<?php
   while ($rows = mysql_fetch_array($run_query)) {
   	# code...
   	?>
      <tr>
      	<td><?php echo $rows[0]; ?></td>
      	<td><a href="droptable.php?db=<?php echo $dbname; ?>&&tab=<?php echo $rows[0]; ?>">Drop Table</a></td>
      	<td><a href="describetable.php?db=<?php echo $dbname; ?>&&tab=<?php echo $rows[0]; ?>">Describe Table</a></td>
      	<td><a href="">Browse table</a></td>
      </tr>
    <?php 

   }
   ?>
    </table>
   <?php
}
else
{
	echo mysql_error();
}

?>