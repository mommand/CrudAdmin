<!DOCTYPE html>
<html>
<head>
	<title>File Handling</title>
</head>
<body>
<?php
   // echo readfile('file.txt');
   $myfile = fopen('file.txt', 'a') or die('Unable to open file');
   // echo @fread($myfile, filesize('file.php'));
   //  fclose($myfile);

   // echo fgets($myfile);

   // while(!feof($myfile))
   // {
   // 	echo fgets($myfile)."<br>";
   // }

   $mytext = " last added, this is my text for file writing";
   if(fwrite($myfile, $mytext))
   {
   	 while(!feof($myfile))
      {
     	echo fgets($myfile)."<br>";
      }
   }
   else{
   	echo " noting";
   }

?>
</body>
</html>