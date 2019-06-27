<?php
	include 'bibliotecaFuncoes.php';
	include 'menu.php';

	
	echo  " </br>" . " </br>";
	

	if (isset($_POST['numero'])){

		//$num = isset($_POST['numero']);

		echo  " </br>" . " </br>";
		echo "********************";
		echo  "</br>";
		echo "Número: " . isset($_POST['numero']) . " </br>" ;

		echo "R = ". exercicio01(isset($_POST['numero'])) . " </br>";
		echo "********************";
		echo  " </br>" . " </br>";
	}
	include 'rodape.php';
?>