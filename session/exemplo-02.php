<?php

require_once ("config.php");

//Apaga variavel de sessão
//session_unset($_SESSION["nome"]);

echo $_SESSION["nome"];

//Finaliza a sessão
//session_destroy();

//print_r($_SESSION);
?>