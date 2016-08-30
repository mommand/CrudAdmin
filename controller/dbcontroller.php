<?php

		$connect = @mysql_connect("localhost","root","root") or die("Can not connection to mysql server");
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
						echo "Database has been created";
					}
					else
					{
						echo mysql_error();
					}
				}

			}
			
		}
		else
		{
			echo mysql_error();
		}


?>