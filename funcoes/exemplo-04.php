<?php

function ola(){

	$argumentos = func_get_args();
	$totAgs = func_num_args();
	echo $totAgs;
	return $argumentos;

}

var_dump(ola("Bom dia",10));

echo "<br/>";






?>