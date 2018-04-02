<?php

session_start();

//Depois de verificar login e senha, reinicie o ID da sessão
session_destroy();

session_start();

//gera um novo
session_regenerate_id();

echo session_id();


?>