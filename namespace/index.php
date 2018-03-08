<?php

require_once("config.php");

use CLiente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Cristian Lourenco");
$cad->setEmail("cristian@webwaken.com");
$cad->setSenha("123456");

$cad->registrarVenda();



?>