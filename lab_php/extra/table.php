<!DOCTYPE html>
<html>
  <head><Title>Table</Title>
  </head>
  <body>
<h1 style="color:blue">Table of a number</h1>
	<?php
  $a=$_GET["number"];
  for($i=1;$i<=10;$i++)
  {
	  $m=$a*$i;
	  echo $a,"*",$i,"=",$m;
	  echo '<br>';
  }
 ?>
 </body>
 </html>