<?php 
require_once 'model/conexao.php';

class candidato {
	function inserir($dados)
	{
		$con = get_conexao();
		$sql = $con->prepare('INSERT INTO candidato (nome, cpf, senha, email, data_nascimento, telefone, endereco, sexo, disponibilidade, experiencias) VALUES (:nome, :cpf, :senha, :email, :data_nascimento, :telefone, :endereco, :sexo, :disponibilidade, :experiencias)');
		$sql->bindParam(':nome',$dados['nome']);
		$sql->bindParam(':cpf',$dados['cpf']);
		$sql->bindParam(':senha',$dados['senha']);
		$sql->bindParam(':email',$dados['email']);
		$sql->bindParam(':data_nascimento',$dados['data_nascimento']);
		$sql->bindParam(':telefone',$dados['telefone']);
		$sql->bindParam(':endereco',$dados['endereco']);
		$sql->bindParam(':sexo',$dados['sexo']);
		$sql->bindParam(':disponibilidade',$dados['disponibilidade']);
		$sql->bindParam(':experiencias',$dados['experiencias']);
		$sql->execute();
	}
}




?>