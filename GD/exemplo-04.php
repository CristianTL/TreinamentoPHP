<?php

header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

$new_width = 256;
$new_height = 256;

list($old_width, $old_height) = getimagesize($file);

//Nova imagem com paleta de 16 milhoes de cores
$new_image = imagecreatetruecolor($new_width, $new_height);
//Cria imagem a partir da imagem original
$old_image = imagecreatefromjpeg($file);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);


?>