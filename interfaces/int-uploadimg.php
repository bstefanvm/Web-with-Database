<?php
require_once('mustincs.php');
require_once("$AssetResources/rsc-uploadimg.php");

if(!is_uploaded_file($_FILES['ImgGallery']['tmp_name']) && $allowedSize == NULL && in_array($imgExt, $allowedExt) ||
	$ImgTitle == NULL || $ImgDesc == NULL || $ImgInf == NULL) {
	$err_msg = "Error in proccess! Either you did'nt select any image, image size more than 6MB, or you forget to complete the form.<br>";
	include("$AssetDBs/dbmar_connect.php");
}
elseif(!preg_match("/[a-zA-Z0-9]{2,30}+$/", $ImgTitle)) {
	$err_msg = "Image title is not valid.<br>";
	include("$AssetDBs/dbmar_error.php");
}
elseif(!filter_var($ImgInf, FILTER_VALIDATE_EMAIL)) {
	$err_msg = "Email is not valid<br>";
	include("$AssetDBs/dbmar_error.php");
}
	/* Emoji sanitazion
	require_once("$AssetResources/rsc-sanitization.php");
	elseif(preg_match_all($EmojiPattern, $ImgDesc);
	 */

else {
	require_once("$AssetDBs/dbmar_connect.php");
	require_once("$AssetResources/rsc-db.php");
	require_once("$AssetResources/rsc-checkgallery.php");
	require_once("$AssetResources/rsc-uploadimg0.php");

	$execute_check_image = $stmt1->execute();
	if($execute_check_image) {
		$galleryCheck = $stmt1->fetch(PDO::FETCH_ASSOC);
		if($galleryCheck["ImageTitle"] === $ImgTitle) {
			$err_msg = "Image title is already existed!";
			include("$AssetDBs/dbmar_error.php");
		}
		else {
			$execute_success = $stmt->execute();
			$stmt->closeCursor();
			if(!$execute_success) {
				print_r($stmt->errorInfo()[2]);
			}
			else {
				echo "You just uploaded an image.<br>";
				echo "You can view image on site.<br>";
			}
		}
	}
}
?>
