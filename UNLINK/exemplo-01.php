<?php

//Só para criar o arquivo
$file = fopen("teste.txt", "w+");
fclose($file);

//apaga o arquivo
unlink("teste.txt");

echo "arquivo removido";



?>