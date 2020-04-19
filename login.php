<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>

	
	
	<form class = "box" method="post" action="login.php">

  <h1>Login</h1>
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <input type="submit" name="login_user" value="Login">
  <p style="color:white">
			Not yet a member? <a style="color:#e63535" href="register.php">Sign up</a>
		</p>
</form>

</body>
</html>