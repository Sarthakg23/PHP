<html>
<head>
<title>EXPERIMENT 6</title>
 <link rel="stylesheet" href="s.css">
</head>
<body>
 <header>EXPERIMENT6 PART1</header>
<divl><form action="" method="POST">
		<table>
		<tr><td>Roll no :</td><td><input type="number" name="roll"></td></tr>
		<tr><td>Name :</td><td><input type="text" name="name"></td></tr>
		<tr><td>Address</td><td><input type="textarea" name="address"></td></tr>
		<tr><td>Age</td><td><input type="number" name="age"></td></tr>
		<tr><td>phone number:</td><td><input type="number" name="phone"></td></tr>
		<tr><td colspan=2><input type="submit" name="submit"></td></tr>
		<input type="submit" value="Show Data" name="show"><br>
		Show students from the entered city<input type="text" name="city"><br>
		<input type="submit" value="Show Students" name="showstu"><br>
		<?php
		  if(isset($_POST['submit']))
			{
				$roll=$_POST['roll'];
				$name=$_POST['name'];
				$address=$_POST['address'];
				$age=$_POST['age'];
				$phone=$_POST['phone'];
				if(file_exists("studentdetails.txt"))
				{
					$fp=fopen("studentdetails.txt",'a');
				fwrite($fp,"$roll:$name:$age:$address:$phone\r\n");
				echo "Record successfully added!";;
				}
                else
				{
				$fp=fopen("studentdetails.txt",'w');
				fwrite($fp,"$roll:$name:$age:$address:$phone\r\n");
				echo "Record successfully added!";
				}
			}
				if(isset($_POST['show']))
				{
					$ar=file("studentdetails.txt");
					//print_r($ar);
					for($i=0;$i<count($ar);$i++)
					{
						echo $ar[$i];
						echo '<br>';
					}
				}
				if(isset($_POST['showstu']))
				{
					$city=$_POST['city'];
					$ar=file("studentdetails.txt");
					for($i=0;$i<count($ar);$i++)
					{
						$stu=explode(':',$ar[$i]);
							if($stu[3]==$city)
								echo $stu[1].'<br>';
							else
								continue;
						
					}
					
				}
		?>
		</table>
		</form>
		
 </divl>
 <divr><?php show_source("exp6_1.php"); ?></divr>
  <footer>
  <center><a href="index.php"><h1>HOMEPAGE</a></h1></center>
</footer>

</body>
</html>