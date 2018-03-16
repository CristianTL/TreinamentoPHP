<?php

$cep = "01001000";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // 1- ESPERA UM RETORNO
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // Utilizado caso seja um https, evitando a verificação

$response = curl_exec($ch);

curl_close($ch);


print_r(json_decode($response, true));

echo "<br/>";

print_r(json_decode($response));


?>