<?php


class Carro{

	private $modelo;
	private $motor;
	private $ano;

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function getMotor():float{
		return $this->motor;
	}

	public function setMotor($motor){
		$this->motor = $motor;
	}

	public function getAno():int{
		return $this->ano;
	}

	public function setAno($a){
		$this->ano = $a;
	}


	public function exibir(){
		return array(
			"modelo" => $this->getModelo(),
			"motor" => $this->getMotor(),
			"ano" => $this->getAno()
		);
	}

}

$prisma = new Carro;
$prisma->setModelo("Prisma Joy");
$prisma->setMotor("1.0");
$prisma->setAno("2009");

var_dump($prisma->exibir());


?>