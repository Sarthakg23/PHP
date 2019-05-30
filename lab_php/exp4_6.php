<html>
<head>
 <link rel="stylesheet" href="s.css">
</head>
<body>
 <header>EXPERIMENT4 PART6</header>
	<divl><form action="" method="get">
	<table>
	<tr>
	<td>Enter Name</td><br>
	<td><input type="text" name="name"></td>
	</tr>
	<tr>
	<td>Enter marks in Maths</td>
    <td><input type="number" name="maths"></td> 
	</tr>
	<tr>
	<td>Enter marks in Science</td>
	<td><input type="number" name="science"></td>
	</tr>
	<tr>
	<td>Enter marks in English</td>
	<td><input type="number" name="english"></td>
	</tr>
	<tr>
	<td>Enter marks in Language</td>
	<td><input type="number" name="language"></td>
	</tr>
	<tr>
	<td>Enter marks in MoralScience</td>
	<td><input type="number" name="moralscience"></td>
	</tr>
	</table><br>
	<input type="submit"><br>

</form>
<?php 
function Calaverage($b)
{
	$sum=0;$c =sizeof($b);
	for($i=0;$i<$c;$i++)
	{
		$sum=$sum+$b[$i];
	}
	$average = $sum/$c;
	echo "the average of the student is ".$average."<br>";
	if($average>90 && $average<100)
	{
		echo "You have scored O which is the  the highest grade";
	}
	if($average>70 && $average<89)
	{
		echo "You have got A grade ";
	}
	if($average>60 && $average<69)
	{
		echo "You have got B grade ";
	}
	if($average>50 && $average<59)
	{
		echo "You got C grade";
	}
	else if($average<50)
	{
		echo "You have scored F  you need a lot of work hard!";
	}
}
if(isset($_GET['name']))
{
$a = array($_GET['maths'],$_GET['science'],$_GET['english'],$_GET['language'],$_GET['moralscience']);
Calaverage($a);
}
?></divl>
 <divr><?php
 echo "CODE",'<br>';
 show_source("exp4_6.php");
 ?></divr>
 <footer>
  <center><a href="index.php"><h1>HOMEPAGE</a></h1></center>
</footer>
</body>
</html>