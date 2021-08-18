<?php

class Pessoa{

private $Usuario;
private $Cidade;

 // O set serve para escrever e definir dados além de poder criar regras  
public function setUsuario($Ingrid){
    $this->usuario = $Ingrid;
}

 // O get serve para ler os dados do set 
public function getUsuario(){
    return $this->Ingrid;
}

public function setCidade($SP){
    $this->Cidade = $SP;
}

public function getCidade(){
    return $this ->SP;
}


public function Login(){

 if( $this->usuario == "Ingrid"  &&  $this -> Cidade =="SP")
 {
     echo $this ->usuario." logado com sucesso";
}
else{
     echo "Dados incorretos";
}

}

 }//fim class

 //Instanciando 
$pessoa = new Pessoa();

 //chamando os métodos set
$pessoa->setUsuario("Ingrid");
$pessoa->setCidade("SP");
$pessoa->Login();

?>