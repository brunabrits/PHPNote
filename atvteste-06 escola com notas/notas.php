<?php

class Notas{


    private $matricula, $nome, $dtnascimento, $b1, $b2, $b3;

    public function getMatricula()
    {
    return $this->matricula;
    }

    public function setMatricula($matricula)
    {
    $this->matricula = $matricula;
    }

    public function getNome()
    {
    return $this->nome;
    }

    public function setNome($nome)
    {
    $this->nome = $nome;
    }

    public function getDtnascimento()
    {
    return $this->dtnascimento;
    }

    public function setDtnascimento($dtnascimento)
    {
    $this->dtnascimento = $dtnascimento;
    }

            public function getB1()
            {
            return $this->b1;
            }

            public function setB1($b1)
            {
            $this->b1 = $b1;
            }

            public function getB2()
            {
            return $this->b2;
            }

            public function setB2($b2)
            {
            $this->b2 = $b2;
            }

            public function getB3()
            {
            return $this->b3;
            }

            public function setB3($b3)
            {
            $this->b3 = $b3;
            }
}
