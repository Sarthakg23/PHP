<html>
<body>
<form action="" method="get">
<?php
for($i=0;$i<5;$i++)
{
?>
<input type="number" name="num1[]">
<?php
}
?>
<input type="submit" name="submit" value="ddd">
<?php
if(isset($_GET['submit']))
{
	foreach($_GET['num1'] as $i)
	{
		echo $i;
	}
}
?>
	
</body>
</html>