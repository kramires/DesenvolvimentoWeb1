<?php 
include 'menu.php';
include 'bibliotecaFuncoes.php';

	echo  " </br>" . " </br>";

	if (isset($_POST['tipoOperacao'])){
		$tipoOperacao =  $_POST['tipoOperacao'];

	}

	if (isset($_POST['valor'])){
		$valor = $_POST['valor'];
	}

	$resultado = verificaIvestimento ($tipoOperacao, $valor);

	echo "O valor corrigido: " . "R$ " . $resultado . " </br>". " </br>";



include 'rodape.php';
?>