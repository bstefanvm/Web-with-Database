<?php 
require_once('mustincs.php');
require_once "$AssetDBs/dbmar_connect.php";
require_once "$AssetResources/rsc-db.php";
require_once "$AssetResources/rsc-viewimg.php";
$Retrievetype = htmlspecialchars("Using fetch assoc() with syntax query->fetch", ENT_QUOTES);
?>
<?php
echo $Retrievetype . "<br>";
if($imgFetchResult->num_rows > 0) {
?>
	<div class="gallery"> 
<?php
	while($row = $imgFetchResult->fetch_assoc()) {
?> 
		<img src="data:image/jpeg;charset=utf8;base64,
<?php
		echo base64_encode($row['ImageGallery']);
?>"
		height="250px" width="250px" />
		<br>
		<p><?php echo $row['ImageTitle']; ?></p>
		<p><?php echo $row['ImageDescription']; ?></p>
		<p><?php echo $row['ImageInfo']; ?></p>
		<p><?php echo $row['ImageUploadedDate']; ?></p>
		<p><?php echo $row['ImageCategory']; ?></p>
		<br>
<?php
	}
?> 
	</div> 
<?php }
else {
?> 
	<p class="status error">Image(s) not found...</p> 
<?php
}
?>
	<!-- Different method -->
<?php
echo "This is using original fetchall with for each";
echo "<br>";
?>
<?php
foreach($gallery as $image):
?>
	<div class="gallery">
		<img src="data:image/jpeg;charset=utf8;base64,
<?php
	echo base64_encode($image['ImageGallery']);
?>"
			height="250px" width="250px" />
			<p><?php
echo $image['ImageTitle'];
?></p>
	<p><?php
echo $image['ImageDescription'];
?></p>
	<p><?php
echo $image['ImageInfo'];
?></p>
	<p><?php
echo $image['ImageUploadedDate'];
?></p>
<?php
echo $image['ImageCategory'];
?>
	</div>
<?php
endforeach;
?>
