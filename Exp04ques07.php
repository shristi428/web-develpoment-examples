<<!DOCTYPE html>
<html>
<head>
<title>main page for my php lab </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css"href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
<div class="alignleft left ">
<ul> 
<li class="active"><a> mainpage</a></li>
</ul>
<ul class="active"> Experiment 1
<li><a href="C:\xampp\htdocs\phplabs\exp3\phpwebsite\mainpage.php">First webpage</a> </li></ul>
	</ul>
<ul > Experiment 2
	<li><a href="program1.php">Question 1</a></li>
	<li><a href="form1.php">Question 2</a></li>
	<li><a href="form2.php ">Question 3</a> </li>
	<li><a href="form3.php">Question 4</a> </li>
	<li><a href="form4.php">Question 5 </a></li>
	</ul>
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
Enter the number of students:-<input type="number_format" name="num">
<input type="submit" name="submit">
<?php
if(isset($_GET['submit'])){
	
        $no=$_GET['num'];

	    function show($no){
		if($no!=0){
		echo'NAME:-<input type="text" name="name" placeholder="Name"><br>';
        echo'CONTACT:-<input type="text" name="contact" placeholder="Contact"><br>';
        echo'EMAIL ID:-<input type="text" name="email" placeholder="Email ID"<br>';
	    $details=array("NAMES"=>array($_GET['name']),"Contacts"=>array($_GET['contact']),"Emails"=>array($_GET['email']));
		show($no-1);
		}
		else{
			echo'<input type="submit" name="next">'."<br>";
			if(isset($_GET['submit'])){
			     display($details);
			}
		}
		
	 }
	show($no);
	
	function display($details){
	echo"Details of the student is<br>";
	foreach($details as $temp){
		echo $temp[["NAMES"]["Contacts"]["Emails"]]."<br>";
	 }
	}
}
?>
</div>
</div>

<div  class="alignright right">
<?php 
show_source("Exp04ques07.php");
?>

</body>
</body>
</html>