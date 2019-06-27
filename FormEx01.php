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
		</header>
		<br>
		<br>

		<form action="exercicio01.php" method="POST">
			<label> Digite um número inteiro </label>
			<input type="number" name="numero" />

			
			<input type="submit" name="enviar" value="Enviar" />
			<input type="reset" name="limpar" value="Limpar" />
		</form>

		<footer><?php include 'rodape.php' ?></footer>
	</body>
</html>