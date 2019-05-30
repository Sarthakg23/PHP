<html>
<head>
<title>Swapping</title>
 <link rel="stylesheet" href="s.css">
</head>
<body>
<!DOCTYPE html>
<html>
  <head><Title>CALCULATOR</Title>
  </head>
  <body >
 <header>EXPERIMENT3 PART3</header>
 <divl><form action="" method="get">
            Enter first string<input type="text" name="str1" id="inputName"><br>
			 Enter second string<input type="text" name="str2" id="inputName"><br>
			<input type="submit">
			</form>
			<hr>			
			<?php
			
			if(isset($_GET['str1']) and isset($_GET['str2']))
			{
				function swap1($first,$second)/*call by value*/
				{
					$t=$first;
					$first=$second;
					$second=$t;
					
				}
				$a=$_GET['str1'];
				$b=$_GET['str2'];
				echo '<h1>',"CALL BY VALUE",'</h1>','<br>';
				echo "BEFORE SWAPPING",'<br>';
				echo "FIRST STRING IS ",$a," SECOND STRING IS ",$b,'<br>';
				echo "AFTER SWAPPING",'<br>';
				swap1($a,$b);
				echo "FIRST STRING IS ",$a," SECOND STRING IS ",$b;
				
				
			}
			?>
						  <hr>
						  	<?php
			
			if(isset($_GET['str1']) and isset($_GET['str2']))
			{
				function swap2(&$first,&$second)/*call by reference*/
				{
					$t=$first;
					$first=$second;
					$second=$t;
					
				}
				$a=$_GET['str1'];
				$b=$_GET['str2'];
				echo '<h1>',"CALL BY REFERENCE",'</h1>','<br>';
				echo "BEFORE SWAPPING",'<br>';
				echo "FIRST STRING IS ",$a," SECOND STRING IS ",$b,'<br>';
				echo "AFTER SWAPPING",'<br>';
				swap2($a,$b);
				echo "FIRST STRING IS ",$a," SECOND STRING IS ",$b;
				
				
			}
			?></divl>
 <divr><?php
 echo '<b>'."CODE".'</b>','<br>';
 show_source("exp3_3.php");
 ?></divr>
 <footer>
  <center><a href="index.php"><h1>HOMEPAGE</a></h1></center>
</footer>
			</body>
			</html>