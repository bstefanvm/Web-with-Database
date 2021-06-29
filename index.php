<?php
	include_once('varpath.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA Compatible">
	<link rel="stylesheet" href="css/index.css" type="text/css">
	<link rel="stylesheet" href="css/view.css" type="text/css">
	<title>Debdev.com | Home</title>
</head>
<body>
	<div class="ImageForm">
		<h1>Image upload form</h1>
		<form enctype="multipart/form-data" action="interfaces/int-uploadimg.php" method="POST">
		<label>Select Image:</label>
		<input type="file" name="ImgGallery"><br>
		<label>Image Title:</label>
		<input type="text" name="ImgTitle"><br>
		<label>Image Description:</label>
		<input type="text" name="ImgDescription"><br>
		<label>Image Uploader Info:</label>
		<input type="text" name="ImgInfo"><br>
		<label>Image Category:</label>
		<select name="ImgCategory">
			<option value="Photography">Photography</option>
			<option value="Artwork">Artwork</option>
			<option value="Life">Life</option>
		</select>
		<br>
			<input type="submit" name="Submit_Image" value="Submit"><br>
		</form>
	</div>
	<?php
		require_once("$AssetInterfaces/int-viewimg.php");
	?>
</body>
</html>
