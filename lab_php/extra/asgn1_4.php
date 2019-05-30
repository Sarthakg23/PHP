<html>
<head>
	<title>POWER </title>
</head>
<body>
	<form method=get action="">
	Enter a number:<input type=number name="base" required><br>
	Enter power :<input type=number name="power" required><br>
	<input type=submit>
	</form>
	<?php
	function power($base, $power)
    {
    if ($power!= 0)
        return $base*power($base, $power-1);
    else
        return 1;
    }
	if(isset($_GET['base']) && isset($_GET['power']))
	{
		$result=power($_GET['base'],$_GET['power']);
		echo "<br>Result is : ",$result;
	}
	?>
	
</body>
</html>
