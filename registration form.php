<!DOCTYPE html>
<html>
<head>
	<title>Registration & Login Form</title>
</head>
<body>
	<h1>Registration Form</h1>
	<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$confirm_password = $_POST['confirm_password'];
			if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password)) {
				echo '<p>All fields are required.</p>';
			} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo '<p>Invalid email format.</p>';
			} else if ($password !== $confirm_password) {
				echo '<p>Passwords do not match.</p>';
			} else {
				
				echo '<p>Registration successful!</p>';
			}
		}
	?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<label for="first_name">First Name:</label>
		<input type="text" id="first_name" name="first_name" required><br><br>
		<label for="last_name">Last Name:</label>
		<input type="text" id="last_name" name="last_name" required><br><br>
		<label for="email">Email Address:</label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>
		<label for="confirm_password">Confirm Password:</label>
		<input type="password" id="confirm_password" name="confirm_password" required><br><br>
		<input type="submit" name="register" value="Register">
	</form>

	<h1>Login Form</h1>
	<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];
			if (empty($email) || empty($password)) {
				echo '<p>All fields are required.</p>';
			} else {
				
				header('Location: welcome.php?first_name=nazmul'); 
			}
		}
	?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<label for="email">Email Address:</label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>
		<input type="submit" name="login" value="Login">
	</form>
