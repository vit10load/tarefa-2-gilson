<?php 

class Pergunta {

	private $id;
	private $description;
	private $pontuacao;

	public function __construct(){

	}

	public function setId($id) {

		$this->id = $id;
	}

	public function getId(){

		return $this->id;
	}

	public function setDescription($description) {

		$this->description = $description;
	}

	public function getDescription(){

		return $this->description;
	}

	public function setPontuacao(Pontuacao $pontuacao) {

		$this->pontuacao = $pontuacao;
	}

	public function getPontuacao(){

		return $this->pontuacao;
	}
}


?>