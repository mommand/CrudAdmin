<?php
if(@$_GET['lang'] == 'da')
{
	include('lang/da.php');
	echo "<link rel='stylesheet' href='assets/rtl.css'>";
}
else if(@$_GET['lang'] == 'pa')
{
	include('lang/pa.php');
	echo "<link rel='stylesheet' href='assets/rtl.css'>";
}
else
{
	include('lang/en.php');
	echo "<link rel='stylesheet' href='assets/ltr.css'>";
}
?>
<!DOCTYPE html>
<html dir="<?php echo $dir; ?>">
<head>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<title><?php echo $title; ?></title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed">
 <div class="container">
   <ul class="nav navbar-nav <?php echo $nav_float; ?>">
      <li><a href=""><?php echo $home; ?></a></li>
      <li><a href=""><?php echo $about; ?></a></li>
      <li><a href=""><?php echo $contact; ?></a></li>
      <?php
        if(@$_GET['lang'] == 'da')
        {
        	?>
        		<li><a href="index.php">English</a></li>
        		<li><a href="index.php?lang=pa">پښتو</a></li>
        	<?php
        }
        else if(@$_GET['lang'] == 'pa')
        {
        	?>
        		<li><a href="index.php">English</a></li>
                <li><a href="index.php?lang=da">دری</a></li>
        	<?php
        }
        else
        {
        	?>
        		<li><a href="index.php?lang=da">دری</a></li>
                <li><a href="index.php?lang=pa">پښتو</a></li>
        	<?php
        }
      ?>
     
      
      
   </ul>
 </div>
</nav>
<div class="container">
 <h4><?php echo $content;?></h4>
</div>
</body>
</html>