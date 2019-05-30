<html>
<head>
<title>EXPERIMENT 8</title>
 <link rel="stylesheet" href="s.css">
</head>
<body>
 <header>EXPERIMENT8 PART1</header>
<divl><?php
/* Create a class Book with member functions setPrice(), getPrice(), setTitle(), getTitle(). Make objects for class book to set price & title of books. And then print the same.  */
class Book{
	var $a,$b;
function setPrice($x)
{
	$this->a=$x;
}

function getPrice()
{
	echo '<h1>'."Price: "." $this->a".'</h1>';
}

function setTitle($y)
{
	$this->b=$y;
}

function getTitle()
{
		echo '<h1>'."Title: "." $this->b".'</h1>';
}


}

$ob=new Book();
$ob->setPrice(1500);
$ob->setTitle('Hello world');
$ob->getPrice();
echo"<br>";
$ob->getTitle();
?>
</divl>
 <divr><?php show_source("exp8_1.php"); ?></divr>
  <footer>
  <center><a href="index.php"><h1>HOMEPAGE</a></h1></center>
</footer>

</body>
</html>