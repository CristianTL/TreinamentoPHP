<?php

namespace Cliente; //Por padrao de organização segue o nome da pasta

class Cadastro extends \Cadastro {

	public function registrarVenda(){

		echo "Foi registrada uma venda para cliente ".$this->getNome();

	}

}

?>