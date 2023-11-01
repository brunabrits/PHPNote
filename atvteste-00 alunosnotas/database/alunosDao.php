<?php

include "conexao.php";

class AlunosDao{

    public function incluir(Alunos $a){

        $sql = "insert into Alunos(nome) values(?)";
        $bd = new Conexao();
        $con = $bd->getConexao();

        $stm = $con->prepare($sql);
        $stm->bindValue(1, $a->getNome());

        $result = $stm->execute();

        if ($result){
            echo 'Cadastrado';
        }else{
            echo 'Não!!';
        }
    }

    public function deletar($a){
        $sql = "delete from Alunos where matri=?";
        $bd = new Conexao();
        $con = $bd->getConexao();
        $stm = $con->prepare($sql);
        $stm->bindValue(1, $a->getMatri());
        $result = $stm->execute();

        if ($result) {
            echo 'Deletado';
        }else {
            echo 'Não!!';
        }
    }
}