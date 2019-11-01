<!DOCTYPE html>
<html>
<head>
<title>question 5
</title>
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
<li class="active"><a href="mainpage.php"> mainpage</a></li>
</ul>
<ul> Experiment 1
<li><a href="sample.html">First webpage</a> </li></ul>
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

<div  class="centered ">
<form action="" method="GET">
<input type="text" name="num" placeholder="Integer">
 <input type=submit name='submit' >
 </form>
<?php 
if(isset($_GET['submit'])){
	$s=$_GET["num"];
	

// PHP program to print 
// berth type of a provided 
// seat number. 
// function to print berth type 
function berth_type($s)  
{  
    if ($s > 0 && $s < 73) 
    { 
        if ($s % 8 == 1 ||  
            $s % 8 == 4) 
        { 
            echo sprintf("<b>%d is lower " . 
                          "berth\n</b>", $s); 
        } 
        else if ($s % 8 == 2 ||  
                 $s % 8 == 5) 
        { 
            echo sprintf("<b>%d is middle ". 
                          "berth\n</b>", $s); 
        } 
        else if($s % 8 == 3 || 
                $s % 8 == 6) 
        { 
            echo sprintf("<b>%d is upper " . 
                          "berth\n</b>", $s); 
        } 
        else if($s % 8 == 7) 
        { 
            echo sprintf("<b>%d is side lower ". 
                              "berth\n</b>", $s); 
        } 
        else
        { 
            echo sprintf("<b>%d is side upper ". 
                              "berth\n</b>", $s); 
        } 
    } 
    else
    { 
        echo sprintf("%d invalid seat ".  
                        "number\n", $s); 
    } 
}
berth_type($s);
 } 
?>
</div>
<div class="alignright right" >
<?php
show_source("form4.php");
?>

</body>
</html>