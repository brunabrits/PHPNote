<?php

 class Alunos{
    private $matri, $nome;

    public function getMatri(){
        return $this->matri;
    }
    public function setMatri($matrs){
        $this->matri = $matrs;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nomes){
        $this->nome = $nomes;
    }
}