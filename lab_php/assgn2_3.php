<html>
<body>
<form action="" method="POST">
Enter Student Roll No<input type="number" name="rollno" ><br>
Enter Student Name<input type="text" name="name" ><br> 
Enter Student age<input type="number" name="age" ><br>
Enter Student Address<input type="text" name="address"><br>
Enter Student phoneno<input type="number" name="phoneno"><br>
<input type="submit" value="submit" name="submit"><br>
<input type="submit" value="SHOWSTUDENTINFO" name="SHOWSTUDENTINFO"><br>
</form>
<form action="" method="POST">
Enter City name to show students from the entered city<input type="text" name="city" value=" <?php if (isset( $_POST['city'])){ echo $_POST['city'];}?>"><br>
<input type="submit" value="SHOW" name="SHOW">
</form>
<?php


include('dbcon.php');
if(isset($_POST['submit']))
{
	echo "Student details inserted".'<br>';

$q="create table STUDENT(rollno int,name varchar(20),age int,address varchar(30),phoneno int)";
if(mysqli_query($con , $q))
	echo "STUDENT table created".'<br>';
else
	mysqli_error($con);
$query="insert into STUDENT(rollno,name,age,address,phoneno) values(?,?,?,?,?);";
$stm=mysqli_prepare($con,$query);
mysqli_stmt_bind_param($stm,"isisi",$V1,$V2,$V3,$V4,$V5);
$V1=$_POST['rollno'];
$V2=$_POST['name'];
$V3=$_POST['age'];
$V4=$_POST['address'];
$V5=$_POST['phoneno'];
mysqli_stmt_execute($stm);


}
if(isset($_POST['SHOWSTUDENTINFO']))
{
	function showinfo()
{
	
include('dbcon.php');
	$sq="select * from STUDENT";
	$d=mysqli_query($con,$sq);
	echo '<b>'."STUDENT DETAILS".'</b>'.'<br>';
    while($c=mysqli_fetch_assoc($d))
	{
	echo "ROLL NO :".$c['rollno']."  "."NAME :".$c['name']."  "."AGE :".$c['age']."  "."ADDRESS :".$c['address']."  "."PHONE NO. :".$c['phoneno'].'<br>'.'<hr>';
	}
}
	showinfo();
	
}
if(isset($_POST['SHOW']))
{
	$cit = $_POST['city'];
function show($cit)
{
	
include('dbcon.php');
$query="select * from STUDENT where address='Dehradun'";
 $stm=mysqli_prepare($con,$query);
 mysqli_stmt_bind_param($stm,"s",$V1);
 $V1=$cit;	
$d=mysqli_query($con,$query);
while($c=mysqli_fetch_assoc($d))
	{
	echo "ROLL NO :".$c['rollno']."  "."NAME :".$c['name']."  "."AGE :".$c['age']."  "."ADDRESS :".$c['address']."  "."PHONE NO. :".$c['phoneno'].'<br>'.'<hr>';
	}
}

	show($cit);
}

?>
</body>
</html>