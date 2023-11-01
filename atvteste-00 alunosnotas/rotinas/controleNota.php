<?php

include '../classes/notas.php';
include '../database/notasdao.php';
include '../formularios/formNotas.php';

$matri = $_GET['matri'];
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$botao = $_GET['botao'];

$notas = new Notas();
$notasdao = new Notasdao();

$notas->setMatri($matri);
$notas->setN1($n1);
$notas->setN2($n2);

if($botao=="incluir"){
    
    $notasdao->incluir($notas); 
}else if($botao=="excluir"){
    $notasdao->excluir($notas);
}
