<html>
<head>
<title>EXPERIMENT 6</title>
 <link rel="stylesheet" href="s.css">
</head>
<body>
 <header>EXPERIMENT6 PART3</header>
<divl><form action="" method="post" enctype="multipart/form-data">
CHOOSE FILE:<input type="file" name="image">
<input type="submit" name="submit">
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	
	 if($_FILES["image"]["error"]>0)
	 {
     echo"There is an error".$_FILES["image"]["error"]."<br>";
     }
     else
     {
       echo "<b>UPLOADED:".$_FILES["image"]["name"]."<br>";
       echo "Type:".$_FILES["image"]["type"]."<br>";
       echo "Size : ". $_FILES["image"]["size"]/1024 ." Kb<br>";
       echo "Stored In:".$_FILES["image"]["tmp_name"]."<br>";
     }
     if(file_exists("uploads/".$_FILES["image"]["name"]))
     {
      echo $_FILES["image"]["name"]."Already Exist";
     }
     else
     {
      move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$_FILES["image"]["name"]);
      echo "stored in :"."uploads/".$_FILES["image"]["name"];
     }
}
?></divl>
 <divr><?php show_source("exp6_3.php"); ?></divr>
  <footer>
  <center><a href="index.php"><h1>HOMEPAGE</a></h1></center>
</footer>

</body>
</html>