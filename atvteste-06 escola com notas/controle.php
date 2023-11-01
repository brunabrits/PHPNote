<?php 

include 'notas.php';
include 'notasDao.php';

$matricula = $_GET['matricula'];
$nome = $_GET['nome'];
$dtnascimento = $_GET['dtnascimento'];
$B1 = $_GET['b1'];
$B2 = $_GET['b2'];
$B3 = $_GET['b3'];
$botao = $_GET['botao'];

$notas = new Notas();
$notasDao = new NotasDao();

$notas->setMatricula($matricula);
$notas->setNome($nome);
$notas->setDtnascimento($dtnascimento);
$notas->setB1($b1);
$notas->setB2($b2);
$notas->setB3($b3);

if($botao=="cadastrar"){
	$notasDao->cadastrar($notas);
}else if($botao=="deletar"){
	$notasDao->deletar($notas);
}else if($botao=="buscar"){

	foreach($notasDao->buscar() as $resultado){
		echo $resultado['matricula']."<br>";
		echo $resultado['nome']."<br>";
		echo $resultado['dtnascimento']. "<br>";
        echo $resultado['b1']."<br>";
		echo $resultado['b2']."<br>";
		echo $resultado['b3']. "<hr>";
	}

}