<!DOCTYPE html>
<html>
<head>
<title>question 3of 4
</title>
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
<form action="" method="GET">
      <input type="text" name="name" placeholder="FullName"></input>
      <input type=radio name="Gender" value="Male">Male</input>
      <input type=radio name="Gender" value="Female">Female</input>
      <input type=submit name="submit"><br>
<?php
if(isset($_GET['Gender'])){
	$name=$_GET['name'];
	$f=$_GET['Gender'];

	function fullname($name){
		$f=" ";$l=" "; $m=" "; $final=" ";
		$n=explode(" " ,$name);
		$c=count($n);
		for($i=0;$i<$c;$i++){
			if($i==($c-1)&& $i!=0){
				$l=$l.ucfirst($n[$i]);
			}
			else if($i>=1&&$i<$c){
				$m=$m.ucfirst($n[$i]);
			}
			else {
				$f=$f.ucfirst($n[$i]);
			}
			
		}
		echo"<b>First name is </b>".$f;
		echo'<br>';
		echo"<b>Middle name is </b>".$m;
		echo'<br>';
		echo"<b>Last name is</b> ".$l;
		
	}
	fullname($name);
	
	
	function volspa($name){
		$vowels=0;
		$spaces=0;
		$vowlesarr=array('a','A','e','E','i','I','o','O','u','U');
		$sp=array(" ");
		$c=strlen($name);
		for($i=0;$i<$c;$i++){
			if(in_array($name[$i],$vowlesarr)){
				$vowels++;
			}
			else if(in_array($name[$i],$sp)){
				$spaces++;
			}
		}
		echo'<br>';
		echo"<b>No of vowels</b> ".$vowels;
		echo'<br>';
		echo"<b>No of white spaces</b> ".$spaces;
	}
	
	volspa($name);
	
	
	echo'<br>';
	
	function up($name){
		$new= strtoupper($name);
		echo"<b> The Upper case form of the String </b>".$new;
	}
	up($name);
	echo'<br>';
	
	function display($name,$f){
	
		
		if($f=="Female"){
			echo"<b>Mrs.</b>".strtoupper($name);
		}
		else if($f=="Male"){
			echo"<b>Mr.</b>".strtoupper($name);
		}
	}
	display($name,$f);
	if(ctype_alpha($name))
	{
	 	
	}
}
?>
</div>


<div class="alignright right" >
<?php
show_source("Exp04ques03.php");
?>
</div>

</body>
</html>