<html>
<head>
<title>EXPERIMENT 8</title>
 <link rel="stylesheet" href="s.css">
</head>
<body>
 <header>EXPERIMENT8 PART3</header>
<divl><form method="post" action="">
Faculty Name
<br>
<input type ="text" name ="fnm">
<br/>
Subject
<br>
<input type ="text" name ="sb">
<input type=submit value=submit name="submit">
</form>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['fnm'];
$fp=fopen("feedback.txt","r")or die("sorry");
while (!feof($fp))
	 {
		  $str=fgets($fp);
		 
           if(preg_match("/$name/",$str))
           {
			  
              echo "$str";
	          echo "<br>";
			   $str1=fgets($fp);
			  echo "$str1";
	          echo "<br>";
			   $str2=fgets($fp);
			  echo "$str2";
	          echo "<br>";
			   $str3=fgets($fp);
			  echo "$str3";
	          echo "<br>";
			   $str4=fgets($fp);
			  echo "$str4";
	          echo "<br>";
			  
			   $str5=fgets($fp);
			  echo "$str5";
	          echo "<br>";
			  
			   $str6=fgets($fp);
			  echo "$str6";
	          echo "<br>";
            }
         
	  }
}
	  ?>
	  </divl>
 <divr><?php show_source("exp8_3_2.php"); ?></divr>
  <footer>
  <center><a href="index.php"><h1>HOMEPAGE</a></h1></center>
</footer>

</body>
</html>