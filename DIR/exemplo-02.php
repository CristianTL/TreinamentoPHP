<?php

$images = scandir("images");

//echo "<pre>";
//var_dump($images);
//echo "</pre>";

$data = array();


//echo "<pre>";
foreach($images as $img){
	if(!in_array($img,array(".",".."))){
		$filename = "images".DIRECTORY_SEPARATOR.$img;

		$info = pathinfo($filename);

		//Pegando e adicionando o tamanho do arquivo
		$info["size"] = filesize($filename);
		//Data da ultima modificação do arquivo
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		$info["url"] = "http://localhost:81/projetos/TreinamentoPHP/DIR/".$filename;

		//var_dump($info);
		array_push($data, $info);
	}
}
//echo "</pre>";
echo json_encode($data);

?>