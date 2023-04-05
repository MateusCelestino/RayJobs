<?php 
require_once 'model/conexao.php';

	class contato
	{
		
		function inserir($dados)
		{
			//montar script de INSERT
		$con = get_conexao();
		$sql = $con->prepare('INSERT INTO contato (nome, email, assunto, mensagem) VALUES (:nome, :email, :assunto, :mensagem)');
		//utilizamos as variáveis BIND para evitar SQL INJECTION
		$sql->bindParam(':nome',$dados['nome']);
		$sql->bindParam(':email',$dados['email']);
		$sql->bindParam(':assunto',$dados['assunto']);
		$sql->bindParam(':mensagem',$dados['mensagem']);
		$sql->execute();
		}


	}
 ?>