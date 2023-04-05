<?php 
require_once 'model/conexao.php';
class vaga
{
	function consultarEmail($email)
	{
		$con = get_conexao();
		$sql = $con->prepare('SELECT senha FROM usuario WHERE email = :email');
		$sql->bindParam(':email', $email);
		$sql->execute();
		return $sql->fetchAll();
	}

	function inserir($dados)
	{
		$con = get_conexao();
		$sql = $con->prepare('INSERT INTO vaga (cargo, nome_empresa, tipo_vaga, cidade, descricao, requisitos) VALUES (:cargo, :nome_empresa, :tipo_vaga, :cidade, :descricao, :requisitos)');
		//utilizamos as variáveis BIND para evitar SQL INJECTION
		$sql->bindParam(':cargo',$dados['cargo']);
		$sql->bindParam(':nome_empresa',$dados['nome_empresa']);
		$sql->bindParam(':tipo_vaga',$dados['tipo_vaga']);
		$sql->bindParam(':cidade',$dados['cidade']);
		$sql->bindParam(':descricao',$dados['descricao']);
		$sql->bindParam(':requisitos',$dados['requisitos']);
		$sql->execute();
	}

	function listar()
	{
		$con = get_conexao();
		$sql = $con->prepare('SELECT * FROM vaga ORDER BY id DESC');
		$sql->execute();
		return $sql->fetchAll();
	}

	function selecionar($id)
	{
		$con = get_conexao();
		$sql = $con->prepare('SELECT * FROM vaga WHERE id=:id');
		$sql->bindParam(':id', $id);
		$sql->execute();
		return $sql->fetchAll();

	}

	function alterar($id, $dados)
	{
		$con = get_conexao();
		$sql = $con->prepare('
			UPDATE vaga SET
			    cargo=:cargo,
				tipo_vaga=:tipo_vaga,
				cidade=:cidade,
				descricao=:descricao,
				requisitos=:requisitos
					WHERE id=:id');
		$sql->bindParam(':cargo', 		$dados['cargo']);
		$sql->bindParam(':tipo_vaga', 		$dados['tipo_vaga']);
		$sql->bindParam(':cidade', 		$dados['cidade']);
		$sql->bindParam(':descricao', 	$dados['descricao']);
		$sql->bindParam(':requisitos', 		$dados['requisitos']);
		$sql->bindParam(':id', 			$id);
		$sql->execute();
	}

	function excluir($id)
	{
		$con = get_conexao();
		$sql = $con->prepare('DELETE FROM vaga WHERE id=:id');
		$sql->bindParam(':id', $id);
		$sql->execute();
	}

	function listarPesquisa($cargo, $cidade)
	{
		$con = get_conexao();
		$sql = $con->prepare('SELECT * FROM vaga WHERE cargo LIKE :cargo AND cidade LIKE :cidade');

		$cargo = '%'.$cargo.'%';
		$cidade = '%'.$cidade.'%';

		$sql->bindParam(':cargo', $cargo);
		$sql->bindParam(':cidade', $cidade);
		$sql->execute();
		return $sql->fetchAll();
	}

}
?>