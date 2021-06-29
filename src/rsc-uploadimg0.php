<?php
$stmt->bindValue(':ImageID', NULL, PDO::PARAM_INT);
$stmt->bindParam(':ImageGallery', $ImgGal, PDO::PARAM_LOB);
$stmt->bindValue(':ImageTitle', $ImgTitle);
$stmt->bindValue(':ImageDescription', $ImgDesc);
$stmt->bindValue(':ImageInfo', $ImgInf);
$stmt->bindValue(':ImageUploadedDate', $ImgUplD);
$stmt->bindValue(':ImageCategory', $ImgCat);
?>
