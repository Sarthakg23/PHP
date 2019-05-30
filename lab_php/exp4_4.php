<html>
<head>
 <link rel="stylesheet" href="s.css">
</head>
<body>
  <header>EXPERIMENT4 PART4</header>
<divl><form action="" method="get">
Select the course
<select name="course">
  <option value="bba" >BBA</option>
  <option value="btech" >BTECH</option>
  <option value="mba" >MBA</option>
  <option value="biotech">BIOTECH</option>
</select>
<br>
<table>
<tr><td>
ADOPT FOR HOSTEL:</td><td><select name="hostel">
  <option value="yes" >YES</option>
  <option value="no" >NO</option></select></td></tr><br>
<tr><td>ADOPT FOR TRANSPORT:</td><td><select name="transport">
  <option value="yes" >YES</option>
  <option value="no" >NO</option></select></td></tr>
<tr><td>ADOPT FOR MESS:</td><td><select name="mess">
  <option value="yes" >YES</option>
  <option value="no" >NO</option></select></td></tr>
</table>
<input type="submit" value="submit">
</form>
<?php
if(isset($_GET['course']))
{
	
$a = $_GET['course'];
$b = $_GET['hostel'];
$c = $_GET['transport'];
$d = $_GET['mess'];
if($a=='bba' && $b=='yes' && $c=='yes' && $d =='yes' )
{
	echo "Your selected course is :".$a."<br>";
	echo"tuition fee = 90000"."<br>"."library fee =10000"."<br>"."id card fee = 500"."<br>"."mess fee =10000"."<br>"."transnsport fee=20000"."<br>"."hostel fee =100000"."<br>";
}
if($a=='bba' && $b=='no' && $c=='yes' && $d =='yes' )
{
	echo "your selected course is".$a."<br>";
	echo"tuition fee = 90000"."<br>"."library fee =10000"."<br>"."id card fee = 500"."<br>"."mess fee =10000"."<br>"."transnsport fee=20000"."<br>"."not adopted for hostel"."<br>";
}
if($a=='bba' && $b=='no' && $c=='no' && $d =='yes' )
{
	echo "your selected course is".$a."<br>";
	echo"tuition fee = 90000"."<br>"."mess fee =10000"."<br>"."library fee =10000"."<br>"."id card fee = 500"."<br>"."not adopted for hostel and transport"."<br>";
}
if($a=='bba' && $b=='no' && $c=='no' && $d =='no' )
{
	echo "your selected course is".$a."<br>";
	echo"tuition fee = 90000"."<br>"."library fee =10000"."<br>"."id card fee = 500"."<br>"."not adopted for hostel,transport,mess "."<br>";
}




if($a=='mba' && $b=='yes' && $c=='yes' && $d =='yes' )
{
	echo "your selected course is".$a."<br>";
	echo"tuition fee = 80000"."<br>"."library fee =10000"."<br>"."id card fee = 500"."<br>"."mess fee =10000"."<br>"."transnsport fee=20000"."<br>"."hostel fee =100000"."<br>";
}
if($a=='mba' && $b=='no' && $c=='yes' && $d =='yes' )
{
	echo "your selected course is".$a."<br>";
	echo"tuition fee = 80000"."<br>"."library fee =10000"."<br>"."id card fee = 500"."<br>"."mess fee =10000"."<br>"."transnsport fee=20000"."<br>"."not adopted for hostel"."<br>";
}
if($a=='mba' && $b=='no' && $c=='no' && $d =='yes' )
{
	echo "your selected course is".$a."<br>";
	echo"tuition fee = 80000"."<br>"."mess fee =10000"."<br>"."library fee =10000"."<br>"."id card fee = 500"."<br>"."not adopted for hostel and transport"."<br>";
}
if($a=='mba' && $b=='no' && $c=='no' && $d =='no' )
{
	echo "your selected course is".$a."<br>";
	echo"tuition fee = 80000"."<br>"."library fee =10000"."<br>"."id card fee = 500"."<br>"."not adopted for hostel,transport,mess "."<br>";
}






if($a=='btech' && $b=='yes' && $c=='yes' && $d =='yes' )
{
	echo "your selected course is".$a."<br>";
	echo"tuition fee = 100000"."<br>"."library fee =10000"."<br>"."id card fee = 500"."<br>"."mess fee =10000"."<br>"."transnsport fee=20000"."<br>"."hostel fee =100000"."<br>";
}
if($a=='btech' && $b=='no' && $c=='yes' && $d =='yes' )
{
	echo "your selected course is".$a."<br>";
	echo"tuition fee = 100000"."<br>"."library fee =10000"."<br>"."id card fee = 500"."<br>"."mess fee =10000"."<br>"."transnsport fee=20000"."<br>"."not adopted for hostel"."<br>";
}
if($a=='btech' && $b=='no' && $c=='no' && $d =='yes' )
{
	echo "your selected course is".$a."<br>";
	echo"tuition fee = 100000"."<br>"."mess fee =10000"."<br>"."library fee =10000"."<br>"."id card fee = 500"."<br>"."not adopted for hostel and transport"."<br>";
}
if($a=='btech' && $b=='no' && $c=='no' && $d =='no' )
{
	echo "your selected course is".$a."<br>";
	echo"tuition fee = 100000"."<br>"."library fee =10000"."<br>"."id card fee = 500"."<br>"."not adopted for hostel,transport,mess "."<br>";
}



if($a=='biotech' && $b=='yes' && $c=='yes' && $d =='yes' )
{
	echo "your selected course is".$a."<br>";
	echo"tuition fee = 150000"."<br>"."library fee =10000"."<br>"."id card fee = 500"."<br>"."mess fee =10000"."<br>"."transnsport fee=20000"."<br>"."hostel fee =100000"."<br>";
}
if($a=='biotech' && $b=='no' && $c=='yes' && $d =='yes' )
{
	echo "your selected course is".$a."<br>";
	echo"tuition fee = 150000"."<br>"."library fee =10000"."<br>"."id card fee = 500"."<br>"."mess fee =10000"."<br>"."transnsport fee=20000"."<br>"."not adopted for hostel"."<br>";
}
if($a=='biotech' && $b=='no' && $c=='no' && $d =='yes' )
{
	echo "your selected course is".$a."<br>";
	echo"tuition fee = 150000"."<br>"."mess fee =10000"."<br>"."library fee =10000"."<br>"."id card fee = 500"."<br>"."not adopted for hostel and transport"."<br>";
}
if($a=='biotech' && $b=='no' && $c=='no' && $d =='no' )
{
	echo "your selected course is".$a."<br>";
	echo"tuition fee = 150000"."<br>"."library fee =10000"."<br>"."id card fee = 500"."<br>"."not adopted for hostel,transport,mess "."<br>";
}
}
?></divl>
 <divr><?php
 echo "CODE",'<br>';
 show_source("exp4_4.php");
 ?></divr>
 <footer>
  <center><a href="index.php"><h1>HOMEPAGE</a></h1></center>
</footer>
</body>
</html>