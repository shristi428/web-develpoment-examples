<DOCTYPE html>
<html>
<head></head>
<body>
<form action="" method="GET">
<input type="text" name="roll">
<input type="text" name="roll2">
<input type="text" name="roll3">
<input type=submit name="submit">
<br>

<?php 
if(isset($_GET['submit']))
{
	$a=$_GET['roll'];
	$b=$_GET['roll2'];
	$c=$_GET['roll3'];
	$s1=(double)$a;
	var_dump($s1);
	echo'<br>';
	$s2=(double)$b;
	var_dump($s2);
	echo'<br>';
	$s3=(double)$c;
	var_dump($s3);
	echo'<br>';
	echo $s1;
	echo'<br>';
	echo $s2;
	echo'<br>';
	echo $s3;
	echo'<br>';//
	
}
?>