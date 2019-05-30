<!DOCTYPE html>
<html>
  <head><Title>TRAIN SEAT TYPE</Title>
  </head>
  <body >
  <!DOCTYPE html>
<html>
  <head><Title>CALCULATOR</Title>
   <link rel="stylesheet" href="s.css">
  </head>
  <body >
 <header>EXPERIMENT3 PART5</header>
	<divl> <form action="" method="get">
        Enter seat number<input type="text" name="seat"><br>
		 <input type="submit",name="submit">
		   </form>
		   <hr>
	<?php
			
			if(isset($_GET['seat']))
			{
				$x= $_GET['seat'];
				
				if($x<1 || $x>72)
				{
					echo"Invalid input";
				}
				else
				{
					switch ($x)
					{
						case($x % 8 == 1 ||  $x % 8 == 4) :
						echo"lower birth";
						break;
						case($x % 8 == 2 ||  $x % 8 == 5) :
						echo"middle birth"; 
						break;
						case($x % 8 == 3 || $x % 8 == 6) :
						echo"upper birth"; 
						break;
						case($x % 8 == 7) :
						echo"side lower birth";
						break;
						case($x % 8 == 0) :
						echo"Side upper birth";
						break;
					}
				}
			}
		?>
			  <hr></divl>
 <divr><?php
 echo "CODE",'<br>';
 show_source("exp3_5.php");
 ?></divr>
 <footer>
  <center><a href="index.php"><h1>HOMEPAGE</a></h1></center>
</footer>
	  </body>
	  </html>
	  