<?php
require_once('mustincs.php');
require_once("$AssetDBs/dbmar_connect.php");
require_once("$AssetResources/rsc-db.php");
require_once("$AssetFunctions/func-users.php");
$users_statement->execute();
$users = $users_statement->fetchAll();
$users_statement->closeCursor();
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List of all users</title>
	<link rel="stylesheet" type="text/css" href="../css/users-list.css">
</head>
<body>
	<div class="table" style="overflow-x:auto;">
	<h3>List of Users:</h3>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>User unique bind</th>
				<th>Username</th>
				<th>Password</th>
				<th>Name</th>
				<th>Email</th>
				<th>Role</th>
				<th>Date</th>
				<th>Last Logged</th>
				<th>Status</th>
			</tr>
		</thead>
	<?php
	foreach($users as $user) :
	?>
		<tbody>
			<tr>
				<td><?php echo $user['UserID']; ?></td>
				<td><?php echo $user['UserUniqueBind']; ?></td>
				<td><?php echo $user['UserName']; ?></td>
				<td><?php
				$passwdEntry = $user['UserPassword'];
				password_status($passwdEntry);
				?>
				</td>
				<td><?php echo $user['RUserFN'] . " " . $user['RUserLN']; ?></td>
				<td><?php echo $user['UserMail']; ?></td>
				<td><?php echo $user['UserMark']; ?></td>
				<td><?php echo $user['CreatedDate']; ?></td>
				<td><?php echo $user['LastLogged']; ?></td>
				<td><?php echo $user['UserStatus']; ?></td>
			</tr>
		</tbody>
	<?php endforeach;
	?>
	</table>
</body>
</html>
