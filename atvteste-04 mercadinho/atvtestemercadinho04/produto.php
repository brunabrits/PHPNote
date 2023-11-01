<?php

include 'promocao.php';

$pro = new Promocao();

$codproduto = $_GET["codproduto"];
$descricao = $_GET["descricao"];
$valor = $_GET["valor"];
$quantidade = $_GET["quantidade"];
$promocao = $_GET["promocao"];

$pro->setValor($_GET["valor"]);
$pro->setQuantidade($_GET["quantidade"]);

$final = $valor * $quantidade;
$vlproduto = $valor * $quantidade;

if(substr($codproduto,0,2) == substr($promocao,0,2))
{
    $pro->setPorcentagem(substr($promocao,3,1));
    $final = $pro->Calcular();
}

echo 'CodProduto Descricao Valor Quantidade Desconto Final'.'<br>';
echo $codproduto        ."........";
echo $descricao         ."...........";
echo $valor             ."............";
echo $quantidade        ."................";
echo substr($promocao,3,1)."%".".....";
echo "R$".$final             ;

?>