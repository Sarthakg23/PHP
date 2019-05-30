<!DOCTYPE html>
<html>
  <head><Title>Sum</Title>
  </head>
  <body b>
  
    <h1 style="color:blue">ADDITION OF TWO NUMBERS</h1>
	 <form action="" method="get">
            Enter first number<input type="number" name="num3" id="inputName">
			Enter second number<input type="number" name="num4" id="inputName">
			<input type="submit">
			</form>
	<?php
	if(isset($_GET['num3'],$_GET['num4']))
	{
	
  $a=$_GET['num3'];
  $b=$_GET['num4'];
  $sum=$a+$b;
	echo "SUM of ", $a,"and", $b,"is",$sum;
	}
  ?>
  </body>
  </html>