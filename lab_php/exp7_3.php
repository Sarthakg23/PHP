<html>
<head>
<title>EXPERIMENT 7</title>
 <link rel="stylesheet" href="s.css">     
<script>
function fun()
{
	document.getElementById("myimage").src="php.png";
}
function fun1()
{
	document.getElementById("myimage").src="fig.jpg";
}
</script>
</head>
<body>
<header>EXPERIMENT7 PART3</header>
<divl>
<img src="fig.jpg" width="200px" height="200px" alt="im" id="myimage" onmouseover="fun()" onmouseout="fun1()"></divl>
</divl>
 <divr><?php show_source("exp7_3.php"); ?></divr>
  <footer>
  <center><a href="index.php"><h1>HOMEPAGE</a></h1></center>
</footer>

</body>
</html>

