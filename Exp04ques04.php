<!DOCTYPE html>
<html>
<head>
<title>question 4 of 4
</title>
<style>
.error {color: #FF0000;}
</style>
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
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
Name:-*<input type='text requried' name="name" placeholder="Course Name"></input>
Tuition Fees:-*<input type='text requried' name="fees" placeholder="Tuition fees "></input>
Travelling:-<input type='text ' name="travell" placeholder="Travelling "></input>
Hostel Fees:-<input type='text' name="Hostel" placeholder="Hostel fees"></input>
Mess Fees:-<input type='text' name="Mess" placeholder="Mess Fees"></input>
Libaray Fees:-*<input type='text requried' name="Lib" placeholder="Libaray"></input>
ID Card:-*<input type='text requried' name="id" placeholder="ID CARD"></input>
Exam Fees;-*<input type='text requried' name="Exam" placeholder="Exam Fees"></input>
others;-<input type='text' name="others" placeholder="Others"></input>
<input type='submit' name="submit"></input>

<?php 
if(isset($_GET['submit'])){
	$nameErr=$TuitionErr=$IDErr=$libErr=$ExamErr=" ";
	$travellErr=$hostelerr=$MessErr=$otherErr=" ";
	$sum=0;
	
	if($_SERVER["REQUEST_METHOD"]=="GET"){
		if(empty($_GET["name"])){
			$nameErr="name is requried";
			echo$nameErr."<br>";
		}
		else{
			$names=$_GET["name"];
		}
		if(empty($_GET["fees"])){
			$TuitionErr="Tuition Fees is requried";
			echo$TuitionErr."<br>";
		}
		else{
			$tut=$_GET["fees"];
			$sum+=$tut;
		}
		if(empty($_GET["id"])){
			$IDErr="ID Card is requried";
			echo$IDErr."<br>";
		}
		else{
			$ID=$_GET["id"];
			$sum+=$ID;
			
		}
		if(empty($_GET["Lib"])){
			$libErr="Libaray fees is requried";
			echo$libErr."<br>";
		}
		else{
			$liba=$_GET["Lib"];
			$sum+=$liba;
		}
		if(empty($_GET["Exam"])){
			$ExamErr="Exam fees is requried";
			echo$ExamErr."<br>";
		}
		else{
			$Exams=$_GET["Exam"];
			$sum+=$Exams;
			
		}
		if(empty($_GET["travell"])){
			$travellErr=" ";
		}
		else{
			$travells=$_GET["travell"];
			$sum+=$travells;

		}
		if(empty($_GET["Hostel"])){
			$hostelerr=" ";
		}
		else{
			$hostels=$_GET["Hostel"];
            $sum+=$hostels;
			
		}
		if(empty($_GET["Mess"])){
			$MessErr=" ";
		}
		else{
			$mess=$_GET["Mess"];
			$sum+=$mess;
		
		}
		if(empty($_GET["others"])){
			$otherErr=" ";
		}
		else{
			$others=$_GET["others"];
			$sum+=$others;
	    }
		echo"<h3>The total sum of the fees is</h3> ".$sum;
		}
}

?>
</div>
<div class="alignright right" >
<?php
show_source("Exp04ques04.php");
?>
</div>

</body></html>