<?php

//Tipo de resposta desse arquivo
header("Content-Type: image/png");

//Primeiro passo: largura e altura com o metodo imagecreate
$image = imagecreate(256, 256);

//Criando uma paleta de cores. OBS a primeira cor será a cor de fundo
$black = imagecolorallocate($image, 0, 0, 0); // Preto
$red = imagecolorallocate($image, 255, 0, 0); // Vermelho

//Escrevendo na tela
imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);

//Renderiazando em PNG
imagepng($image);

//Destruindo a imagem
imagedestroy($image);


?>