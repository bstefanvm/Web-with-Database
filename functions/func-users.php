<?php
function password_status($passwdEntry){
	if(strlen($passwdEntry) >= 60) {
		$passwdStatus = "Hashed";
	}
	else {
		$passwdStatus = "Not Hashed";
	}
	echo $passwdStatus;
}
?>
