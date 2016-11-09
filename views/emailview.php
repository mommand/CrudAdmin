<!DOCTYPE html>
<html>
<head>
	<title>Email View</title>
	<?php
	  include('assets.php');
	?>
</head>
<body>
<div class="container">
  <div class="row col-md-4 col-md-offset-4">
    <form action="../controller/email.php" method="post">
    <div class="row form-group">
      <label>To</label>
      <input type="text" name="to" class="form-control">
    </div>
    <div class="row form-group">
      <label>subject</label>
      <input type="text" name="subject" class="form-control">
    </div>
    <div class="row form-group">
      <label>Message</label>
      <textarea name="msg" rows="12" class="form-control"></textarea>
    </div>
    	
      <input type="submit" value="Send" class="btn btn-primary">
    </form>
  </div>
</div>
</body>
</html>