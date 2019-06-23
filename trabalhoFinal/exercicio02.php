<?php 
include 'menu.php';
include 'bibliotecaFuncoes.php';


	echo  " </br>" . " </br>";
	if (isset($_POST['numero'])){

			$resultado = verificaNumeroPositivoNegativo($_POST['numero']);
			
			if ($resultado) {
				echo "O número " . $_POST['numero'] .  " é Positivo";
			}
			else {
				echo "O número " . $_POST['numero'] .  " é Negativo";
			}
	}
	
	echo  " </br>" . " </br>";

include 'rodape.php';
 ?>