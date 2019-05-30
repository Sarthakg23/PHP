<html>
<head>
<title>EXPERIMENT 7</title>
 <link rel="stylesheet" href="s.css">     
<script>
function add(){
var a,b,c;
a=Number(document.getElementById("one").value);
b=Number(document.getElementById("two").value);
c= a + b;
window.alert(c);
}
</script>
</head>
<body>
<header>EXPERIMENT7 PART2</header>
<divl><form action="" method="post">
Enter first number<input id="one" type="number"><br>
Enter Second number<input id="two" type="number">
</form>
<button onclick="add()">Add</button></divl>
</divl>
 <divr><?php show_source("exp7_2.php"); ?></divr>
  <footer>
  <center><a href="index.php"><h1>HOMEPAGE</a></h1></center>
</footer>

</body>
</html>
