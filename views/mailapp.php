<!DOCTYPE html>
<html>
<head>
<?php
 include('assets.php');
?>
	<title>Mail Application</title>

</head>
<body>
 <div class="container">
  <div class="col-md-6 col-md-offset-3">
  <form action="../controller/sendmail.php" method="post">
   <div class="row form-group">
     <label>Subject</label>
     <input type="text" name="subject" class="form-control">
   </div>
   <div class="row form-group">
     <label>To</label>
     <input type="text" name="to" class="form-control">
   </div>

   <div class="row form-group">
     <label>body</label>
     <textarea name="body" class="form-control"></textarea>
   </div>

	     <input type="submit"  class="btn btn-primary">
	   
   </form>
 </div>

</body>
</html>