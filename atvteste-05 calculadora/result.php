<?php

include 'calculos.php';

$rst = new Calculos();

$rst->setNr1($_GET["nr1"]);
$rst->setNr2($_GET["nr2"]);
$rst->setOperacao($_GET["operacao"]);

echo 'Visualização'.'<br>';
echo 'Primeiro núm'.$rst->getNr1(). '<br>';
echo 'Segundo núm'.$rst->getNr2(). '<br>';
echo 'Operacao'.$rst->getOperacao(). '<br>';
echo 'Resultado'.$rst->Calcular();

?>