<html>
<head>
<title>EXPERIMENT 3 </title>
 <link rel="stylesheet" href="s.css">
</head>
<body>
 <header>EXPERIMENT3 PART1</header>
 <divl><h1> INPUT DATA</h1><form action="" method="get">
            Enter a number<input type="text" name="number" id="inputName">
			<input type="submit">
			</form>
			<hr>			
<?php
if(isset($_GET['number']))//to check if the user has enetered the number or not
	
{
	echo '<h1>' . "OUTPUT". '</h1>';
	echo'<h1 style="color:blue">',"EVEN ODD",'</h1>','<br>';
  $a=$_GET["number"];
  if($a%2==0)//to check if the given number is divisible by 2 or not
	  echo "The number is even";
  else
	  echo "The number is odd";
 ?>
 <hr>

   <h1 style="color:blue" >Table of a number</h1>
	<?php
  $a=$_GET["number"];
  for($i=1;$i<=10;$i++)//to access numbers from 1 to 10 to print the table
  {
	  $m=$a*$i;
	  echo $a,"*",$i,"=",$m;
	  echo '<br>';
  }
 ?>
 <hr>
 <h1 style="color:blue">SUM OF SQUARE OF DIGITS</h1>
 	<?php
	$m=0;
	$sum=0;
  $a=$_GET["number"];
  for($i=0;$i<strlen($a);$i++)//to run a loop till the string( enetered number) length
  {
	  $m=(int)$a[$i]*(int)$a[$i];//calculating square of the element at each index by type casting string into int
	  $sum=$sum+$m;//Adding the square result to get the sum
  }
  echo $sum,'<br>';
}
 ?>

 </divl>
 
 
 
  <divr><?php show_source("exp3_1.php"); ?></divr>
  <footer>
  <center><a href="index.php"><h1>HOMEPAGE</a></h1></center>
</footer>

  </body>
  </html>