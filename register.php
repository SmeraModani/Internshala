<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body>
	
	
	<form class = "box1" method="post" action="register.php">
	<h2>Register</h2>
		
			
			<input type="text" name="username" placeholder = "username">
		
			<input type="email" name="email" placeholder = "email">

			<input type="password" name="password_1" placeholder = "password">
		
			<input type="password" name="password_2" placeholder = "confirm password">
	
			<input type="submit" name="reg_user" value="Register">
		<p style = "color:white">
			Already a member? <a style="color:#e63535" href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>