<?php
include('../config/mysqliConnect.php');
include('../views/assets.php');
// get id from url
$id = $_GET['id'];
$query = "SELECT * FROM news WHERE id =$id";
// execute query
$select = mysqli_query($conn, $query);
if(mysqli_num_rows($select) > 0)
{
	$latest_news = mysqli_fetch_assoc($select);
   ?>
   	  <div class="container">
   	   	<div class="row">
   	   	  <div class="col-md-12">
   	   	     <div class="page-header">
   	   	     	<h4 class="text-center">New Details</h4>
   	   	     </div>
   	   	     <div class="col-md-4">
   	   	     	<div class="page-header">
   	   	     		<h5 class="text-center">Related News</h5>
   	   	     	</div>
   	   	     </div>
   	   	     <div class="col-md-8">
   	   	       <div class="page-header">
   	   	       	<h5><?php echo $latest_news['title'];  ?></h5>
   	   	       </div>
   	   	       <p class="text-muted">
   	   	       	 <?php echo $latest_news['content']; ?>
   	   	       </p>
   	   	       <p><strong>Author:</strong>
   	   	         <?php echo $latest_news['author']; ?>
   	   	       </p>
   	   	       <p><strong>Location:</strong>
   	   	         <?php echo $latest_news['location']; ?>
   	   	       </p>
   	   	     </div>
   	   	  </div>
   	   	</div>
   	  </div>
   <?php
}
?>