<!DOCTYPE html>
<html>
<head></head>
<body>
<form action="" method="get">
<input  type="date" name="DOB">
<input type= submit name="submit">

<?php
if(isset($_GET['submit'])){
	$dates=$_GET["DOB"];
    $pre=date("d/m/y");
	
	
	
	$d=explode("/" ,$dates);
	$t=explode("/" , $pre);
	
	$final=array("dat1"=>$d[0],"month"=>$d[1],"year"=>$d[2]);
	$final1=array("dat2"=>$t[0],"month2"=>$t[1],"year2"=>$t[2]);
     
	 
	
	
	
	
	
	
    
	
	
	
	
}

?>
</body>
</html>