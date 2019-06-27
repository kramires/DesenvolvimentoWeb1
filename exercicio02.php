
<?php 
include 'menu.php';
include 'bibliotecaFuncoes.php';


	echo  " </br>" . " </br>";
	if (isset($_POST['numero'])){
		
		$numero =$_POST['numero'];

			if ($numero == 0) {
				echo "Número igual a zero";
			}

			else {
				$resultado = verificaNumeroPositivoNegativo($_POST['numero']);

				if ($resultado) {
					echo "O número " . $numero .  " é Positivo";
				}
				else {
					echo "O número " . $numero .  " é Negativo";
				}
			}
	}
	
	echo  " </br>" . " </br>";

include 'rodape.php';
?>

