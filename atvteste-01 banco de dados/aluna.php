<?php 

class Produto

{	
	//variável global
	private $cod_produto, $descricao, $formadepagamento, $valor ;

	public function getCod_produto(){
		return $this->cod_paulo;
	}

	public function setMatricula($matricula){
		$this->matricula= $matricula;
	}


	public function getNome(){
		return $this->nome;
	}

	
	public function setNome($nome){
		$this->nome = $nome;
	}


	public function getNascimento(){
		return $this->nascimento;
	}

	public function setNascimento($nascimento){
		$this->nascimento= $nascimento;
	}

	public function getMensalidade(){
		return $this->mensalidade;
	}

	public function setMensalidade($mensalidade){
		$this->mensalidade= $mensalidade;
	}
}
?>