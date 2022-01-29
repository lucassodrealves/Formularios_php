<?php header('Content-Type: image/jpeg');
$im = imagecreatefromjpeg('madruga.jpg');
imagejpeg($im);
?>