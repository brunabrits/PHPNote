<?php

include '../classes/alunos.php';
include '../database/alunosDao.php';
include '../formularios/formAlunos.php';

$matri = $_GET['matri'];
$nome = $_GET['nome'];
$botao = $_GET['botao'];

$alunos = new Alunos();
$alunosdao = new AlunosDao();

$alunos->setMatri($matri);
$alunos->setNome($nome);


if($botao == 'incluir'){
    $alunosdao->incluir($alunos); 
}else if($botao=="excluir"){
    $alunosdao->deletar($alunos);
}
