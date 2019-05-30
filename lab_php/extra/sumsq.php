<!DOCTYPE html>
<html>
  <head><Title>Sum </Title>
  </head>
  <body>
	<?php
	$m=0;
	$sum=0;
  $a=$_GET["number"];
  for($i=0;$i<=strlen($a);$i++)
  {
	  $m=(int)$a[$i]*(int)$a[$i];
	  $sum=$sum+$m;
  }
  echo $sum;
 ?>
 </body>
 </html>