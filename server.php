<?php 
	session_start();

	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	$db = mysqli_connect('localhost', 'root', '', 'registration');

	if (isset($_POST['reg_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		
		$sql_u = "SELECT * FROM person WHERE username='$username'";
		$res_u = mysqli_query($db, $sql_u);

		if (mysqli_num_rows($res_u) > 0) {
			echo "<script>alert('User already exists')</script>";
		}
		else{
			if (empty($username)) { echo "<script>alert('Username is required')</script>"; }
			if (empty($email)) { echo "<script>alert('Email is required')</script>"; }
			if (empty($password_1)) { echo "<script>alert('Password is required')</script>"; }
			if (empty($password_2)) { echo "<script>alert('Password is required')</script>"; }

			if (count($errors) == 0) {
				if ($password_1 == $password_2) {
					$password = $password_1;
					$query = "INSERT INTO person (username, email, password )VALUES('$username', '$email', '$password_1')";
					mysqli_query($db, $query);
					header('location: login.php');
				}
				else{
					echo "<script>alert('Passwords do not match !')</script>";
				}	
			}
		}
	}

	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			echo "<script>alert('Username is required')</script>";
		}
		if (empty($password)) {
			echo "<script>alert('Password is required')</script>";
		}

		if (count($errors) == 0) {
			$password = $password;
			$query = "SELECT * FROM person WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				header('location: Conversion.html');
			}else {
				echo "<script>alert('You have entered invalid username/password')</script>";
			}
		}
	}

?>