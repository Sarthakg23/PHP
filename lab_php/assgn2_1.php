<html>
<head>
</head>
<body>
<form action="" method="post">
<h2> Employee Registration Form </h2>
Employee Name: <input type=text name=enm required / ><br/>
Age: <input type=number name=age required / ><br/>
Emplyee Id <input type=number name=id required /><br/>
Designation <input type=text name=dsg value="<?php echo $_POST['dsg']?>" required /><br>
Salary <input type=number name=sal required /><br>
<br>Gender:<br>
<input type="radio" name="gender" value="M">M<br>
<input type="radio" name="gender" value="F">F<br>
<input type="submit" value=submit name="submit">
</form>
<?php
if(isset($_POST['submit']) && isset($_POST['gender']))
{
class employee{
 var $enm,$age,$id,$gender,$dsg;

 function getempdetails()
 {
	 $this->enm=$_POST['enm'];
	 $this->age=$_POST['age'];
	 $this->gender=$_POST['gender'];
	 $this->id=$_POST['id'];
	 $this->sal=$_POST['sal'];

 }

 function checkdsg($field) {
  if(($field!="programmer")&&($field!="project-lead")&&($field!="team-member")) {
    throw new Exception("Designation entered is not valid");
    echo '<br>';
  }
  return true;
}


 function displayemployeedetails()
 {

echo"Employee Name". " :" .$this->enm;
echo '<br>';
echo"Age". " :" .$this->age;
echo '<br>';
echo"Id". " :" .$this->id;
echo '<br>';
echo"Gender". " :" .$this->gender;
echo '<br>';
echo"Salary". " :" .$this->sal;
echo '<br>';

 }


 }

  $d=$_POST['dsg'];
  $ob=new employee();
  //trigger exception in a "try" block
  try {
  $ob->checkdsg($d);
    //If the exception is thrown, this text will not be shown
	  $ob->getempdetails();
	  echo "Submited".'<br>';
  $ob->displayemployeedetails();
    echo 'Designation :'.$d;
    ?><br /><?php
  }

  //catch exception
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage().'<br>';
	echo "Sorry employee details cannot be viwed";
    ?><br /><?php
  }
}
 ?>

</body>
</html>