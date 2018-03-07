<?php

$nome = "HCode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
/////////////////////////////////////
$frutas = array("abacaxi", "laranja", "manga");
echo $frutas[2];
echo "<br/>";
//Objeto
$nascimento = new DateTime();
var_dump($nascimento);
echo $nascimento->date;
echo "<br/>";
////////////////////////////////////
$arquivo = fopen("exemplo-03.php", "r");
var_dump($arquivo);
echo "<br/>";
////////////////////////////////////
$nulo = NULL;

?>