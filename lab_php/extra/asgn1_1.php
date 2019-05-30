<html>
<head>
<title>PHP ASSIGNMENT QUESTION 1</title>
</head>
<body>
<?php
function rect($l,$b)//fuction to calculate area of rectangle
{
	return $l*$b;
}
function eqtri($s)//fuction to calculate area of equilateral triangle
{
	return (1.732*$s*$s)/4;
}
function square($s)//fuction to calculate area of square
{
	return $s*$s;
}
function circle($r)//fuction to calculate area of circle
{
	return 3.141*$r*$r;
}
?>
<form method="get" action="">
ENTER THE LAST TWO DIGITS OF YOUR ROLL NUMBER<input type="text" name="roll"><br>
<input type="submit">
</form>
<hr>
<image src="fig.jpg" height="350px" width="700px"><br>
<hr> 

<?php
if(isset($_GET["roll"]))// to check if the roll is set with some value or not
{
	$n=$_GET["roll"];
	$S1=(int)$n[1];// type casting last digit of roll number from string to integer
	$S2=(int)$n[0];// type casting second last digit of roll number from string to integer
	$S3=2.5;
	$S5=(int)$n;// type casting both digits of roll number from string to integer
	$S6=$S5;
	$S7=1.5;
	$S4=$S5%5;
	if($S1==0)
		$S1=9;
	if($S2==0)
		$S2=9;
	if($S5==0)
		$S5=9;
	if($S6==0)
		$S6=9;
	if($S4==0)
		$S4=9;
	echo "S1 = ",$S1,'<br>',"S2 = ",$S2,'<br>',"S3 = ",$S3,'<br>',"S4 = ",$S4,'<br>',"S5 = ",$S5,'<br>',"S6 = ",$S6,'<br>',"S7 = ",$S7,'<br>';
	echo "AREA OF DISPLAYED FIGURE IS ",'<b>',eqtri($S1)+eqtri($S2)+rect($S1+$S2,$S3+$S7)+(circle($S7/2)/2)+(circle($S3/2)/2)+(circle(($S7+$S3)/2)/2)+square($S4)+square($S5),'</b>';
	
}

?>
</body>
</html>

