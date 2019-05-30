<html>
<head>
<title>EXPERIMENT 3 </title>
</head>
<body>
<style>

	
header {
  width:100%;
  text-align: center;
  background: #1abc9c;
  color: black;
  font-size: 30px;
  border-style: double;
}

divr
{
	height:610px;
	width:630px;
	overflow:auto;
	background-color:yellowgreen;
	float:right;
	padding-left:20px;
  position:absolute;
  

}
divl
{   
	float:left;
	background: linear-gradient(#e66465,#9198e5);	
	height:610px;
	width:670px;
	overflow:auto;
    padding-left:20px;
	
	
}
div3{
	height:570px;
	width:;
	float:right;
	overflow:auto;
	padding-left:400px;
	padding-right:10px;
	position:absolute;
	background: linear-gradient(#e66465,#9198e5) 
	
	
}
ld
{    float:left;
position:center;
bottom:50px;
left:30px;
dispaly:block;
	background: grey;
}
div4{
	height:100px;
	width:100px;
	float:left;
	background-color:olive;
	padding:100px 800px 100px 100px;
	overflow:auto;
	position:absolute;
}
	
h1
{
	
	text-shadow: 0 0 3px #FF0000;
}
<!--divc
{
	 position: relative;
	text-align: center;
	 top: 50%;
  left: 50%;
}-->
 </style>
 <header>EXPERIMENT3</header>
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

  <divr><?php show_source("exp3_2.php"); ?></divr>

  </body>
  </html>