<?php 

include 'conexao.php';

class notasDao
{
	
	public function cadastrar(Notas $c){
		$sql = "insert into notas values (?, ?, ?, ?, ?, ?)";
		$bd = new Conexao();
		$con = $bd->getConexao();
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $c->getMatricula());
		$stm->bindValue(2, $c->getNome());
		$stm->bindValue(3, $c->getDtnascimento());
		$stm->bindValue(4, $c->getB1());
        $stm->bindValue(5, $c->getB2());
        $stm->bindValue(6, $c->getB3());
		$resultado = $stm->execute();

		if($resultado){
			echo "cadastrou";
		}else{
			echo "não cadastrou";
		}
	}

	public function deletar(Notas $c){
		$sql = "delete from notas where matricula=?";
		$bd = new Conexao();
		$con = $bd->getConexao();
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $c->getMatricula());
		$resultado = $stm->execute();

		if($resultado){
			echo "deletado";
		}else{
			echo "não deletado";
		}
	}

	public function buscar(){
		$sql = "select * from notas";
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