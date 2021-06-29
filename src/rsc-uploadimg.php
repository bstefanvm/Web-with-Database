<?php
$imageP = $_FILES['ImgGallery'];
$imagePz = basename($imageP["name"]);
$imgExt = pathinfo($imagePz, PATHINFO_EXTENSION);
$allowedExt = array('jpg','png','jpeg');
$allowedSize = $_FILES['ImgGallery']['size'] <= 6291456;

$ImgGal = fopen($_FILES['ImgGallery']['tmp_name'], 'rb');
$ImgTitle = filter_input(INPUT_POST, "ImgTitle");
$ImgDesc = filter_input(INPUT_POST, "ImgDescription");
$ImgInf = filter_input(INPUT_POST, "ImgInfo");
$ImgUplD = date('Y-m-d H:i:s');
$ImgCat = filter_input(INPUT_POST, "ImgCategory");

$ImgTitle = trim($ImgTitle);
$ImgInf = trim($ImgInf);
$ImgCat = trim($ImgCat);

$ImgTitle = htmlspecialchars($ImgTitle, ENT_QUOTES);
$ImgInf = htmlspecialchars($ImgInf, ENT_QUOTES);
$ImgCat = htmlspecialchars($ImgCat, ENT_QUOTES);

$ImgInf = strtolower($ImgInf);
?>
