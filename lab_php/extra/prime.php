<!DOCTYPE html>
<html>
  <head><Title>Prime Number</Title>
  </head>
  <body>
  <?php
   $n1=0;
   $n2=0;
   $n1=$_GET["num1"];
   $n2=$_GET["num2"];
   for($i=$n1;$i<=$n2;$i++)
   {
	   for($j=2;$j<$i;$j++)
	   {
		   if($i%$j==0)
		   $flag++;
	   else
		   continue;
	   }
	   if($flag==0)
	   {echo $i," is a prime number";
	   echo '<br>';}
	   else
		   continue;
   }
   ?>
   </body>
</html>
		