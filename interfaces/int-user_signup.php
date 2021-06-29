<?php
require_once('mustincs.php');
require_once("$AssetDBs/dbmar_connect.php");
require_once("$AssetResources/rsc-createusers.php");

if($UserMarkMarker == NULL || $UserName == NULL || $UserPassword == NULL || $UserPasswordAuth == NULL || $UserMail == NULL ||
	$RUserFN == NULL || $RUserLN == NULL || $CreatedDate == NULL || $LastLogged == NULL || $UserStatus == NULL) {
	$err_msg = "Please fill all mandatory fields.<br>";
	include("$AssetDBs/dbmar_error.php");
}
elseif(!preg_match("/(?=.*[A-Za-z])[0-9A-Za-z!#$%&]{3,12}$/", $UserName)) {
	$err_msg = "Username must contain at least a letter with 3-12 characters.<br>";
	include("$AssetDBs/dbmar_error.php");
}
elseif(str_contains($UserName, '.com')) {
	$err_msg = "Username must not contain domain name, e.g: .com, .net, .co.id, and etc.";
	include("$AssetDBs/dbmar_error.php");
}
elseif(!preg_match("/(?=.*[A-Za-z])[0-9A-Za-z!#$%&]{6,18}$/", $UserPassword)) {
	$err_msg = "Password must contain at least a letter with 6-18 characters.<br>";
	include("$AssetDBs/dbmar_error.php");
}
elseif(!preg_match("/[a-zA-Z]{3,30}$/", $RUserFN)) {
	$err_msg = "First Name is not valid.<br>";
	include("$AssetDBs/dbmar_error.php");
}
elseif(!preg_match("/[a-zA-Z]{3,30}$/", $RUserLN)) {
	$err_msg = "Last Name is not valid.<br>";
	include("$AssetDBs/dbmar_error.php");
}
elseif(!filter_var($UserMail, FILTER_VALIDATE_EMAIL)) {
	$err_msg = "Email is not valid.<br>";
	include("$AssetDBs/dbmar_error.php");
}
elseif($UserPassword !== $UserPasswordAuth) {
	echo "Password did not match!";
}
else {
	require_once("$AssetResources/rsc-db.php");
	if($UserName != NULL && $UserMail != NULL) {
		require_once("$AssetResources/rsc-checkusers.php");
		//$execution_check_succeed = $stmt6->execute($cuArray);		//Object
		$execution_check_succeed = $stmt6->execute();							//Array
		if($execution_check_succeed) {
			/*

			// Object
			$usersCheck = $stmt6->fetchAll(PDO::FETCH_OBJ);
			if(is_array($usersCheck) && count($usersCheck) > 0) {
				$err_msg = "Email or Username are already existed!<br>";
				include("$AssetDBs/dbmar_error.php");
			}
			 */ 

			// Array
			$usersCheck = $stmt6->fetch(PDO::FETCH_ASSOC);
			if($usersCheck["UserName"] === $UserName) {
				$err_msg = "Username is already exists!<br>";
				include("$AssetDBs/dbmar_error.php");
			}
			elseif($usersCheck["UserMail"] === $UserMail) {
				$err_msg = "Email is already exists!<br>";
				include("$AssetDBs/dbmar_error.php");
			} 
			else {
				echo "You can proceed!<br>";

				require_once("$AssetFunctions/func-general.php");
				require_once("$AssetResources/rsc-createusers0.php");

				$execution_create_succeed = $stmt5->execute();
				$stmt5->closeCursor();
				if(!$execution_create_succeed) {
					print_r($stmt5->errorInfo()[2]);
				}
			}
		}
	}
	else {
		echo "Please enter valid Email and Username!";
	}
}
?>
