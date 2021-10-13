<?php
///função para acessar o site do BCB e coletar os dados
	function selic($data_inicio, $data_fim, $valor)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://www3.bcb.gov.br/CALCIDADAO/publico/corrigirPelaSelic.do?method=corrigirPelaSelic");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS,
					"dataInicial=".$data_inicio."&dataFinal=".$data_fim."&valorCorrecao=".$valor );
		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$server_output = curl_exec($ch);
		 
		if (curl_errno($ch)) {
			$error_msg = curl_error($ch);
		}
		curl_close($ch);

		if (isset($error_msg)) {
		   echo $error_msg;
		}
		//return $server_output;

			$retorno = explode('Valor corrigido na data', $server_output );
			$retorno_valor = explode(' (REAL)', $retorno[1]);
			$retorno_valor_real = str_replace('final', '', $retorno_valor['0']);
			$retorno_valor_real = str_replace('R$ ', '', $retorno_valor_real);
			return trim($retorno_valor_real);
	}
	
	
	$dataInio = '13/10/2020';  ///data para o inicio do calculo
	$dataFinal = date("d/m/Y");  ///data para o final do calculo
	$valor = '3500,00'; ///valor que deve ser atualizado
	
	echo selic($dataInio, $dataFinal, $valor);
