<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sistema de cadastro</title>

</head>
<body>
<?php

class Login{
private $usu;
private $sen;

 public function __construct ($usu, $sen){
$this->usu = $usu;
$this->sen = $sen;
}

 public function Logar(){
if($this->usu == "admin" && $this->sen == "1234"){
header("location: http://www.uol.com.br ");
}else{
echo "deslogado";
}
}

}//fim class

$nome = $_POST['usua'];
$senha = $_POST['sen'];

$sistema = new Login($nome, $senha);
$sistema->Logar();

?>
</body>
</html>