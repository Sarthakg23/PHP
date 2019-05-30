<!DOCTYPE html>
<html>
  <head><Title>Enter a number</Title>
   <link rel="stylesheet" href="s.css">
  </head>
  <body>
  <!DOCTYPE html>
<html>
  <head><Title>CALCULATOR</Title>
  </head>
  <body >
 <header>EXPERIMENT3 PART4</header>
  
 <divl>  <form action="" method="get">
            Input the First Number<input type="integer" name="num1" id="inputName"><br>
			Input the Second Number<input type="integer" name="num2" id="inputName"><br>
			<input type="submit" name="submit"><br>
			</form>
			<hr>
			  <?php
			  if(isset($_GET['num1']) and isset($_GET['num2'] ))//To check if the user has entered both numbers in the form or not.
			  {
  echo "PRIME NUMBER",'<br>';
  $flag=0;
  $i=0;
  $j=0;
   $n1=$_GET["num1"];
   $n2=$_GET["num2"];
   for($i=$n1;$i<=$n2;$i++)//loop for accessing numbers from Fisrt number till second number
   {
	   for($j=2;$j<$i;$j++)//loop for checking if the number is prime or not
	   {
		   if($i%$j==0)//
		   {
		   $flag++;//to count how many numbers are divisible by given number rather than 1 and the number itself
		   break;}
	   else 
		   continue;
	   }
	   if($flag==0)
	   {echo $i," is a prime number";
        echo '<br>';
        $flag=0;
	   }
	   else {
		   $flag=0;
	   continue;}
   }
			  
   ?>
   <hr>
     <?php
	 echo "DIVISIBLE BY 5",'<br>';
   $n1=0;
   $n2=0;
   $n1=$_GET["num1"];
   $n2=$_GET["num2"];
   for($i=$n1;$i<=$n2;$i++)//loop for accessing numbers from Fisrt number till second number
   {
	   if($i%5==0)//To check if the number is divisible by 5 or not
		   echo $i," is divisible by 5";
	   else
		   continue;
	   echo '<br>';
   }
			  }
   ?>
   <hr>
    <hr></divl>
	
 <divr><?php
 echo "CODE",'<br>';
 show_source("exp3_4.php");//To print the code of the php file
 ?></divr>
 <footer>
  <center><a href="index.php"><h1>HOMEPAGE</a></h1></center>
</footer>
			
   </body>
</html>
			