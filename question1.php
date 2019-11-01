<DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css"href="help.css">
<head>
<body>

<!--header of the page --> 
<div class="header"><h3>welcome to the Number System conversion page</h3></div>

<!--First Dropdownlist for Decimal-->
<div class="dropdown ">
 <button class="dropbtn topnav">Decimal</button>
 <div class="dropdown-content ">
 <a href="question1.php"><input type="submit" name="oper" value="dec1">decimal to binary</input> </a><br>
 <a href="question1.php"><input type="submit"name="oper" value="dec2">decimal to octal</input><br></a>
 <a href="question1.php"><input type="submit"name="oper" value="dec3">decinal to hexadecimal</input></a><br>
 </div></div>
 
 <!--second Dropdownlist for Binary-->
<div class="dropdown ">
 <button class="dropbtn">Binary</button>
 <div class="dropdown-content">
 <a href="question1.php"><input type="submit"name="oper" value="bin1">binary to decimal</input><br></a>
 <a href="question1.php"><input type="submit"name="oper" value="bin2">binary to octal</input><br></a>
 <a href="question1.php"><input type="submit"name="oper" value="bin3">binary to hexadecimal</input><br></a>
 </div></div>
 
 <!--third Dropdownlist for Octal-->
 <div class="dropdown  ">
 <button class="dropbtn ">Octal</button>
 <div class="dropdown-content">
 <a href="question1.php"><input type="submit"name="oper" value="oct1">octal to decimal</input><br></a>
 <a href="question1.php"><input type="submit"name="oper" value="oct2">octal to binary</input><br></a>
 <a href="question1.php"><input type="submit"name="oper" value="oct3">octal to hexadecimal</input><br></a>
 </div></div>
 
 <!--fourth Dropdownlist for Hexadecimal-->
 <div class="dropdown  ">
 <button class="dropbtn">Hexadecimal</button>
 <div class="dropdown-content">
 <a href="question1.php"><input type="submit"name="oper" value="hex1">hexadecimal to decimal</input><br></a>
 <a href="question1.php"><input type="submit"name="oper" value="hex2">hexadecimal to binary</input><br></a>
 <a href="question1.php"><input type="submit"name="oper" value="hex3">hexadecimal to octal</input><br></a>
 </div></div>
 
 <!--form is created to take input from the user-->
 <div class="centered">
 
<form action="" method="get">
<input type=text name="charater" placeholder="Enter the number"><br></input>
   <h2>Output</h2>


<!--PHP script for operations on the input-->
<?php
// store the input in a varaible. 
if(isset($_GET["oper"])){
	$x=$_GET["charater"];
	$opt=$_GET["oper"];
	$result;
	
	//if condtion for checking the options selected by user.
   
	if($opt=="dec1"){
		//convert the decimal number into binary.
	    $result=decbin($x);
	    echo '<b>'.$result.'</b>';
	    exit;
               }
    if($opt=="dec2"){
		//convert the decimal number into octal.
	    $result=decoct($x);
	    echo '<b>'.$result.'</b>';
	    exit;
               }
	if($opt=="dec3"){
		//convert the decimal number into hexadecimal.
	    $result=dechex($x);
	    echo '<b>'.$result.'</b>';
	    exit;
               }

	if($opt=="bin1"){
		//convert the binary number into decimal.
		$result=bindec($x);
		echo '<b>'.$result.'</b>';
		exit;
	        }
	if($opt=="bin2"){
		//convert the binary number into octal.
		echo base_convert($x,2,8);
		exit;
	        }

	if($opt=="bin3"){
		//convert the binary number into hexadecimal.
		echo base_convert($x,2,16);
		exit;
	              }
    if($opt=="oct1"){
		//convert the octal number into decimal.
	    $result=octdec($x);
		echo $result;
		exit;
        }
	if($opt=="oct2"){
		//convert the octal number into binary.
		echo base_convert($x,8,2);
		exit;
	    }
	if($opt=="oct3")
	{     //convert the octal number into hexadecimal.
		echo base_convert($x,8,16);
		exit;
	    }
	if($opt=="hex1"){
		//convert the hexadecimal number into decimal.
		$result=hexdec($x);
		echo $result;
		exit;
	    }
	if($opt=="hex2"){
		//convert the hexadecimal number into binary.
		echo base_convert($x,16,2);
		exit;
	    }
	if($opt=="hex3"){
		//convert the hexadecimal number into octal.
		echo base_convert($x,16,8);
		exit;
	     }
}
?>
</div>
</body>
</html>
