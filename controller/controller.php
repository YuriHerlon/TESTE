<?php

if( isset($_GET['funcao']) ){
	$funcao = $_GET['funcao'];
	if (!function_exists($funcao) || !is_callable($funcao))
		$funcao ='invalida';
}
else 
	$funcao ='invalida';

$funcao();

function minhaFuncao(){
	$msg = 'Entrou na minha Função Mesmo';
	include '../view/templateMinhaFuncao.php';
}

function outraFuncao(){
	$msg = 'Entrou na outra Função';
	include '../view/templateOutraFuncao.php';
}

function invalida(){
	echo 'Opção Inválida';
}

?>
