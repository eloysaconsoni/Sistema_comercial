<?php
//variaveis para armazenar o formulario de ENTRADA
$GLOBALS['dat_entre'] = $_POST["dataen"];
$$GLOBALS['barrase'] = $_POST["barraen"]; 
$descrie = $_POST["descen"]; 
$quantidadee = $_POST["qtdeen"];
$val_unie = $_POST["val_unien"];
$val_tote = $_POST["val_toten"];

//variaveis para armazenar o formulario de SAIDA
$dat_entras = $_POST["datas"];
$barraas = $_POST["barras"]; 
$descrias = $_POST["descs"]; 
$quantidadeas = $_POST["qtdes"];
$val_unias = $_POST["val_unis"];
$val_totas = $_POST["val_tots"];


if ( $_POST["qtdes"] > $_POST["qtdeen"]  ) {
	echo "A quantidade desejada para retirada é menor do que a do estoque";
}else{
	//quando uma saida possivel for realizada o a quantidade será retirada
		$quantidade_total = $quantidadee - $quantidadeas;
}

?>

