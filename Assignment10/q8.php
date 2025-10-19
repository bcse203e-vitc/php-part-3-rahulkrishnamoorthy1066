<?php
$src = imagecreatefromjpeg("image.jpg");
$new = imagescale($src, 200, 150);
header("Content-type:image/jpeg");
imagejpeg($new);
imagedestroy($src);
imagedestroy($new);
?>