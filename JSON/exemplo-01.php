<?php

$pessoas = array();


array_push($pessoas, array(
	'nome' => 'Joao',
	'idade' => 20
));

array_push($pessoas, array(
	'nome' => 'Glaucio',
	'idade' => 25
));

$pessoas[] = array(
	'nome' => 'Thomaz',
	'idade' => 34
);


echo json_encode($pessoas)

?>