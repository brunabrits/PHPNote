<?php 
//O que é uma classe abstrata em php?
//Classes abstratas são aquelas que não podem ser inicializadas diretamente.
// Ou, em outras palavras, podemos dizer que classes abstratas são aquelas classes cujo objeto não pode ser criado diretamente.

abstract class Banco{
    protected $saldo;
    protected $limite;
    protected $juros;
    
     public function setSaldo($a){
    $this->saldo=$a;
    }
    
     public function getSaldo(){
    return $this->saldo;
    }
    // get e set do saldo
    public function setLimite($a){
    $this->limite=$a;
    }
    
     public function getLimite(){
    return $this->limite;
    }
    // get e set do limite 
     public function setJuros($a){
    $this->juros=$a;
    }
    
     public function getJuros(){
    return $this->juros;
    }
    // get e set do juros
     abstract protected function Sacar();
    abstract protected function Depositar();
    }
    
    class BancoA extends Banco{
    
     public function Sacar(){
    echo "sacando";
    }
    
     public function Depositar(){
    echo "depositando";
    }
    
    }
    
    $bancoa = new BancoA();
    $bancoa->setSaldo(1000);
    $bancoa->setLimite(2000);
    $bancoa->setJuros(10);
    $bancoa->Sacar();
    $bancoa->Depositar();
















?>