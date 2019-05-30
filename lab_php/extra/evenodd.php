<!DOCTYPE html>
<html>
  <head><Title>Even Odd</Title>
  </head>
  <body>
	<?php
  $a=$_GET["number"];
  if($a%2==0)
	  echo "The number is even";
  else
	  echo "The number is odd";
 ?>
 </body>
 </html>