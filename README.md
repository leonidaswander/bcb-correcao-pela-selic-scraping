## ⚡ Cálculo automático de valor corrigido pela Selic



### O que é?

Raspagem de dados em PHP no site do BCB para obter o valor corrigido pela Selic entre duas datas



### Como funciona?


Basta informar na chamada da funções os parâmetros principais

```
$valor = '3500,00'; 		///valor que deve ser atualizado
$dataInio = '13/10/2020';  	///data inicial
$dataFinal = date("d/m/Y"); ///até a data final

echo selic($dataInio, $dataFinal, $valor);

```



### 🎉Retornando Dados

```
echo selic($dataInio, $dataFinal, $valor);

```

