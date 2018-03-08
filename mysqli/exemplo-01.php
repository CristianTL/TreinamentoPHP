<?php


$conn = new mysqli("localhost","root","","dbphp7");

if($conn->connect_error){

	echo "Error: ".$conn->connect_error;

}

//Preparando um comando
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?,?)");
$stmt->bind_param("ss",$login,$pass);

$login = "user";
$pass = "12345";

//Execuntando e gravando
$stmt->execute();

//Gravando novamente
$login = "user2";
$pass = "54321";
$stmt->execute();


?>