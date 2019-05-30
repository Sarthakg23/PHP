<?php
$con=mysqli_connect("localhost","root","","studatabase");
if(!$con)
	die("Not able to connect".mysqli_connect_error());
else
	echo "Connection established".'<br>';
?>