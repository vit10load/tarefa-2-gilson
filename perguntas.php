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
		<h1> 1- Vc posaria nu por R$500.000,00 ?</h1>
	</header>

	<section>
		<form action="" method="POST">
			<div>
				<label>SIM</label>
				<input type="radio" name="sim" class="position" />
			</div>
			<div>
				<label>NÃO</label>
				<input type="radio" name="nao" />
			</div>
			<button type="submit">click para responder</button>
		</form>
	</section>

	<section>
		<div class="alin">
			Texto do desafio:
		</div>
	</section>

	<section>
		<div class="pontos">
			3Pts
		</div>
	</section>

</body>
</html>