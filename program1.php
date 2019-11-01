<!DOCTYPE html>
<html>

<head> 
<title> first program</title>
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
<li class="active"><a href="mainpage.php"><b> mainpage</b></a></li>
</ul>
<ul class="active"><b> Experiment 1</b>
<li><a href="sample.php"><b>First webpage</b></a> </li></ul>
	</ul>
<ul class="active"> <b>Experiment 2</b>
	<li><a href="program1.php"><b>question 1</b></a></li>
	<li ><a href="form1.php"><b>question 2</b></a></li>
	<li ><a href="form2.php"><b>question 3</b></a> </li>
	<li> <a href="form3.php"><b>question 4</b></a> </li>
	<li><a href="form4.php"><b> question 5 </b></a></li></ul>
	
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


<div  class="centered ">
<form action="" method="GET">
<input type="text" name="num" placeholder="Number">
 <input type=submit name='submit'>
 </form>
<?php
if(isset($_GET['submit'])){
$number=$_GET["num"];
$i;
$mul;
$sum;
$res=0;
function check($number){ 
   echo"<h3> even or odd</h3>";
   echo'<br>';
    if($number % 2 == 0){ 
        echo "Even";  
		echo'<br>';
    } 
    else{ 
        echo"Odd"; 
		echo'<br>';
 }
   }
check($number); 
function table($number)
{
	echo'<h3> table of the entered number</h3>';
	echo'<br>';
for($i=1;$i<=10;$i++){
	$mul=$number*$i;
	echo $number."*".$i."=".$mul;
	echo'<br>';
}
echo'<br>';
}
table($number);
  
	echo"<h3> sum of square of digits of entered number. </h3>";
	echo'<br>';
	for($i=0;$i<strlen($number);$i++)
	{
		$sum=(int)$number[$i]*(int)$number[$i];
		$res=$res+$sum;
		echo'';
	}
	echo "The sum of square of digites is:-  ".$res."<br>";
}
?>
</div>

<div class="alignright right" >
<?php
show_source("program1.php");
?>
</div>


</body>
</html>
