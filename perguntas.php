<?php 
	
	include 'model/Pergunta.php';
	include 'model/Pontuacao.php';
	include 'teste/Teste.php';

	$pontuacao = new Pontuacao();
	$pontuacao->setValor(100);

	$pergunta = new Pergunta();
	$pergunta->setId(1);
	$pergunta->setDescription("1 - Vc posaria nu por R$500.000,00 ?");
	$pergunta->setPontuacao($pontuacao);

	$pergunta1 = new Pergunta();
	$pergunta1->setId(2);
	$pergunta1->setDescription("2 - Seu maior sonho é ficar rico ?");
	$pergunta1->setPontuacao($pontuacao);

	$pergunta2 = new Pergunta();
	$pergunta2->setId(3);
	$pergunta2->setDescription("3 - Voçe daria um presente de aniversario pra sua namorada, depois da separação ?");
	$pergunta2->setPontuacao($pontuacao);

	$pergunta3 = new Pergunta();
	$pergunta3->setId(4);
	$pergunta3->setDescription("4 - Vc andaria de bicicleta de coxim até Rio verde, por R$1.000.000.,00 ?");
	$pergunta3->setPontuacao($pontuacao);

	$pergunta4 = new Pergunta();
	$pergunta4->setId(5);
	$pergunta4->setDescription("5 - Voçe gosta de filmes romanticos Americanos ?");
	$pergunta4->setPontuacao($pontuacao);

	$rand = rand(1,4);

	$id_pergunta = null;

	$valorPontuacao = 0;

?>


<!DOCTYPE html>
<html>
<head>
	<title>Perguntas</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<style type="text/css">

	body {

		padding: 5px;
		overflow-x: hidden;
	}

	header h1 {

		font-family: 'Open Sans', sans-serif;
		font-size: 80px;
		font-weight: bold;
	}

	section {
		padding: 50px;
		font-family: 'Open Sans', sans-serif;
		font-size: 60px;
		font-weight: bold;
	}

	section form div input {

		width: 50px;
		height: 50px;
	}

	button {
		display: block;
		margin: 0 auto;
		width: 90%;
		height: 300px;
		margin-top: 50px;
		margin-bottom: 50px;
		font-size: 70px;
		text-transform: uppercase;
		line-height: 70px;
	}

	.position {

		margin-left: 28px;
	}

	.alin {

		text-align: center;
	}

	.pontos {

		float: right;
	}

</style>

<body>

	<header>
		<h1>
			<?php 

				if ($rand == 1) {
					
					echo $pergunta->getDescription();

					$id_pergunta = $rand;

					$valorPontuacao = $pergunta->getPontuacao()->getValor();

				}elseif ($rand == 2) {
					
					echo $pergunta2->getDescription();

					$id_pergunta = $rand;

					$valorPontuacao = $pergunta2->getPontuacao()->getValor();

				}elseif ($rand == 3) {

					echo $pergunta3->getDescription();

					$id_pergunta = $rand;

					$valorPontuacao = $pergunta3->getPontuacao()->getValor();

				}elseif ($rand == 4) {
					
					echo $pergunta4->getDescription();

					$id_pergunta = $rand;

					$valorPontuacao = $pergunta4->getPontuacao()->getValor();
				}

			?>
		</h1>
	</header>

	<section>
		<form action="" method="POST">
			<div>
				<label>SIM</label>
				<input type="radio" name="sim" class="position" value="SIM" />
				<input type="hidden" name="id_pergunta" value="<?php echo $id_pergunta; ?>">
			</div>
			<div>
				<label>NÃO</label>
				<input type="radio" name="nao" value="NAO" />
			</div>
			<button type="submit">click para responder</button>
		</form>
	</section>

	<section>
		<div class="alin">
			Desafio:
			<?php 

				if (isset($_POST['nao']) and $_POST['nao'] == 'NAO' and $id_pergunta == 1) {
			?>
				1 ° Realizar um polichinelo.
			<?php 

				}elseif (isset($_POST['nao']) and $_POST['nao'] == 'NAO' and $id_pergunta == 2) {

			?>
			2° Falar um fato que aconteceu hoje.

			<?php 

				}elseif (isset($_POST['nao']) and $_POST['nao'] == 'NAO' and $id_pergunta == 3) {
	
			?>
			3° Imitar uma galinha.

			<?php 

				}elseif (isset($_POST['nao']) and $_POST['nao'] == 'NAO' and $id_pergunta == 4) {
			?>
			4° Imitar um urubu.

			<?php 

				}
			?>
		</div>
	</section>

	<section>
		<div class="pontos">
			<?php 

				if (!empty($valorPontuacao) and isset($_POST['sim']) and $_POST['sim'] == 'SIM') {
					
					print($valorPontuacao);
				}else {

					print('0');
				}

			?>
			Pts
		</div>
	</section>

</body>
</html>