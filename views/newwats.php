<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	// echo readfile('file.txt');

	// $myfile = fopen('file.php', 'r') or die('Unable to open file');
	// echo @fread($myfile, filesize('file3.php'));
	// fclose($myfile);

// $myfile = fopen('file.txt', 'r') or die('Unable to open file');
// 	echo @fgets($myfile);
// 	fclose($myfile);


	// $myfile = fopen('file.txt', 'r') or die('unable to open file');
	// while (!feof($myfile)) {
		
	// 	echo fgets($myfile)."<br>";
	// }

// get single character
// $myfile = fopen('file.txt','r') or die('unable to open file');
// while (!feof($myfile)) {
// 	# code...
// 	echo fgetc($myfile);
// }

// create new file 
$file = fopen('test.txt', 'w') or die('Unable to create file');
$text = "this is my text";
fwrite($file, $text);
$text = "this is the second text line \n";
fwrite($file, $text);
fclose($file);
?>
</body>
</html>