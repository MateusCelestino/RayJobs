<?php 
require_once 'model/conexao.php';
class empresa
{
	function consultarEmail($email)
	{
		$con = get_conexao();
		$sql = $con->prepare('SELECT senha FROM empresa WHERE email = :email');
		$sql->bindParam(':email', $email);
		$sql->execute();
		return $sql->fetchAll();
	}

	function inserir($dados)
	{
		//montar script de INSERT
		$con = get_conexao();
		$sql = $con->prepare('INSERT INTO empresa (nome, cnpj, email, senha) VALUES (:nome, :cnpj, :email, :senha)');
		//utilizamos as variáveis BIND para evitar SQL INJECTION
		$sql->bindParam(':nome',$dados['nome']);
		$sql->bindParam(':cnpj',$dados['cnpj']);
		$sql->bindParam(':email',$dados['email']);
		$sql->bindParam(':senha',$dados['senha']);
		$sql->execute();
	}

	//função para capturar todos os usuários
	function listar()
	{
		$con = get_conexao();
		$sql = $con->prepare('SELECT * FROM empresa');
		$sql->execute();
		return $sql->fetchAll();
	}

	function consultarUsuario($cnpj,$senha)
	{
		$con = get_conexao();
		$sql = $con->prepare('SELECT * FROM empresa WHERE cnpj = :cnpj AND senha = :senha');
		$sql->bindParam(':cnpj', $cnpj);
		$sql->bindParam(':senha', $senha);
		$sql->execute();
		return $sql->fetchAll();
	}	

}
?>