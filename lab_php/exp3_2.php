<!DOCTYPE html>
<html>
  <head><Title>CALCULATOR</Title>
   <link rel="stylesheet" href="s.css">
  </head>
  <body >
 <header>EXPERIMENT3 PART2</header>
	<divl> <form action="" method="get">

<form>
        Enter first number<input type="number" name="num1" id="inputName"><br>
		Enter second number<input type="number" name="num2" id="inputName"><br>
         <input type="radio" name="cal" value="add">ADD
         <br>
         <input type="radio" name="cal" value="subtract">SUBTRACT
		 <br>
		 <input type="radio" name="cal" value="multiply">MULTIPLY
		 <br>
		 <input type="radio" name="cal" value="division">DIVISION
		 <br>
		 <input type="submit",name="submit">
		   </form>
		   <hr>
		 <?php
		 if(isset($_GET['cal']))
		 {
			 $ch=$_GET['cal'];
			 $a=$_GET['num1'];
			 $b=$_GET['num2'];
			 echo "OUTPUT",'<br>';
			 switch($ch)
			 {
				 case 'add':
				 {
					$sum=$a+$b;
                    echo $sum;
					break;
				 }
                 case 'subtract':
				 {
				 	$sub=$a-$b;
                    echo $sub;
					break;
				 }
				 case 'multiply':
				 {
				 	$mul=$a*$b;
                    echo $mul;
					break;
				 }
				 case 'division':
				 {
				 	$div=$a/$b;
                    echo $div;
					break;
				 }
			 }
		 }
			 ?>
			  <hr>
			  </divl>
 <divr><?php
 echo "CODE",'<br>';
 show_source("exp3_2.php");
 ?></divr>
 <footer>
  <center><a href="index.php"><h1>HOMEPAGE</a></h1></center>
</footer>
	  </body>
	  </html>
	  