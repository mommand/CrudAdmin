<?php
include('../views/assets.php');
// create connection
$servername = "localhost";
$username   = "root";
$password	= "root";
$database 	= "newsup";
$conn = mysqli_connect($servername,$username,$password,$database);
// check connection
if(!$conn)
{
	die("Connection Faild".mysqli_connect_error());
}
// sql query
$sql = "SELECT * FROM news order by id desc ";
// execute query
$result = mysqli_query($conn, $sql);
// check if records exist
if(mysqli_num_rows($result) > 0)
{

	echo "<div class='page-header'>
			<h4 class='text-center'>News Records</h4>
		</div>";
	echo "<a href='../views/newsupload.php' class='btn btn-primary' >Back To Home</a>";
	echo "<table class='table table-bordered' style='margin-top:30px;'>";
	echo "<tr>
	      <th>Title</th>
	      <th>Author</th>
	      <th>Location</th>
	      <th>Category</th>
	      <th colspan='3'>More Actions</th>

		</tr>";
   while ($rows = mysqli_fetch_assoc($result)) {
   	  echo "<tr>
   	    	<td>".$rows['title']."</td>
   	    	<td>".$rows['author']."</td>
   	    	<td>".$rows['location']."</td>
   	    	<td>".$rows['category']."</td>
   	    	<td><a href=''><span class=' glyphicon glyphicon-trash' aria-hidden='true'></span></a></td>
   	    	<td><a href=''><span class=' glyphicon glyphicon-pencil' aria-hidden='true'></span></a></td>
   	    	<td><a href=''><span class=' glyphicon glyphicon-eye-open' aria-hidden='true'></span></a></td>
   	  		</tr>";
   	
   }

   echo "</table>";
}
else
{
	echo "0 Records";
}

?>