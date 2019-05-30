<html>
<body>
<a href="home.php" font size="500px">home</a>
  <form method="get">
    <h1>num1</h1>
    <input type="number" name="arr[]"/>
    <h1>num2</h1>
    <input type="number" name="arr[]"/>
    <h1>num3</h1>
    <input type="number" name="arr[]"/>
    <h1>num4</h1>
  <input type="number" name="arr[]">
 <input type="submit" value="save" name="save">
  </form>
 <?php
if(isset($_REQUEST['save']))
{
 $array=$_REQUEST['arr'];
$large=$array[0];
$small=$array[0];
for($i=0;$i<count($array);$i++)
 {
	 if($large<$array[$i])
	 {
		 $large=$array[$i];
	 }
	 if($small>$array[$i])
	 {
		  $small=$array[$i];
	 }
}
echo "largest element in array is"." "."$large";
echo '<br>';
echo "smallest element in array is"." "."$small";
}
?>
</body>
</html>