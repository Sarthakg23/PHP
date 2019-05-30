<html>
<head>
<title>EXPERIMENT 6</title>
 <link rel="stylesheet" href="s.css">
</head>
<body>
 <header>EXPERIMENT6 PART4</header>
	<divl><h2>Innovative Learning Center</h2>
<form action="" method="post">
	
	<h3>REGISTRATION FORM</h3>
	<pre>
Enter Name        : <input type="text" name="n">
Enter Password    : <input type="password" name="p1">
Re-Enter password : <input type="password" name="p2">
Enter Email       : <input type="email" name="email">

             <input type="submit" name="submit" value="SUBMIT">
</pre>
</form>

<?php
if(isset($_POST['submit']))
{
echo "<h2>WRITING STUDENTS DETAILS IN student_details.txt FILE</h2><br>";

$handle = fopen("student_details.txt","w");
$newtext = "Name = ".$_POST['n']." Password = ".$_POST['p1']." Email = ".$_POST['email'].".";

if(fwrite($handle,$newtext))
{
	echo "<h3>File updated sccessfully</h3><br>";
}
else
{
	echo "<h3>Error occurred while Writing in student_details.txt file</h3><br>";
}
}
?>
</divl>
 <divr><?php show_source("exp6_4.php"); ?></divr>
  <footer>
  <center><a href="index.php"><h1>HOMEPAGE</a></h1></center>
</footer>

</body>
</html>