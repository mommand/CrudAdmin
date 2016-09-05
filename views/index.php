<!DOCTYPE html>
<html>
<head>
	<title>MyAdmin</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	
</head>
<body>
  <div class="container">
    <div class="row" style="margin-top:60px;">
     <?php
       if(@$_GET['status'] == 'success')
       {
            echo '<div class="alert alert-success">Your Database Has been successfully Created</div>';
       }
       if(@$_GET['status'] == 'failur')
       {
          echo '<div class="alert alert-danger">Not Created Error</div>';
       }
       if(@$_GET['status'] == 'drop-success')
       {
         $dbname = $_GET['dbname'];
         echo '<div class="alert alert-success">'.$dbname. '  Database Has been successfully Droped</div>';
       }
       if(@$_GET['status'] == 'drop-failur')
       {
         echo '<div class="alert alert-danger">Has not been Droped!</div>';
       }
       else
       {
        
       }
     ?>
      <div class="col-md-4 col-md-offset-4">
        <form action="../controller/dbcontroller.php" method="post">
        <fieldset>
        <legend>Databaes Creaton From</legend>
          <div class="form-group">
            <label>Enter Your Database Name:</label>
            <input type="text" name="dbname" class="form-control">
          </div>
          <div class="form-group">
           <input type="submit"  value="Create" class="btn btn-primary">
          </div>	
          </fieldset>
        </form>
      </div>
    </div>

    <div class="page-header"><h4>List of Databases</h4></div>
    <?php
     include '../config/connection.php';
     $query = mysql_query("show databases");
     ?>
     	<table class="table table-bordered">
     	<tr>
     		<th>Database Name</th>
     		<th colspan="2">More Actions</th>
     	</tr>
     <?php
     while($row = mysql_fetch_array($query))
     {
     	?>
     		<tr>
     			<td><?php echo $row['Database']; ?></td>
     			<td><a href="../controller/drop.php?dbname=<?php echo $row['Database']; ?>" onclick="return confirm('Do you Want To Drop this Database?');">Drop</a></td>
     			<td><a href="../controller/showtables.php?dbname=<?php echo $row['Database'];?>">Show Tables</a></td>
     		</tr>
     	 <?php
     }
     ?>
      </table>
  </div>
</body>
</html>