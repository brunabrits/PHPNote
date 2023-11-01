<?php 

include 'conexao.php';

class AlunaDao
{

	
	public function cadastrar(aluna $a){
		$sql = "insert into aluna(matricula, nome, nascimento, mensalidade) values(?, ?, ?, ?)";
		$bd = new Conexao();
		$con = $bd->getConexao();
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $a->getMatricula());
		$stm->bindValue(2, $a->getNome());
		$stm->bindValue(3, $a->getNascimento());
		$stm->bindValue(4, $a->getMensalidade());
		$result = $stm->execute();

		if($result){
			echo "cadastrou";
		}else{
			echo "não cadastrou";
		}
	}

	public function atualizar(aluna $a){
		$sql = "update aluna set nome=?, nascimento=?, mensalidade=? where matricula=?";
		$bd = new Conexao();
		$con = $bd->getConexao();
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $a->getNome());
		$stm->bindValue(2, $a->getNascimento());
		$stm->bindValue(3, $a->getMensalidade());
		$stm->bindValue(4, $a->getMatricula());
		$result = $stm->execute();

		if($result){
			echo "atualizado";
		}else{
			echo "não atualizado";
		}
	}

	public function deletar(aluna $a){
		$sql = "delete from aluna where matricula=?";
		$bd = new Conexao();
		$con = $bd->getConexao();
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $a->getMatricula());
        $result = $stm->execute();

		if($result){
			echo "deletado";
		}else{
			echo "não deletado";
		}
	}

	public function buscar(){
		$sql = "select * from aluna";
		$bd = new Conexao();
		$con = $bd->getConexao();
		$stm = $con->prepare($sql);
		$stm->execute();
		if($stm->rowCount()>0){
		   $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
		   return $result;
		}
	}

}
?>