<?php


require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//Carrega um usuario
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//Carrega uma lista de usuarios
//echo json_encode(Usuario::getList());

//Carrega pelo login
//echo json_encode(Usuario::search("jo"));

//Logar com o usuario
//$logar = new Usuario();
//$logar->login("lucas","123456789");
//echo $logar;


//Inserindo registro
//$aluno = new Usuario("aluno2","@lun1");

//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");

//$aluno->insert();
//echo $aluno;


//Atualizando registro
//$usuario = new Usuario();
//$usuario->loadById(10);
//$usuario->update("professor","!@$#");

//echo $usuario;

//Deletando registro
$usuario = new Usuario();
$usuario->loadById(11);
$usuario->delete();

echo $usuario;





?>