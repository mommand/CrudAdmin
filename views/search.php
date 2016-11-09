<!DOCTYPE html>
<html>
<head>
	<title>Search News</title>
	<?php
    include('assets.php');

   ?>
   <script type="text/javascript">
   	 function search(str)
   	 {
   	 	if(str == "")
   	 	{
   	 		document.getElementById('result').innerHTML = "";
   	 		return;
   	 	}
   	 	else
   	 	{
   	 		var xmlhttp = new XMLHttpRequest();
   	 		xmlhttp.onreadystatechange = function(){
   	 			// check readystate 
   	 			if(this.readyState == 4 && this.status == 200)
   	 			{
   	 				document.getElementById('result').innerHTML = this.responseText;
   	 			}
   	 		}
   	 	  xmlhttp.open("GET",'search_exec.php?q='+str,true);
   	 	  xmlhttp.send();
   	 	}
   	 }
   </script>
</head>

<body>

<div class="container">
 <div class="row">
   <div class="col-md-4 col-md-offset-4">
     <form>
       <div class="row form-group">
         <label>Search news</label>
         <input type="text" id="keyword" class="form-control" placeholder="Please Type your Keyword" onkeyup="search(this.value);">
       </div>
     </form> 
   </div>
 </div>
 <div id="result" class="row">
 <?php
 	include('../config/connection.php');
		mysql_select_db('newsup');
		$query = "SELECT * FROM news";

		$run_query = mysql_query($query);
		if($run_query)
		{
			echo "<table class='table table-bordered'>
					<tr>
					 <th>Title</th>
					 <th>Author</th>
					 <th>Location</th>
					</tr>";
			while ($row = mysql_fetch_array($run_query)) {
				?>
					<tr>
						<td><?php echo $row['title']; ?></td>
						<td><?php echo $row['author']; ?></td>
						<td><?php echo $row['location']; ?></td>
					</tr>
				<?php
			}
			echo "</table>";
		}
		else
		{
			echo mysql_error();
		}
		?>
 </div>
</div>
</body>
</html>