<?php
// PDO
$gallery_statement->execute();
$gallery = $gallery_statement->fetchAll();
$gallery_statement->closeCursor();
?>
