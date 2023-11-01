<?php 

include 'conexao.php';

class ProdutoDao
{
	public function incluir(Produto $c){
		$sql = "insert into produto values (?, ?, ?, ?)";
		$bd = new Conexao();
		$con = $bd->getConexao();
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $c->getCodproduto());
		$stm->bindValue(2, $c->getDescricao());
		$stm->bindValue(3, $c->getValor());
		$stm->bindValue(4, $c->getFormadepagamento());
		$resultado = $stm->execute();

		if($resultado){
			echo "Produto incluido com sucesso";
		}else{
			echo "Não foi possível incluir esse produto";
		}
	}

	public function consultar(){
		$sql = "select * from produto";
		$bd = new Conexao();
		$con = $bd->getConexao();
		$stm = $con->prepare($sql);
		$stm->execute();
		if($stm->rowCount()>0){
		   $resultado = $stm->fetchAll(\PDO::FETCH_ASSOC);
		   return $resultado;
		}

	}

}