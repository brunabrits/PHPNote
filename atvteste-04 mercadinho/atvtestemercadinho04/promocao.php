<?php

class Promocao

{	
	private $valor, $porcentagem, $quantidade;

	public function getValor()
	{
		return $this->getValor;
	}

	public function setValor($valor)
	{
		$this->valor= $valor;
	}

    public function getPorcentagem()
	{
		return $this->getporcentagem;
	}

	public function setPorcentagem($porcentagem)
	{
		$this->porcentagem= $porcentagem;
	}

	public function getQuantidade()
	{
		return $this->getquantidade;
	}

	public function setQuantidade($quantidade)
	{
		$this->quantidade= $quantidade;
	}
	
	public function calcular()
	{	
	
	$vlproduto = ($this->valor * $this->quantidade);
	$final = $vlproduto - ($vlproduto * $this->porcentagem / 100);
	
	return $final;
	}
}

?>