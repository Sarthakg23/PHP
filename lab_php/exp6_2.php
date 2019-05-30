<html>
<head>
<title>EXPERIMENT 6</title>
 <link rel="stylesheet" href="s.css">
</head>
<body>
 <header>EXPERIMENT6 PART2</header>
<divl><?php
$c= copy("studentdetails.txt","sd.txt");
if($c==1)
	echo '<h1>'."File Copied".'</h1>';
else 
	echo "File not copied";
?></divl>
 <divr><?php show_source("exp6_2.php"); ?></divr>
  <footer>
  <center><a href="index.php"><h1>HOMEPAGE</a></h1></center>
</footer>

</body>
</html>