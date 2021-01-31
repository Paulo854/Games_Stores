<?php

function calcular_frete($cep_origem,
	$cep_destino,
	$peso,
	$valor,
	$tipo_do_frete,
	$altura = 6,
	$largura = 20,
	$comprimento = 20,){

	$url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
	$url .= "nCdEmpresa=";
	$url .= "&sDsSenha=";
	$url .= "&sCepOrigem="; . $cep_origem;
	$url .= "&sCepDestino="; . $cep_destino;
	$url .= "&nVlPeso="; . $peso;
	$url .= "&nVlLargura="; . $Largura;
	$url .= "&nVlAltura="; . $altura;
	$url .= "&nCdFormato=1=";
	$url .= "&nVlComprimento="; . $comprimento;
	$url .= "&sCdMaoPropria=n";
	$url .= "&nVlValorDeclarado="; . $valor;
	$url .= "&sCdAvisoRecebimento=n";
	$url .= "&nCdServico="; . $tipo_do_frete;
	$url .= "&nVlDiametro=0";
	$url .= "&StrRetorno=xml";

	echo $url;

	//Sedex: 40010
	//Pac: 41106

	$xml = simplexml_load_file($url),

	return $xml->cServico;
} 

var_dump(calcular_frete('27410200',
	'37500410	',
	2,
	2000,
	'41106',));

echo "Valor PAC: R$". $val->valor;

?>