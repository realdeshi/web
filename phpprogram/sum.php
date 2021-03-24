<!DOCTYPE html>
<html>
<head>
	<title>sum in php</title>
</head>
<body>
    <form method="post" action="sum.php">
	First number:<input type="text" name="fno" required><br>
	Second number:-<input type="text" name="sno" required><br>
	<input type="submit" name="sub">
	</form>
</body>
</html>
<?php
	if(isset($_POST['sub']))
	{
	$var1 = $_POST['fno'];
	$var2 = $_POST['sno'];
	$sum = $var1 + $var2;
	echo "sum of no".$sum;
	}
	else{
		echo "firt press submit button";
	}
?>