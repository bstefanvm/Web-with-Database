<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA Compatible">
	<link rel="stylesheet" href="../css/signup.css" type="text/css">
	<title>Sign Up and Login page</title>
</head>
<body>
	<div class="SignUpForm">
		<h1>Sign Up</h1>
		<form action="../interfaces/int-user_signup.php" method="POST">
			<label>Username:</label>
			<input type="text" name="UserName"><br>
			<label>Password:</label>
			<input type="password" name="UserPassword"><br>
			<label>Verify your Password:</label>
			<input type="password" name="UserPasswordAuth"><br>
			<label>First Name:</label>
			<input type="text" name="UserFirstName"><br>
			<label>Last Name:</label>
			<input type="text" name="UserLastName"><br>
			<label>Email:</label>
			<input type="text" name="UserMail"><br>
			<input type="submit" name="Submit_SignUp" value="Submit"><br>
			<label>
		</form>
	</div>
	<div class="LoginForm">
		<h1>Log In</h1>
		<form action="../interfaces/int-user_login.php" method="POST">
			<label>Username or your E-Mail:</label><br>
			<input type="text" name="UserEN"><br>
			<label>Password:</label><br>
			<input type="password" name="UserPassword"><br>
			<input type="submit" name="Submit_Login" value="Submit"><br>
		</form>
	</div>
</body>
</html>
