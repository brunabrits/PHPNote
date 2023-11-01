<?php 

include 'aluna.php';
include 'alunadao.php';

$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$mensalidade = $_POST ['mensalidade'];
$botao = $_POST['botao'];

//instancia
$aluna = new aluna();
$alunaDao = new alunaDao();

$aluna->setMatricula($matricula);
$aluna->setNome($nome);
$aluna->setNascimento($nascimento);
$aluna->setMensalidade($mensalidade); 

if($botao=="cadastrar"){
	$alunaDao->cadastrar($aluna);
}else if($botao=="atualizar"){
	$alunaDao->atualizar($aluna);
}else if($botao=="deletar"){
	$alunaDao->deletar($aluna);
}else if($botao=="buscar"){
	$alunaDao->buscar();
	foreach($alunaDao->buscar() as $resultado){
		echo $resultado['matricula']."<br>";
		echo $resultado['nome']."<br>";
		echo $resultado['nascimento']."<br>";
		echo $resultado['mensalidade']."<hr>";
	}

}
?>