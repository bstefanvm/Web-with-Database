<?php
$UserName = filter_input(INPUT_POST, "UserName");
$UserPassword = filter_input(INPUT_POST, "UserPassword");
$UserPasswordAuth = filter_input(INPUT_POST, "UserPasswordAuth");
$UserMail = filter_input(INPUT_POST, "UserMail");
$RUserFN = filter_input(INPUT_POST, "UserFirstName");
$RUserLN = filter_input(INPUT_POST, "UserLastName");
$CreatedDate = date('Y-m-d H:i:s');
$LastLogged = date('Y-m-d H:i:s');
$UserMarkMarker = "Marker";
$UserMarkAdmin = "Admin";
$UserMarkWriter = "Writer";
$UserStatus = "Active";

$UserName = trim($UserName);
$UserPassword = trim($UserPassword);
$UserPasswordAuth = trim($UserPasswordAuth);
$UserMail = trim($UserMail);
$RUserFN = trim($RUserFN);
$RUserLN = trim($RUserLN);
$UserMarkMarker = trim($UserMarkMarker);
$UserMarkAdmin = trim($UserMarkAdmin);
$UserMarkWriter = trim($UserMarkWriter);
$UserStatus = trim($UserStatus);

$UserName = htmlspecialchars($UserName, ENT_QUOTES);
$UserMail = htmlspecialchars($UserMail, ENT_QUOTES);
$UserPassword = htmlspecialchars($UserPassword, ENT_QUOTES);
$UserPasswordAuth = htmlspecialchars($UserPasswordAuth, ENT_QUOTES);
?>
