<!DOCTYPE html>
<html>
<head>
<title>form1</title>
<link rel="stylesheet" type="text/css"href="style.css">
<link rel="stylesheet" type="text/css"href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css"href="style.css">

<style>
</style>
</head>
<body>
<div class="w3-container">
  <h1>welcome to my PHP Lab Website HomePage</h1>
  </div>
  <div class="w3-padding w3-xlarge w3-teal">
   <a href="mainpage.php" ><i class="fa fa-home"></i></a>
   <a href="#about"><button class="w3-btn w3-orange w3-xlarge">About US</button></a>
    Welcome!
  </div>


<div class="alignleft left">
<ul>
<li class="active"><a href="mainpage.php"> mainpage</a></li>
</ul>
<ul> Experiment 1
<li><a href="sample.php">First webpage</a> </li></ul>
	</ul>
<ul> Experiment 2
	<li><a href="program1.php">question 1</a></li>
	<li ><a href="form1.php">question 2</a></li>
	<li ><a href="form2.php">question 3</a> </li>
	<li> <a href="form3.php">question 4</a> </li>
	<li><a href="form4.php"> question 5 </a></li></ul>
<ul class="active"><b>Experiment 3</b>
    <li><a href="Exp04ques01.php"><b>Question1</b></a></li>
	<li><a href="Exp04ques02.php"><b>Question2</b></a></li>
	<li><a href="Exp04ques03.php"><b>Question3</b></a></li>
	<li><a href="Exp04ques04.php"><b>Question4</b></a></li>
	<li><a href="Exp04ques05.php"><b>Question5</b></a></li>
	<li><a href="Exp04ques06.php"><b>Question6</b></a></li>
	<li><a href="Exp04ques07.php"><b>Question7</b></a></li>
	</ul>
	<ul class="active"><b>Experiment 4</b>
    <li><a href="Exp05ques01a.php"><b>Question1</b></a></li>
	<li><a href="Exp05ques02.php"><b>Question2</b></a></li>
	<li><a href="Exp05ques03.php"><b>Question3</b></a></li>
	<li><a href="Exp05ques04.php"><b>Question4</b></a></li>
	<li><a href="Exp05ques05.php"><b>Question5</b></a></li>
	</ul>
		<ul class="active"><b>Experiment 5</b>
    <li><a href="Exp06ques01.php"><b>Question1</b></a></li>
	<li><a href="Exp06ques02.php"><b>Question2</b></a></li>
	</ul>
	<ul class="active"><b>Experiment 7</b>
    <li><a href="Exp07ques01.php"><b>Question1</b></a></li>
	<li><a href="Exp07ques02.php"><b>Question2</b></a></li>
	<li><a href="Exp07ques03.php"><b>Question3</b></a></li>
	</ul>
</div>


<div class="centered">
<form action="" method="get">
<input type="text" name="var1" placeholder="Integer One"><br>
 <input type ="text" name= "var2" placeholder="Integer Two"><br>
 <input type=radio name="oper" value="add">Addition </input><br>
 <input type=radio name="oper" value="sub">Subtraction</input>
 <input type=radio name="oper" value="div">Division </input><br>
 <input type=radio name="oper" value="mul">Multiplication</input>
 <input type=submit name='submit'></input>
</form>

<?php

if(isset($_GET['submit']))
{
$x=$_GET["var1"];
$y=$_GET["var2"];
$result;
$opt=$_GET["oper"];

   if($opt=="add"){
	    $result=$x+$y;
	    echo"the addtion os the above number is".$result;
	    exit;
               }

	if($opt=="sub"){
		$result=$x-$y;
		echo"the subtration of the above given number is".$result;
		exit;
	               }

	if($opt=="div"){
		$result=$x/$y;
		echo"the division of the above given number is".$result;
		exit;
	              }
    if($opt=="mul"){
	    $result=$x*$y;
		echo"the multiplication of the above given number is".$result;
		exit;
                  }
}
?>
</div>

<div class="alignright right">
<?php
  show_source("form1.php");
?>
</div>

</body>
</html>