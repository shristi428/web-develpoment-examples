<DOCTYPE html>
<html>
	<head>
		<title>Assignment 1</title>
	</head>
	<body>
		
		<img src="img.jpg" alt="Area of given figure in Question 1.">
		
		<?php
			
			function rectangle($l,$b)
			{
				$a=$l*$b;
				return $a;
			}
			function square($l)
			{
				$a=$l*$l;
				return $a;
			}
			function triangle($l)
			{
				$a=($l*$l)*(sqrt(3))/4;
				return $a;
			}
			function circle($r)
			{
				$a=$r*$r*22/7;
				return $a;
			}
			
			echo '<br>';
			echo '<br>';
			echo "My roll number : R100217073";
			echo '<br>';
			echo '<br>';
			echo "given dimensions:";
			echo '<br>';
			echo "S1: 3";
			echo '<br>';
			echo "S2: 7";
			echo '<br>';
			echo "S3: 2.5";
			echo '<br>';
			echo "S4: 3";
			echo '<br>';
			echo "S5: 73";
			echo '<br>';
			echo "S6: 73";
			echo '<br>';
			echo "S7: 1.5";
			echo '<br>';
			echo '<br>';
			
			/*Dimensions for rectangle 1.
			length=(S1+S2)=10cm
			width=(S3+S7)=4cm*/
			$a1=rectangle(10,4);
			
			/*Dimensions for square 1.
			length=S4=3cm*/
			$a2=square(3);
			
			/*Dimensions for square 1.
			length=S5=73cm
			width=S6=73cm*/
			$a3=square(73);
			
			/*Dimensions for triangle 1.
			length=S1=3cm*/
			$a4=triangle(3);
			
			/*Dimensions for triangle 1.
			length=S2=7cm*/
			$a5=triangle(7);
			
			/*Dimensions for semi-circle 1.
			diameter=S3=2.5cm
			radius=1.25cm*/
			$a6=circle(1.25)/2;
			
			/*Dimensions for semi-circle 2.
			diameter=S7=1.5cm
			radius=0.75cm*/
			$a7=circle(0.75)/2;
			
			/*Dimensions for semi-circle 3.
			diameter=(S3+S7)=4cm
			radius=2cm*/
			$a8=circle(2)/2;
			
			//Area of the given figure.
			$area=$a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8;
			echo "Area of displayed Figure is:   ",$area,"   cm square";
		?>
	</body>
</html>