<html>
<head>
<style>
#header{
 height:100px;
 width:100px;
  }
/* Split the screen in half */
.split {
  height: 100%;
  width: 50%;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
  
}

/* Control the left side */
.left {
  left: 0;
  
  //background: linear-gradient(#e66465,#9198e5) ;
}

/* Control the right side */
.right {
  right:0;
	margin:-15px;
}

/* If you want the content centered horizontally and vertically */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

}
</style>
<
</head>
<body>
<h3>Exp 3</h3>


<br><br>
<hr>
        
<div class="split left">
  <div class="centered">
  <h1> INPUT DATA</h1>
     <form action="" method="get">
            Enter a number<input type="text" name="number" id="inputName">
			<input type="submit">
			</form>
			<hr>			
<?php

if(isset($_GET['number']))//to check if the user has enetered the number or not
	
{
	echo '<h1>' . "OUTPUT". '</h1>';
	echo"EVEN ODD",'<br>';
  $a=$_GET["number"];
  if($a%2==0)//to check if the given number is divisible by 2 or not
	  echo "The number is even";
  else
	  echo "The number is odd";
 ?>
 <hr >

   <h1 style="color:blue">Table of a number</h1>
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
 <h3>SUM OF SQUARE OF DIGITS</h3>
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
  </div>
  
</div>
<footer>Hello</footer>

<div class="split right">
    <?php
 echo "CODE",'<br>';
 show_source("exp3_1.php");
 
 ?>
  </div>
</div>
</body>
</html>