<html>
<head>
<title>EXPERIMENT 8</title>
 <link rel="stylesheet" href="s.css">
</head>
<body>
 <header>EXPERIMENT8 PART3</header>
<divl><form action="" method="post">
<h2> Student Reviews </h2>
Faculty Name <input type=text name=fnm ><br/>
Subject <input type=text name=sb ><br/>
Date <input type=date name=dt ><br/>
Student Id <input type=number name=sid ><br/>
Student Name <input type=text name=snm >
<br>rating<br>
<input type="radio" name="review" value="1">1<br>
<input type="radio" name="review" value="2">2<br>
<input type="radio" name="review" value="3">3<br>
<input type="radio" name="review" value="4">4<br>
<input type="radio" name="review" value="5">5<br>
Comments <input type=text name=cmnt >
<input type="submit" value=submit name="submit">
</form>
<?php 
if(isset($_POST['submit']))
{
class feedback{
 var $fnm,$sb,$dt,$sid,$snm,$reveiw,$cmnt; 
 function feedback()
 {
	 $this->fnm=$_POST['fnm'];
	 $this->sb=$_POST['sb'];
	 $this->dt=$_POST['dt'];
	 $this->sid=$_POST['sid'];
	 $this->snm=$_POST['snm'];
	 $this->review=$_POST['review'];
	 $this->cmnt=$_POST['cmnt'];	 
 }
 function store()
 {
 	 $fp=fopen("feedback.txt","a")or die("sorry");
$z="\r\n";
fwrite($fp,"Faculty Name". " :" .$this->fnm);
fwrite($fp,$z);
fwrite($fp,"Subject". " :". $this->sb);
fwrite($fp,$z);
fwrite($fp,"Date". " :". $this->dt);
fwrite($fp,$z);
fwrite($fp,"Student Id". " :" .$this->sid);
fwrite($fp,$z);
fwrite($fp,"Student Name". " :". $this->snm);
fwrite($fp,$z);
fwrite($fp,"Review". " :" .$this->review);
fwrite($fp,$z);
fwrite($fp,"Comments". " :". $this->cmnt);
fclose($fp);
 }
 }
  $ob=new feedback();
$ob->store();
echo "file stored";
}
 ?>
 </divl>
 <divr><?php show_source("exp8_3_1.php"); ?></divr>
  <footer>
  <center><a href="index.php"><h1>HOMEPAGE</a></h1></center>
</footer>

</body>
</html>
