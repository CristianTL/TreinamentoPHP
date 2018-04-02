<?php

if($_SERVER["REQUEST_METHOD"] === 'POST'){
	//escapeshellcmd proteje contra o alguns comandos cmd
	$cmd = escapeshellcmd($_POST["cmd"]);

	var_dump($cmd);

	echo "<pre>";

	//$comando = system("dir C:", $retorno);
	$comando = system($cmd, $retorno);

	echo "</pre>";

}

//Parando o xampp
//dir c:\ && C:/xampp/xampp_stop.exe


?>
<form method="post">
	
	<input type="text" name="cmd">
	<button type="submit">Enviar</button>

</form>