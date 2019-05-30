<html>
<head>
<title>NUMBER SYSTEM CONVERSION</title>
</head>
<style>
div {
  width: 300px;
  border: 15px double green;
  padding: 25px;
  margin: 35px;
  color:red;
}
body{
	padding-top:100px;
	padding-left:400px;
	color:olive;
	
}
h1
{
	font-family:Marlett;
	color:red;
	text-shadow: 0 0 3px #FF0000;
}
</style>
<body bgcolor="#E6E6FA">
<i><h1>NUMBER SYSTEM CONVERSION</h1><i>
<div><form method="get" action="">
ENTER NUMBER<input type="number" value="<?php echo $_GET['num'];?>" name ="num"><br><hr>
<h4>CONVERTING FROM<select name="ch1" >
   <option value="0">CHOOSE</option>
  <option value="hex">HEXADECIMAL</option>
  <option value="dec">DECIMAL</option>
  <option value="bin">BINARY</option>
  <option value="oct">OCTAL</option>
</select><br>

OR ENTER BASE<input type="number" name="ch3" value="<?php echo $_GET['ch3'];?>"><br><hr>
CONVERT TO<select name="ch2" value="hex">
   <option value="0">CHOOSE</option>
  <option value="hex">HEXADECIMAL</option>
  <option value="dec">DECIMAL</option>
  <option value="bin">BINARY</option>
  <option value="oct">OCTAL</option>
</select><br>
OR ENTER BASE<input type="number" name="ch4" value="<?php echo $_GET['ch4']?>">
<input type="submit" name="submit"><br>
</form>
<?php
if(isset($_GET['submit']))//to check to is the number is eneterd or not
{
	
	$n=$_GET['num'];
	$c1=$_GET['ch1'];
	$c2=$_GET['ch2'];
	$c3=$_GET['ch3'];
	$c4=$_GET['ch4'];
	$res=0;
	if(isset($_GET['ch1']) and isset($_GET['ch2']))//if user selects both types from the dropdown of hex,bin,dec,oct
	{
    switch($c1)
	{
		case 'hex':
		{
		 switch($c2)
		 {
			case 'hex':
			{
				$res="A";
              $res=base_convert($n, 16, 16);
		      break;
			}
			case 'bin':
			{
              $res=base_convert($n, 16, 2);
		      break;
			}
			case 'dec':
			{
              $res=base_convert($n, 16, 10);
		      break;
			}
			case 'oct':
			{
              $res=base_convert($n, 16, 8);
		      break;
			}
		 }
		 break;
		}
		case 'bin':
		{
		 switch($c2)
		 {
			case 'bin':
			{
              $res=base_convert($n, 2, 2);
		      break;
			}
			case 'hex':
			{
              $res=base_convert($n, 2, 16);
		      break;
			}
			case 'dec':
			{
              $res=base_convert($n, 2, 10);
		      break;
			}
			case 'oct':
			{
              $res=base_convert($n, 2, 8);
		      break;
			}
		 }
		 break;
		}
		case 'oct':
		{
		 switch($c2)
		 {
			case 'hex':
			{
              $res=base_convert($n, 8, 16);
		      break;
			}
			case 'bin':
			{
              $res=base_convert($n, 8, 2);
		      break;
			}
			case 'dec':
			{
              $res=base_convert($n, 8, 10);
		      break;
			}
			case 'oct':
			{
              $res=base_convert($n, 8, 8);
		      break;
			}
		 }
		 break;
		}
		case 'dec':
		{
		 switch($c2)
		 {
			case 'hex':
			{
              $res=base_convert($n, 10, 16);
		      break;
			}
			case 'bin':
			{
              $res=base_convert($n, 10, 2);
		      break;
			}
			case 'dec':
			{
              $res=base_convert($n, 10, 10);
		      break;
			}
			case 'oct':
			{
              $res=base_convert($n, 10, 8);
		      break;
			}
		 }
		 break;
		}
	}
	}
	if($c3 and $c4)//if user eneters both bases by his own
	{
		$res=base_convert($n, $c3 , $c4);
	}
		echo '<h2>',"RESULT: ",$res,'</h2>';
}
?>
</div>
</body>
</html>