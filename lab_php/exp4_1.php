<!DOCTYPE html>
<html>
<head>
<title>Experiment 4_1</title>
 <link rel="stylesheet" href="s.css">
</head>
<body>
<header>EXPERIMENT4 PART1</header>
<divl><form action="" method="GET">
Enter ',' seperated numbers<br>
<input type="text" name="arr">
<input type="submit" name="submit">
</form>
<?php
if(isset($_GET['submit'])){
$num=$_GET['arr'];

function maxmin($num){
$temp=explode(',',$num);
$max=$temp[0];
$min=$temp[1];
foreach($temp as $sort){
	if($sort>$max){
		$max=$sort;
		
	}
	else if($sort<$min){
		$min=$sort;
	}
}
  echo"<b>maximum number is</b> ".$max;
  echo'<br>';
	echo"<b>minimum number is</b> ".$min;
	echo'<br>';
}

   maxmin($num);
}
?>
</divl>

<divr>
<?php
echo '<strong>',show_source("exp4_1.php"),'</strong>';
?>
</divr>
<footer>
  <center><a href="index.php"><h1>HOMEPAGE</a></h1></center>
</footer>
</body>
</html>