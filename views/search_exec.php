<?php
include('../config/connection.php');
mysql_select_db('newsup');
$q = $_GET['q'];

$query = "SELECT * FROM news WHERE title LIKE '%$q%'";

$run_query = mysql_query($query);
if($run_query)
{
	echo "<table class='table table-bordered'>
			<tr>
			 <th>Title</th>
			 <th>Author</th>
			 <th>Location</th>
			</tr>";
	while ($row = mysql_fetch_array($run_query)) {
		?>
			<tr>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['author']; ?></td>
				<td><?php echo $row['location']; ?></td>
			</tr>
		<?php
	}
	echo "</table>";
}
else
{
	?>
		<div class="alert alert-danger"><?php echo mysql_error(); ?></div>
<?php
}

?>