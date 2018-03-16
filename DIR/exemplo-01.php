<?php

$name = "images";

if(!is_dir($name)){
	//Cria o diretorio
	mkdir($name);
	echo "Diretório $name criado com sucesso";

} else {
	//Apaga o diretorio
	rmdir($name);
	echo "Já existe o diretório: $name foi removido";

}



?>