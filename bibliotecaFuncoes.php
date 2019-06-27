<?php

	/**
	*	Retornar o resultado do Exercício 01
	*/
	function exercicio01($num){
		return $num * $num * $num;
	}
	
	/**
	* Retorna a média aritmética d 2 números
	*/
	function verificaNumeroPositivoNegativo ($num){
		if ($num > 0) 
			return true;

		else if ($num < 0)
			return false;
	}

	
	function verificaIvestimento ($tipo, $valor){
		
		if ($tipo == 1) {
			$resultado = $valor + ($valor * 0.03);
			return $resultado;
		}

		else{
			$resultado = $valor + ($valor * 0.04);
			return $resultado;
		}
	}
?>