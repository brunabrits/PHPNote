<?php 

include 'produto.php';
include 'produtoDao.php';

$codproduto = $_GET['codproduto'];
$descricao = $_GET['descricao'];
$valor = $_GET['valor'];
$formadepagamento =  $_GET['formadepagamento'];

$botao = $_GET['botao'];


//instancia
$produto = new Produto();
$produtoDao = new ProdutoDao();

$produto->setCodproduto($codproduto);
$produto->setDescricao($descricao);
$produto->setValor($valor);
$produto->setFormadepagamento($formadepagamento);

if($botao=="incluir"){
	$produtoDao->incluir($produto);

}else if($botao=="consultar"){
	foreach($produtoDao->consultar($codproduto) as $resultado){
		echo $resultado['codproduto']."<br>";
		echo $resultado['descricao']. "<br>";
		echo $resultado['valor']."<br>";

		if($resultado['formadepagamento'] == "p"){

			echo $resultado['valor']*0.075+$resultado['valor'];
	
			}
			else{
				echo $resultado['valor'];
			}

		echo $resultado['formadepagamento']. "<hr>";
	}
}