<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="arquivo.css"/>

	</head>
	
	<body>
		<header>
			<?php
			include 'menu.php';

			?>

			</br>
			</br>

		</header>
		<form action="exercicio03.php" method="POST">

			
			<label> QUAL TIPO DE INVESTIMENTO: </label></br>
			<input type="radio" name="tipoOperacao" value="1" checked="checked" />Poupança
			<input type="radio" name="tipoOperacao" value="2"/>Fundo de Renda Fixa
			</br></br>
			<input type="number" name="valor">

			<input type="submit" name="enviar" value="Enviar Dados" />
			<input type="reset" name="limpar" value="Limpar" />

		</form>

			<footer><?php include 'rodape.php' ?></footer>
	</body>
</html>