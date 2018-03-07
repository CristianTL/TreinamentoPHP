<?php

$ts = strtotime("2001-09-11");
//Opcoes
//dia atual
//$ts = strtotime("now");
//dia de amanhã
//$ts = strtotime("+1 day");
//semana seguinte
$ts = strtotime("+1 week");

echo date("l, d/m/Y", $ts);

echo "<br/>";

//echo date("H:i:s l");


?>