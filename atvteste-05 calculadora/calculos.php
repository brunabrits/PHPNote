<?php

class Calculos{

    private $nr1, $nr2, $operacao;

    public function getNr1()
    {
    return $this->nr1;
    }

    public function setNr1($n1)
    {
    $this->nr1 = $n1;    
    }

    public function getNr2()
    {
    return $this->nr2; 
    }

    public function setNr2($n2)
    {
    $this->nr2 = $n2;    
    }

    public function getOperacao()
    {
    return $this->operacao; 
    }

    public function setOperacao($op)
    {
    $this->operacao = $op;    
    }

    public function Calcular(){
    
    if ($this->operacao == "+"){
        $resultado = ($this->nr1 + $this->nr2);
    }
    elseif ($this->operacao == "-"){
        $resultado = ($this->nr1 - $this->nr2);
    }
    elseif ($this->operacao == "*"){
        $resultado = ($this->nr1 * $this->nr2);
    }
    elseif ($this->operacao == "/"){
        $resultado = ($this->nr1 / $this->nr2);
    }
    return $resultado;
    }

}

?>