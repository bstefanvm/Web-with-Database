<?php
session_start();

require_once('mustincs.php');
require_once("$AssetDBs/dbmar_connect.php");
require_once("$AssetResources/rsc-db.php");
require_once("$AssetResources/rsc-loginusers.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
	if($UserEN == NULL || $UserPassword == NULL) {
		$err_msg = "Please fill all mandatory fields.<br>";
		include("$AssetDBs/dbmar_error.php");
	}
	elseif(str_contains($UserEN, '@') && !filter_var($UserEN, FILTER_VALIDATE_EMAIL)) {
		$err_msg = "Please enter valid email.<br>";
		include("$AssetDBs/dbmar_error.php");
	}
	else {
		require_once("$AssetResources/rsc-loginusers0.php");
		$execution_login_succeed = $stmt7->execute();
		if($execution_login_succeed) {
			echo "Execution statement is succeeded!<br>";
			echo "Username field: $UserEN" . "<br>";

			$fetchUserInfo = $stmt7->fetch(PDO::FETCH_ASSOC);
			if(is_array($fetchUserInfo) && count($fetchUserInfo) > 0) {
				echo "Fetching is succeeded!<br>";
			}
			else {
				echo "Fetching is not succeeded!<br>";
			}
			$LIUserPassword		= $fetchUserInfo["UserPassword"];
			$LIUserUniqueBind = trim($fetchUserInfo["UserUniqueBind"]);
			$LIUserID					= trim($fetchUserInfo["UserID"]);
			$LIUserName				= trim($fetchUserInfo["UserName"]);
			$LIUserMail				= trim($fetchUserInfo["UserMail"]);
			$LIUserNick				= trim($fetchUserInfo["RUserFN"]);
			$LIUserMark				= trim($fetchUserInfo["UserMark"]);
			$LIUserStatus			= trim($fetchUserInfo["UserStatus"]);
			$LIUserUniqueBind	= htmlspecialchars($LIUserUniqueBind, ENT_QUOTES);
			$LIUserName				= htmlspecialchars($LIUserName, ENT_QUOTES);
			$LIUserMail				= htmlspecialchars($LIUserMail, ENT_QUOTES);
			$LIUserNick				= htmlspecialchars($LIUserNick, ENT_QUOTES);
			$LIUserMark				=	htmlspecialchars($LIUserMark, ENT_QUOTES);
			$LIUserStatus			=	htmlspecialchars($LIUserStatus, ENT_QUOTES);
			$LIUserName				= strtolower($LIUserName);
			$LIUserMail				= strtolower($LIUserMail);
			$LIUserNick				= ucfirst(strtolower($LIUserNick));
			$LIUserMark				= ucfirst(strtolower($LIUserMark));
			$LIUserStatus			= ucfirst(strtolower($LIUserStatus));

			echo $LIUserName . "<br>";
			echo $LIUserMail . "<br>";
			echo $LIUserNick . "<br>";

			if(password_verify($UserPassword, $LIUserPassword)) {

				echo "Fetching database entry and assigns variable for user!<br>";

				$_SESSION['LogInUserID']					= $LIUserID;
				$_SESSION['LogInUserUniqueBind']	= $LIUserUniqueBind;
				$_SESSION['LogInUserName']				= $LIUserName;
				$_SESSION['LogInUserMail']				= $LIUserMail;
				$_SESSION['LogInUserNick']				= $LIUserNick;
				$_SESSION['LogInUserMark']				= $LIUserMark;
				$_SESSION['LogInUserStatus']			= $LIUserStatus;

				echo $_SESSION['LogInUserID'] . "<br>";
				echo $_SESSION['LogInUserUniqueBind'] . "<br>";
				echo $_SESSION['LogInUserName'] . "<br>";
				echo $_SESSION['LogInUserMail'] . "<br>";
				echo $_SESSION['LogInUserNick'] . "<br>";
				echo $_SESSION['LogInUserMark'] . "<br>";
				echo $_SESSION['LogInUserStatus'] . "<br>";
			}
			else {
				echo "Your password did not match!";
			}
		}
		else {
			print_r($stmt7->errorInfo()[2]);
		}
	}
}
	else {
		echo "You must fill all mandatory fields on login form!";
	}
?>
