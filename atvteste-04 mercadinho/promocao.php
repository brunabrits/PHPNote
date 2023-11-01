<?php
include 'produto.php';

$inst = new Produto();

$codproduto = $_GET["Código Produto"];
$descricao = $_GET["Descricao"];
$valor = $_GET["Valor"];
$quantidade = $_GET["Quantidade"];
$promocao = $_GET["Promocao"];

$inst->setValor($_GET["Valor"]);
$inst->setQuantidade($_GET["Quantidade"]);
$inst->setPorcentagem($_GET["Porcentagem"]);

$codproduto = substr($codproduto,2,1);


if ($codproduto == 01){
     $calculo_porcentagem = 5/100 ;
}
elseif($codproduto == 02){
    $calculo_porcentagem = 7/100;
}
elseif($codproduto == 03){
    $calculo_porcentagem = 4/100;
}

//echo 'CodProduto',' Descricao ', 'Valor', 'Quantidade' ,'Desconto','Final'.'<br>';
echo $inst->getcodproduto(). $inst->getdescricao(). $inst->getvalor(). $inst->getquantidade(). $inst->getdesconto_promocao(). '<br>'; 
//$inst->getfinal().
?>