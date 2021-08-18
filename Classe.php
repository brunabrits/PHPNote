<?php

//Objeto é igual a Class
Class Pessoa {
// Atributo e Variáveis 
public $Nome;
public $Idade;
// quando usamos public a variável pode ser usada em todas as classes, quando private ela só pode ser utilizada na classe mencionada (são moderadores de acesso)


// Funcionalidades e Métodos
public function Falar () {
    echo $this -> Nome. " de " .$this ->idade. "anos está falando <br>";
    // this é usado para buscar uma variável externa 
} 


}// fim class

//Instanciando 
$bruna = New Pessoa ();

$bruna ->Nome ="Victor";
$bruna ->Idade = "25";
$bruna ->Falar();

?>