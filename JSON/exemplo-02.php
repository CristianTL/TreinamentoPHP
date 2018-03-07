<?php

$json = '[{"nome":"Joao","idade":20},{"nome":"Glaucio","idade":25},{"nome":"Thomaz","idade":34}]';

$data = json_decode($json);

print_r($data);


echo "<br/>";

//Colocando true, devolve como array
$data2 = json_decode($json,true);

print_r($data2);


?>