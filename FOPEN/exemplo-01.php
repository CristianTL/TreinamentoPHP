<?php

//Abri e cria
$file = fopen("log.txt", "a+"); //w+ write (escrever e criar) //a+ acrescenta a informação

//Escreve na linha
fwrite($file, date("Y-m-d H:i:s")."\r\n"); // \r\n retorna e pula uma linha

fclose($file);

echo "Arquivo criado";



?>