<html>
<head>
<title>Experiment 4 Part 5</title>
 <link rel="stylesheet" href="s.css">
</head>
<body>
 <header>EXPERIMENT4 PART5</header>
<divl><form>
Input comma seperated numbers<input type="text" name="arr"><br>
<input type="submit" name="submit"><br>
</form>

<?php
if (isset($_GET['arr']))
{
	$n=explode(',',$_GET['arr']);
	$l=count($n);
	$even="";
	$odd="";
	for($i=0;$i<$l;$i++)
	{
		if($i==$l-1)
		{
		if((int)$n[$i]%2==0)
			$even=$even.$n[$i];
		else
			$odd=$odd.$n[$i];
		}
		else
		{
			if((int)$n[$i]%2==0)
			$even=$even.$n[$i].",";
		else
			$odd=$odd.$n[$i].",";
		}
	}
	
	//echo $odd.'<br>';
	//echo $even.'<br>';
	$e = array_map('intval', explode(',', $even));
   	$o = array_map('intval', explode(',', $odd));
	sort($e);
	sort($o);
	$f=array_merge($e,$o);
	$len=count($f);
	for($i=0;$i<$len;$i++)
	{
		if($i==0 or $i==$len-1)
		echo $f[$i];
	    else
		echo $f[$i].",";
	}
}
?></divl>
 <divr><?php
 echo "CODE",'<br>';
 show_source("exp4_5.php");
 ?></divr>
 <footer>
  <center><a href="index.php"><h1>HOMEPAGE</a></h1></center>
</footer>
</body>
</html>