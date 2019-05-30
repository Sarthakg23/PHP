<!DOCTYPE html>
<html>
  <head><Title>No Divisible by 5</Title>
  </head>
  <body>
  <?php
   $n1=0;
   $n2=0;
   $n1=$_GET["num1"];
   $n2=$_GET["num2"];
   for($i=$n1;$i<=$n2;$i++)
   {
	   if($i%5==0)
		   echo $i," is divisible by 5";
	   else
		   continue;
	   echo '<br>';
   }
   ?>
   </body>
</html>
			