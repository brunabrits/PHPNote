<?php

class Promocao
{	
	private $valor, $porcentagem, $quantidade;

	public function getValor(){
		return $this->getValor;
	}

	public function setValor($valor){
		$this->valor= $valor;
	}

    public function getPorcentagem(){
		return $this->getporcentagem;
	}

	public function setPorcentagem($porcentagem){
		$this->porcentagem= $porcentagem;
	}

	public function getQuantidade(){
		return $this->getquantidade;
	}

	public function setQuantidade($quantidade){
		$this->quantidade= $quantidade;
	}
	
	/*public function calcular(){

		$desconto_promocao = $this->valor * $this->calculo_porcentagem; 
		$final = (($this->valor * $this->quantidade) - ($this->desconto_promocao * $this-> quantidade));
		return $desconto_promocao;
		return $final;
	}*/


	
	public function __toString()
   {
     return $this->valor . ''. $this->porcentagem . '' . $this->quantidade;
   }
}

?>