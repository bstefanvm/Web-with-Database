<?php
//$UserEN = $_POST['UserEN'];
//$UserPassword = $_POST['UserPassword'];

$UserEN = filter_input(INPUT_POST, "UserEN");
$UserPassword = filter_input(INPUT_POST, "UserPassword");

$UserEN = trim($UserEN);
$UserPassword = trim($UserPassword);

$UserEN = htmlspecialchars($UserEN, ENT_QUOTES);
$UserPassword = htmlspecialchars($UserPassword, ENT_QUOTES);
?>
