 <?php
//Herança - herda as características da classe mãe para a classe filha
 
class Serie{
public $Duração;
public $Ano;
public $Gênero;
public $Temporadas;
public $Nome; 

public function Assistir(){
     echo $this->Nome."-". $this->Ano."-".$this->Duração. "-".$this->Gênero. "-".$this->Temporadas;
     echo "Assistir <br>";
}

public function Parar(){
    echo "parou";
    }
}// fim class

class HIMYM extends Serie{
}

class TBBT extends Serie{
}

// Instanciando e atribuindo valores a class  HIMYM 
$HIMYM = new HIMYM ();
$HIMYM -> Duração ="20min";
$HIMYM -> Ano = 2005;
$HIMYM -> Gênero ="Romance";
$HIMYM -> Temporadas = 9;
$HIMYM -> Nome = "HIMYM";
$HIMYM -> Assistir();

// Instanciando e atribuindo valores a class TBBT 
$TBBT = new TBBT ();
$TBBT -> Duração ="20min";
$TBBT -> Ano = 2007;
$TBBT -> Gênero ="Sitcom";
$TBBT -> Temporadas = 12;
$TBBT -> Nome = "TBBT";
$TBBT -> Assistir();

?>