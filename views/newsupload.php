<?php
session_start();
include('../controller/auth.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>News Upload</title>
	<?php
      
      include('../config/mysqliConnect.php');
	    include('assets.php');
	 
	?>
</head>
<body>
  <div class="page-header">
  
    <h3 class="text-center">Upload News</h3>

  </div>
  <div class="container">
  <?php
   if(isset($_SESSION['fname']) && isset($_SESSION['lname']))
   {
      ?>
         <div class="alert alert-success">
             <p>Dear <?php echo $_SESSION['fname']." ". $_SESSION['lname'];  ?> You have Successfully loged in</p>
         </div>
      <?
   }
 ?>
     <div class="row">
     <a href="../controller/logout.php" class="btn btn-primary pull-right">Logout</a>
       <div class="col-md-6 col-md-offset-3">

         <form action="../controller/news_exec.php" method="post" enctype="multipart/form-data">
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
                <?php
                    $cats = "SELECT * FROM categories";
                    $run  = mysqli_query($conn,$cats);
                    if(mysqli_num_rows($run) > 0)
                    {
                        while ($rows = mysqli_fetch_assoc($run)) {
                            echo "<option value='$rows[id]'>"
                            .$rows['name'].

                            "</option>";
                        }
                    } 
                 ?>
         	  	
         	  </select>
         	</div>
          <div class="row form-group">
            <label>Upload Image:</label>
            <input type="file" name="file" class="form-control">
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