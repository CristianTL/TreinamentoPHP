<?php


class Pessoa{

	public $nome; //Atributo

	public function fala(){ //Método

		return "O meu nome é ".$this->nome;

	}

}

$thomaz = new Pessoa;
$thomaz->nome = "Thomaz Cristian";
echo $thomaz->fala();




?>