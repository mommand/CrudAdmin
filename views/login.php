<?php
  session_start();
  include('assets.php');
?>
<div class="container">
   <div class="row">
     <div class="col-md-4 col-md-offset-4" style="margin-top:70px;">

      <?php
        if(isset($_SESSION['err']) && is_array($_SESSION['err']) && count($_SESSION['err']) >0)
        {
           ?>
           	<div class="alert alert-danger">
           	  <ul>
           	    <?php
           	     foreach($_SESSION['err'] as $err)
           	     {
           	     	echo "<li>".$err."</li>";
           	     }
           	     session_destroy();
           	    ?>
           	  </ul>
           	</div>
           <?php
        }
        if(isset($_GET['status']) && $_GET['status'] == 'fail')
        {
        	echo "<div class='alert alert-danger'>Wrong username and password combination!</div>";
        }
      ?>
        <form action="../controller/login_exec.php" method="post">
        	<div class="row form-group">
        		<label>User Name:</label>
        		<input type="text" name="username" placeholder="Email" class="form-control">
        	</div>
        	<div class="row form-group">
        		<label>Password:</label>
        		<input type="password" name="password" placeholder="password" class="form-control">
        	</div>
        	<div class="row form-group">
        	  <input type="submit" value="login" class="btn btn-primary">
        	</div>
        </form>
     </div>
   </div>
</div>
