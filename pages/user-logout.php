<?php
session_start();
UNSET($_SESSION['LogInUserID']);
UNSET($_SESSION['LogInUserUniqueBind']);
UNSET($_SESSION['LogInUserName']);
UNSET($_SESSION['LogInUserMail']);
UNSET($_SESSION['LogInUserNick']);
UNSET($_SESSION['LogInUserMark']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log Out page</title>
</head>
<body>
	<p>You just logged out!</p>
</body>
</html>
