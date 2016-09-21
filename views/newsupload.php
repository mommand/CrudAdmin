<!DOCTYPE html>
<html>
<head>
	<title>News Upload</title>
	<?php
	  include('assets.php');
	 
	?>
</head>
<body>
  <div class="page-header">
    <h3 class="text-center">Upload News</h3>
  </div>
  <div class="container">
     <div class="row">
       <div class="col-md-6 col-md-offset-3">
         <form action="../controller/news_exec.php" method="post">
         	<div class="row form-group">
         	   <label for="title">Title</label>
         	   <input type="text" class="form-control" name="title">
         	</div>
         	<div class="row form-group">
         	 	<label for="author">Author</label>
         	 	<input type="text" class="form-control" name="author">
         	</div>
         	<div class="row form-group">
         		<label for="location">Location</label>
         		<input type="text" class="form-control" name="location">
         	</div>
         	<div class="row form-group">
         	  <label for="cat">Category</label>
         	  <select name="cat" class="form-control">
         	    <option>Please Select Category</option>
         	    <option value="sport">Sport</option>
         	    <option value="polictical">Political</option>
         	  	
         	  </select>
         	</div>

         	<div class="row form-group">
         	  <label for="content">Content</label>
         	  <textarea class="form-control" style="width:100%; height:200px;" name="content"></textarea>
         	</div>
         	<div class="row">
         	  <input type="submit" value="Publish" class="btn btn-primary btn-lg">
         	</div>
         </form>
       </div>
       
     </div>
  </div>
</body>
</html>