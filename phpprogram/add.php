<?php
include('config.php');
?>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form method="POST" action="add.php">
		username:<input type="text" name="username" placeholder="enter your username" required><br>
		E-mail:<input type="E-mail" name="email" placeholder="enter e E-mail" required><br>
		Select gender-
		male<input type="radio" name="gender" value="m">
		female<input type="radio" name="gender" value="f"><br>
		city<select name="city">
			<option value="dehradun">dehradun</option>
			<option value="delhi">delhi</option>
			<option value="jaipur">jaipur</option>
			<option value="kanpur">kanpur</option>
			<option value="banarsh">banarsh</option>
			<option value="ahemdabad">ahemdabad</option>
			<option value="lucknow">lucknow</option>
			<option value="chennai">chennai</option>
		</select><br>
		<input type="submit" name="sub">
	</form>
</body>
</html>
<?php
if(isset($_POST['sub'])){
	$username=$_POST['username'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$city=$_POST['city'];
	$sql="INSERT INTO `users` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";
mysqli_query($conn,$sql);
}
else{
	echo "first press submit button";
}
?>