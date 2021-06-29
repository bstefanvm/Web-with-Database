<?php
// PDO
DEFINE ('DB_USER_PDO', 'webadm');
DEFINE ('DB_PASSWORD_PDO', 'webadmpwd');
$PDO_DSN = 'mysql:host=localhost;port=3306;dbname=WebDB';

try {
	$dbConn = new PDO($PDO_DSN, DB_USER_PDO, DB_PASSWORD_PDO);
	$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	$err_msg = $e->getMessage();
	include('dbmar_error.php');
	exit();
}

// PDO - MySQL
$dbHost = "localhost";
$dbUserName = "webadm";
$dbPassword = "webadmpwd";
$dbName = "WebDB";

// PDO
$dbConn0 = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);
if($dbConn0->connect_error) {
	die("Connection failed: " . $dbConn0->connect_error);
}

// MySQL
$dbConn1 = mysqli_connect($dbHost, $dbUserName, $dbPassword, $dbName);
if(!$dbConn1) {
	die("Connection failed!");
}

echo "Connection to database is included!<br>";
?>
