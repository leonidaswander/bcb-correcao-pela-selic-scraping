# bcb-correcao-pela-selic-scraping
Raspagem de dados em php no site do BCB para obter o valor corrigido pela Selic entre duas datas


Basta informar na chamada da funções os parâmetros principais

	$dataInio = '13/10/2020';  ///data para o inicio do calculo
	$dataFinal = date("d/m/Y");  ///data para o final do calculo
	$valor = '3500,00'; ///valor que deve ser atualizado
	
	echo selic($dataInio, $dataFinal, $valor);
