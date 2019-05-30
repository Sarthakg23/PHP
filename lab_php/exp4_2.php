<html>
<head>
 <link rel="stylesheet" href="s.css">
 </head>
<body>
<header>EXPERIMENT4 PART2</header>
 <divl> <form method="get" action="">
 Enter your name <input type="text" name="name"><br>
  <h2>Select gender</h2>
  <input type="radio" name="gender" value="male"> Male<br>
<input type="radio" name="gender" value="female"> Female<br>
 <input type="submit" name="submit">
  </form>
  <?php
  if(isset($_GET['name']))
{ 
       $n=$_GET['name'];
	   $names=explode(' ',$n);
	   $l=count($names);
	   $a= implode(' ',$names);
	   $g=$_GET['gender'];
		if($g== "male")
		{	echo "Mr.".$a.'<br>';
		    echo '<hr>';
		}	
		else
		{	echo "Ms.".$a.'<br>';
		    echo '<hr>';
		}
if($l==1)
 {
 echo"First name is". $names[0]; 
 echo'<br>';
 }  
if($l==2)
 {
 echo"First name is". $names[0]; 
 echo'<br>';
echo"Last name is". $names[1];
 }  
 if($l==3)
 {
 echo"First name is". $names[0]; 
 echo'<br>';
 echo"Middle name is ".$names[1]; 
 echo '<br>';
echo"Last name is". $names[2];
 }  
echo '<hr>';
echo strtoupper($a);
 echo '<hr>';
 $vowels=array('A','E','I','O','U','a','e','i','o','u');
  $len = strlen($a);
        $num = 0;
		for($i=0;$i<$len;$i++)
		{
			  if(in_array($a[$i], $vowels))
            {
                $num++;
            }
        }
		echo "Number of vowels in the name is $num";
		echo '<hr>';

$w=0;
$temp=str_split($n);
foreach($temp as $i)
{
	if($i==' ')
		$w++;
}
echo "Number of whitespaces in the name is $w";
}

?>
</divl>
 <divr><?php show_source("exp4_2.php"); ?></divr>
 <footer>
  <center><a href="index.php"><h1>HOMEPAGE</a></h1></center>
</footer>
</body>
</html>