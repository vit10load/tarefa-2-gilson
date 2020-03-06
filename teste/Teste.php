<?php 

class Teste {

	private $pergunta;
	private $pontuacao;

	public function __construct(Pergunta $pergunta, Pontuacao $pontucao) {

		$this->pergunta = $pergunta;
		$this->pontuacao = $pontuacao;
	}

	public function perguntaExiste() {

		if ($this->pergunta->getDescription() != null) {
			
			echo "test passed";

		}else {

			echo "Fail!";
		}
	}

	public function pontuacaoMaiorQueZero() {

		if ($this->pontuacao->getValor() > 0) {

			echo "Test passed";

		}else {

			echo "Fail";
		}
	}
}

?>