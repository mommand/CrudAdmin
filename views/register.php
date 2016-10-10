<?php
session_start();
include('assets.php');
?>
<div class="container">
 <div class="col-md-6 col-md-offset-3">
     <div class="page-header">
     <h4 class="text-center">Register Yourself to get Membership</h4>
     </div>
  <?php
      if(isset($_SESSION['ERR']) && is_array($_SESSION['ERR']) && count($_SESSION['ERR'])>0)
      {
      	 echo "<div class='alert alert-danger'>";
      	 foreach ($_SESSION['ERR'] as  $errors) {
      	 	# code...
      	 	?>
      	 		<ul>
      	 		  <li><?php echo $errors; ?></li>
      	 		</ul>
      	 	<?php
      	 }
      	 echo "</div>";
      }
  ?>

 <form action="../controller/register_exec.php" method="POST">
 	<div class="row form-group">
 		<label>First Name:</label>
 		<input type="text" name="fname" class="form-control">
 	</div>
 	<div class="row form-group">
 		<label>Last Name:</label>
 		<input type="text" name="lname" class="form-control">
 	</div>
 	<div class="row form-group">
 		<label>Email:</label>
 		<input type="email" name="email" class="form-control">
 	</div>
 	<div class="row form-group">
 		<label>Password:</label>
 		<input type="password" name="password" class="form-control">
 	</div>
 	<div class="row form-group">
 		<label>Re-type Password:</label>
 		<input type="password" name="rpassword" class="form-control">
 	</div>
 	<div class="row form-group">
 		<input type="submit" value="Register!" class="btn btn-primary">
 	</div>

 </form>
  </div>
</div>