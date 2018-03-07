<?php

interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

class Civic implements Veiculo{

	public function acelerar($velocidade){
		echo "O veículo acelerou até ".$velocidade." km/h";
	}

	public function frenar($v){
		echo "O veículo frenou a ".$v," km/h";
	}

	public function trocarMarcha($m){
		echo "O veículo esta engatado na marcha ".$m.".";
	}


}


$carro = new Civic();

$carro->trocarMarcha(1);

?>