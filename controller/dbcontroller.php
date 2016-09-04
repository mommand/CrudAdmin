<?php

		include ('../config/connection.php');
		if($connect)
		{
			$dbname = @$_POST['dbname'];
			if(isset($dbname))
			{
				if($dbname == '')
				{
					echo "Please Enter the Databaes name";
				}
				else
				{
					$query = 'CREATE database '.$dbname;
					$run_query = mysql_query($query);
					if($run_query)
					{
						header('location:../views/index.php?status=success');
					}
					else
					{
						header('location:../views/index.php?status=failur');
					}
				}

			}
			
		}
		else
		{
			echo mysql_error();
		}


?>