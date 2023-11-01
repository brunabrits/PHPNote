<?php 

class Produto
{	

	private $codproduto, $descricao, $valor, $formadepagamento;

	
	public function getCodproduto(){
		return $this->codproduto;
	}

	public function setCodproduto($codproduto){
		$this->codproduto= $codproduto;
	}

	public function getDescricao(){
		return $this->descricao;
	}

    public function setDescricao($descricao){
	    $this->descricao= $descricao;
    }

	public function getValor(){
		return $this->valor;
	}

	public function setValor($valor){
		$this->valor= $valor;
	}

	public function getFormadepagamento(){
		return $this->formadepagamento;
	}

	public function setFormadepagamento($formadepagamento){
		$this->formadepagamento= $formadepagamento;
	}
		
}