<?php
// Gallery
// Upload
$query_upload_gallery = "INSERT INTO gallery(
	ImageID, ImageGallery, ImageTitle, ImageDescription, ImageInfo, ImageUploadedDate, ImageCategory)
	VALUES(
	:ImageID, :ImageGallery, :ImageTitle, :ImageDescription, :ImageInfo, :ImageUploadedDate, :ImageCategory)";

$stmt = $dbConn->prepare($query_upload_gallery);

// Check
$query_check_gallery = "SELECT * FROM gallery WHERE ImageTitle = :ImageTitle";
$stmt1 = $dbConn->prepare($query_check_gallery);

// View
$query_entries_gallery = "SELECT * FROM gallery ORDER BY ImageID DESC";

$gallery_statement = $dbConn->prepare($query_entries_gallery);
$imgFetchResult = $dbConn0->query($query_entries_gallery);

// Users
// Create
$query_create_users = "INSERT INTO users(
	UserID, UserUniqueBind, UserMark, UserName, UserPassword, UserMail, RUserFN, RUserLN, CreatedDate, LastLogged, UserStatus)
	VALUES(
	:UserID, :UserUniqueBind, :UserMark, :UserName, :UserPassword, :UserMail, :RUserFN, :RUserLN, :CreatedDate, :LastLogged, :UserStatus)";

$stmt5 = $dbConn->prepare($query_create_users);

// Check
$query_check_users = "SELECT * FROM users WHERE UserName = :UserName OR UserMail = :UserMail";
$stmt6 = $dbConn->prepare($query_check_users);

// Login
$query_login_users = "SELECT * FROM users WHERE UserName = :UserEN OR UserMail = :UserEN LIMIT 1";
$stmt7 = $dbConn->prepare($query_login_users);

// List
$query_list_users = "SELECT * FROM users ORDER BY UserID";
$users_statement = $dbConn->prepare($query_list_users);
?>
