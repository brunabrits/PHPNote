<?php
include 'notas.php';

$notas = new Notas();

$nome = $_GET['Nome'];
$matricula = $_GET['Matricula'];


$bim1->setBim1($_GET["Bimestre 1"]);
$bim2->setBim2($_GET["Bimestre 2"]);
$bim3->setBim3($_GET["Bimestre 3"]);

$mediaFinal = $notas->media(); 

echo 'A aluna: '. $nome. '<br>';
echo 'Matricula: ' .$matricula. '<br>';
echo 'Com notas: '  .$notas->getBim1().  $notas->getBim2() . $notas->getBim3(). '<br>';
echo 'Ficou com nota:  '.$mediaFinal. '<hr>';

if ($mediaFinal >=0 && $mediaFinal <=4.9)
{
echo("Reprovado");
}
else if ($mediaFinal >=5 && $mediaFinal <=6.9)
{
echo("Recuperação");
}
else if ($mediaFinal >=7 && $mediaFinal <=10)
{
echo("Aprovado");
}
else
{
echo("Digite as notas corretamente");
}
	
?>