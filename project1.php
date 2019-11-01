<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.city {display:none}

.centered {
  position:relative;
  left: 20px;
  right:80px;
  transform: translate(-50%, -50);
  text-align: center;
  clear:both;
  float:center;
  margin-left:450px;
  margin-right:500px;
  margin-top:15px;
  padding-top:5px;
  padding-bottom:5px;
}

.left {
  left: 200px;
  right:400px;
  background-color:none;
  margin-top:12px;
}


div.alignleft{
   float:left;
   padding-top:5px;
   padding-right:10px;
   padding-left:10px;
   padding-bottom:5px;
   margin-left:0px;
   
   width:200px;
   height:500px;
</style>

<body>

<div class="w3-container">
  <h1>welcome to my PHP Lab Website HomwPage</h1>
  </div>

  <div class="w3-padding w3-xlarge w3-teal">
   <a href="#home" ><i class="fa fa-home"></i></a>
   <a href="#about"><button class="w3-btn w3-orange w3-xlarge">About US</button></a>
    Welcome!
  </div>
  
<div class="w3-dropdown-hover alignleft left">
    <button class="w3-button">Dropdown</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4  ">
      <a href="#" class="w3-bar-item w3-button">Link 1</a>
      <a href="#" class="w3-bar-item w3-button">Link 2</a>
      <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>
	</div>
	
	<div class="w3-dropdown-hover  alignleft left">
	    <button class="w3-button">Dropdown</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4 ">
      <a href="#" class="w3-bar-item w3-button">Link 1</a>
      <a href="#" class="w3-bar-item w3-button">Link 2</a>
      <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div></div>
	
	<div class="w3-dropdown-hover  alignleft left">
	    <button class="w3-button ">Dropdown</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4  ">
      <a href="#" class="w3-bar-item w3-button">Link 1</a>
      <a href="#" class="w3-bar-item w3-button">Link 2</a>
      <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>
  </div>
  

  
  
 
 <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black centered">Open Tabbed Modal</button>

<div id="id01" class="w3-modal">
 <div class="w3-modal-content w3-card-4 w3-animate-zoom">
  <header class="w3-container w3-blue"> 
   <span onclick="document.getElementById('id01').style.display='none'" 
   class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>
   <h2>Header</h2>
  </header>

  <div class="w3-bar w3-border-bottom">
   <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'London')">London</button>
   <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'Paris')">Paris</button>
   <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'Tokyo')">Tokyo</button>
  </div>

  <div id="London" class="w3-container city">
   <h1>London</h1>
   <p>London is the most populous city in the United Kingdom, with a metropolitan area of over 9 million inhabitants.</p>
   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div>

  <div id="Paris" class="w3-container city">
   <h1>Paris</h1>
   <p>Paris is the capital of France.</p>
   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>

  <div id="Tokyo" class="w3-container city">
   <h1>Tokyo</h1>
   <p>Tokyo is the capital of Japan.</p><br>
  </div>

  <div class="w3-container w3-light-grey w3-padding">
   <button class="w3-button w3-right w3-white w3-border" 
   onclick="document.getElementById('id01').style.display='none'">Close</button>
  </div>
 </div>
</div>



<script>
document.getElementsByClassName("tablink")[0].click();

function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}
</script>
 
  

</body>
</html> 
