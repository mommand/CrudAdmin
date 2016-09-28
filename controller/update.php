<?php
include('../config/mysqliConnect.php');
include('../views/assets.php');
// get id
$id = $_GET['id'];

// select query

$select = mysqli_query($conn, "SELECT * FROM news WHERE id = $id");
if(mysqli_num_rows($select) > 0)
{
	$rows = mysqli_fetch_assoc($select);
	echo "<div class='col-md-6 col-md-offset-3'>
			<div class='page-header'>
			  <h4 class='text-center'>Update Record</h4>
			</div>
			<form action='update_exec.php' method='post'>
			 <input type='hidden' name='id' value='".$id."'>
			  <div class='row form-group'>
			  <label>Title</label>
			  <input type='text' class='form-control' value='".$rows['title']."' name='title'>
			  </div>
			  <div class='row form-group'>
			  <label>Author</label>
			  <input type='text' class='form-control' value='".$rows['author']."' name='author'>
			  </div>
			  <div class='row form-group'>
			  <label>Location</label>
			  <input type='text' class='form-control' value='".$rows['location']."' name='location'>
			  </div>
			  <div class='row form-group'>
			  	<select name='cat' class='form-control'>
			  	<option value=".$rows['category'].">".$rows['category']."</option>
			  	<option>Political</option>
			  	<option>Social</option>
			  	</select>
			  </div>
			  <div class='row form-group'>
			  <label>Content</label>
			  <textarea class='form-control' name='content'>".$rows['content']."</textarea>
			  </div>
			  <div class='row form-group'>
			    <input type='submit' class='btn btn-primary' value='Update'>
			  </div>
			 </form>
			
		 </div>
		";

}