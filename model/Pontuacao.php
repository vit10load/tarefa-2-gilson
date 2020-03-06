<?php 

class Pontuacao {

	private $id;
	private $valor;

	public function __construct(){

	}

	public function setId($id) {

		$this->id = $id;
	}

	public function getId(){

		return $this->id;
	}

	public function setValor($valor) {

		$this->valor = $valor;
	}

	public function getValor(){

		return $this->valor;
	}
}

?>