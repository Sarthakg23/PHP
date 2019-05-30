<html>
<head>
<title>EXPERIMENT 8</title>
 <link rel="stylesheet" href="s.css">
</head>
<body>
 <header>EXPERIMENT8 PART2</header>
<divl><?php 
/* Create one constructor for Book class to initialize price and title for the book at the time of object creation. */

class Book{

var $a,$b;

function Book($x,$y)
{
	$this->a=$x;
	$this->b=$y;

}
function getTitle()
{
		echo '<h1>'."Title: "." $this->b".'</h1>';
}
function getPrice()
{
	echo '<h1>'."Price: "." $this->a".'</h1>';
}


}


$ob=new Book(1000,'Hello World2');
$ob->getPrice();
echo"<br>";
$ob->getTitle();
?>
</divl>
 <divr><?php show_source("exp8_2.php"); ?></divr>
  <footer>
  <center><a href="index.php"><h1>HOMEPAGE</a></h1></center>
</footer>

</body>
</html>