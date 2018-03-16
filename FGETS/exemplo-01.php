<?php

$filename = "usuarios.csv";

if(file_exists($filename)){

	$file = fopen($filename,"r");

	//Pega a primeiro linha do arquivo
	$header = fgets($file);

	//Retornar como uma array
	$header = explode(",", $header);

	$data = array();

	echo "<pre>";
	while($row = fgets($file)){

		$rowData = explode(",",$row);
		$linha = array();

		for($i = 0; $i < count($header); $i++){

			$linha[$header[$i]] = $rowData[$i];

		}

		array_push($data, $linha);

	}
	var_dump($data);
	echo "</pre>";
	fclose($file);

}
?>