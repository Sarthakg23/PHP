<html>
<head>
<title>Know your age</title>
<head>
<body>
<form method="get" action="">
Enter your DOB in the format DD/MM/YYYY<input type="text" name="date"><br>
<input type="submit">
</form>
<?php
if(isset($_GET['date']))
{
echo "Today's date is :"; 
$td = date("d/m/Y"); 
$td1=explode('/',$td);
$tday=(int)$td1[0];
 $tmonth=(int)$td1[1];
 $tyear=(int)$td1[2];
 echo $td.'<br>';
echo $tday.$tmonth.$tyear.'<br>';
 $d=$_GET['date'];
 $d1=explode('/',$d);
 echo $d,'<br>';
 $day=(int)$d1[0];
 $month=(int)$d1[1];
 $year=(int)$d1[2];
 
 echo $day.$month.$year.'<br>';

 $fyear=$tyear-$year;
 $fmonth=$tmonth-$month;
 $fday=$tday-$day;
 if($fyear<0)
 echo "Invalid date";
 if($fmonth<0)
 {
  $fyear=$fyear-1;
  $fmonth=12+$fmonth;
 }
 if($fday<0)
 {
  $fmonth=$fmonth-1;
  $fday=30+$fday;
 }
 echo "DAYS=".$fday.'<br>';
 echo "MONTHS=".$fmonth.'<br>';
 echo "YEARS=".$fyear.'<br>';

 
} 
?> 

</body>
</html>