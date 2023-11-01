<?php

include "conexao.php";

class NotasDao{
    public function incluir(Notas $n){
        $sql = "insert into Notas( n1, n2, media) values( ?, ?, ?)";
        $bd = new Conexao();
        $con = $bd->getConexao();
        $stm = $con->prepare($sql);
        
        $stm->bindValue(1, $n->getN1());
        $stm->bindValue(2, $n->getN2());
        $stm->bindValue(3, $n->getMedia());
        $result = $stm->execute();

        if ($result) {
            echo 'Cadastrado';
        }else{
            echo 'Não cadastrou!!';
        }
    }

    public function excluir($n){
        $sql = "delete from Notas where matri=?";
        $bd = new Conexao();
        $con = $bd->getConexao();
        $stm = $con->prepare($sql);
        $stm->bindValue(1, $n->getMatri());
        $result = $stm->execute();

        if ($result) {
            echo 'Deletado';
        }else{
            echo 'Não deletou seu otario';
        }
    }

    
 


}