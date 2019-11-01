<!DOCTYPE html>
<html>
<head>
<title>question 1 of 3
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css"href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css"href="style.css">
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
<h3>Enyter the series of numbers </h3>
<input type="text" name="arr">
<input type="submit" name="submit">
<?php
if(isset($_GET['submit'])){
$num=$_GET['arr'];

function maxmin($num){
$temp=explode(',',$num);
$max=$temp[0];
$min=$temp[1];
foreach($temp as $sort){
	if($sort>$max){
		$max=$sort;
		
	}
	else if($sort<$min){
		$min=$sort;
	}
}
  echo"<b>maximum number is</b> ".$max;
  echo'<br>';
	echo"<b>minimum number is</b> ".$min;
}

   maxmin($num);
}
?>

</div>
<div class="alignright right" >
<?php
show_source("Exp04ques01.php");
?>
</div>
</body>
</html>