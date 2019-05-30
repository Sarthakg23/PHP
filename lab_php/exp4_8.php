<html>
<body>
<form action="" method="get">
<input type="number" name="num">
<input type="submit" value="submit">
</form>
<?php
if(isset($_GET['num']))
{
$n=$_GET['num'];
echo '<form action="" method="get">'.'<br>';
for($i=0;$i<$n;$i++)
{
	echo "Enter the name".'<input type="text" name="arr[]">';
}
echo '<input type="submit">';
echo '</form>';
$arr=$_GET['arr'];
for($i=0;$i<$n;$i++)
{
	echo $arr[$i];
}
}
?>
</body>
</html>


