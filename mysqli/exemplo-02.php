<?php


$conn = new mysqli("localhost","root","","dbphp7");

if($conn->connect_error){

	echo "Error: ".$conn->connect_error;

}

$result = $conn->query("SELECT * FROM tb_usuarios");


//while($row = $result->fetch_array(MYSQLI_ASSOC)){ //Parametro MYSQLI_ASSOC tira o indice da array 
//ou
//while($row = $result->fetch_assoc()){
	//var_dump($row);
//}

//OU
//Utilizando JSON, possibilitando levar para outra aplicação

$data = array();

while($row = $result->fetch_assoc()){
	array_push($data, $row);
}

//print_r($data);
echo json_encode($data);

//Inserindo com metodo query
$conn->query("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES ('joao','22222')");

?>