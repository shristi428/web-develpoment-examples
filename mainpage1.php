<!DOCTYPE html>
<html>
<head>
<title>main page for my php lab </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
   <a href="#about"> About US | </a>
    Welcome!
	</div>
	
<br>

<div class="row">
  <div class="column" style="background-color:#63FECF;">
   <a href="sample.php"> <h2>Experiment 1</h2> </a>
   
  </div>
  <div class="column" style="background-color:#86FEDA ;">
<a href="program1.php"><h2>Experiment 2</h2></a>
 
  </div>
</div>

<div class="row">
  <div class="column" style="background-color:#B7FEE8;">
   <a href="Exp04ques01.php"> <h2>Experiment 3</h2> </a>
  </div>
  <div class="column" style="background-color:#DBFDF3 ;">
   <a href="Exp05ques01a.php"> <h2>Experiment 4</h2></a>
  </div>
</div>
<div class="row">
  <div class="column" style="background-color:#B7FEE8;">
   <a href="Exp06ques01.php"> <h2>Experiment 5</h2> </a>
  </div>
  <div class="column" style="background-color:#DBFDF3 ;">
   <a href="Exp07ques01.php"> <h2>Experiment 6</h2></a>
  </div>
</div>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
<div class="container">
<div class="content">
    <h1>About this page</h1>
    <h5>Here you see some links to the different experiments.<br> Click on them to select any <b>Experiment</b> from the list</h5>
  </div>
</div>

</body>
</html>

