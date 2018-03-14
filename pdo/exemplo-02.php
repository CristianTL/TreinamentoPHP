<?php

//Conexão SQL Server
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost;ConnectionPooling=0", "login", "senha");
//com ODBC
//$conn = new PDO("odbc:sqlPHP","login","senha");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>".$key."</strong> = ".$value." | ";
	}
	echo "<br/>";
}


//var_dump($results);





?>