<?php

class Produtos{
    public $nome;
    public $valor;
    
     public function __construct ($nome, $valor){
    $this->nome = $nome;
    $this->valor = $valor;
    }
    }//fim produtos
    
    class Carrinho{
    public $produtos;
    
     public function adiciona(Produtos $produto){
    $this->produtos[] = $produto;
    }
    
     public function exibe(){
    foreach($this->produtos as $produto){
    echo $produto->nome.'<br>';
    echo $produto->valor.'<hr>';
    }
    }
    }//fim carrinho
    
    $produto1 = new Produtos("Ferro de passar roupas", 100.00);
    $produto2 = new Produtos("Máquina de Lavar roupas", 1000.00);
    $produto3 = new Produtos("Televisão", 1500);
    
    $carrinho = new Carrinho();
    $carrinho->adiciona($produto1);
    $carrinho->adiciona($produto2);
    $carrinho->adiciona($produto3);
    
    $carrinho->exibe();








?>
