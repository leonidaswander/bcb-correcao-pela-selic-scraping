<?php
	include 'funcao.php';
	
	$valor = '3500,00'; 		///valor que deve ser atualizado
	$dataInio = '13/10/2020';  	///data inicial
	$dataFinal = date("d/m/Y"); ///até a data final

	echo selic($dataInio, $dataFinal, $valor);
