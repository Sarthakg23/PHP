<html>
<head>
</head>
<body>
        <h2>Innovative Learning Center</h2>
<form action="" method="post">

        <h3>REGISTRATION FORM</h3>
        <pre>
Enter Name        : <input type="text" name="n">
Enter Branch      : <select>
  <option value="OSS">OSS</option>
  <option value="CCVT">CCVT</option>
  <option value="BAO">BAO</option>
  <option value="CSF">CSF</option>
  <option value="DEVOPS">DEVOPS</option>
  <option value="OGI">OGI</option>
  </select>
  <input type="submit" name="submit" value="SUBMIT">
</pre>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
  echo "<h2>SYLLABUS OF THE COURSES</h2><br>";
  $handle = fopen("syllabus.txt","r");
while($t = fgets($handle))
{
        echo $t."<br>";
} 
}
?>  