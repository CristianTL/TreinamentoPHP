<?php

//Comentário de linha

/*
Commentário de bloco
*/

$anoNascimento = 1990;

$nomeCompleto = "";

$nome1 = "Thomaz";

//Limpando variável
unset($nome1);

//Verificando se a váriavel esta configurada
if(isset($nome1)){
	echo $nome1; 
} else {
	echo "Variável zerada";
}
echo "<br/>";
//Concatenando
$texto1 = "Hello";
$texto2 = "World";

$textoFinal = $texto1." ".$texto2;

echo $textoFinal;


?>