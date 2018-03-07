<?php

/* define o limitador de cache para 'private' */
//session_cache_limiter('public');
//$cache_limiter = session_cache_limiter();

/* define o prazo do cache em 30 minutos */
//session_cache_expire(30);
//$cache_expire = session_cache_expire();


require_once("config.php");

echo session_save_path();
echo "<br/>";
var_dump(session_status());
echo "<br/>";

switch(session_status()){
	case PHP_SESSION_DISABLED:
	echo "as sessoes estiverem desabilitadas";
	break;
	case PHP_SESSION_NONE:
	echo "as sessões estiverem habilitadas, mas nenhum existir";
	break;
	case PHP_SESSION_ACTIVE:
	echo "as sessões estiverem habilitadas, e uma existir";
	break;
}
echo "<br/>";


//echo "O limitador de cache está definido agora como $cache_limiter<br />"; 
//echo "As sessões em cache irão expirar depois de $cache_expire minutos";



?>