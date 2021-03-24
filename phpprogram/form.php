<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form method="POST" action="form.php">
		username:<input type="text" name="username" placeholder="enter your username" required><br>
		password:<input type="password" name="password" placeholder="enter password" required><br>
		E-mail:<input type="E-mail" name="email" placeholder="enter e E-mail" required><br>
		Select gender-
		male<input type="radio" name="gender" value="m">
		female<input type="radio" name="gender" value="f"><br>
		Interest(you can fill multiple items)-
		coding<input type="checkbox" name="Interest[]" value="coding">
		sports<input type="checkbox" name="Interest[]" value="sports">
		reading<input type="checkbox" name="Interest[]" value="reading">
		Travelling<input type="checkbox" name="Interest[]" value="travelling"><br>
		<input type="submit" name="sub">
	</form>
</body>
</html>
<?php
if(isset($_POST['sub'])){
	echo "gender <br>" .$_POST['gender']."<br>";
	$interests=$_POST['Interest'];
	foreach ($interests as $Interest) {
		echo $Interest;
	}
}
?>