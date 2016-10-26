<?php
 include('assets.php');
?>

<div class="container">
 <div class="row">
   <div class="col-md-4 col-md-offset-4">
     <form action="../controller/upload_exec.php" method="POST" enctype="multipart/form-data">
       <div class="row form-group">
         <label>Upload Your Image</label>
         <input type="file" name="file" class="form-control">
       </div>
       <div class="row">
         <input type="submit" value="Upload Image!" name="submit" class="btn btn-primary">
       </div>
     </form> 
   </div>
 </div>
</div>