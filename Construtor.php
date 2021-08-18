
<?php 

class Pessoa {

private $Nome ;
private $Cidade ;

public function __construct($Jose, $SP)
{  $this-> Nome= $Jose;
    $this -> Cidade =$SP;
  
}


public function Login(){
if ($this -> Nome == "Jose" && $this -> Cidade =="SP")
{
    echo $this-> Nome."você está logado com sucesso";
}
else{
    echo "Dados errados";
}                         }

} // fim class Pessoa 

// Instanciando 
$pessoa = new pessoa("Jose", "SP");
$pessoa->Login();
  
?> 
   
