<DOCTYPE html>
<html>
<head></head>
<body>
<form action="" method="GET">
<input type="text" name="roll">
<input type=submit name="submit">
<?php
if(isset($_GET["submit"])){
	$rolls=$_GET["roll"];
	//$r=number_format($rolls);
	$e=explode(" ",$rolls);
	$c=count($e);
	var_dump(var_dump($e,$c));
	echo'<br>';
	for($i=0;$i<$c;$i++){
		echo $e[$i];
		echo'<br>';
	}
	
} 
?>
</body>
</html>