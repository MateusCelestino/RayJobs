<?php      
function get_conexao(){ //Função para conectar ao banco de dados

	$servidor = 'localhost'; //Variável com nome do servidor onde está o banco de dados5
	$nome_banco_dados = 'rayjobs';//Variável com nome do banco de dados
	$usuario = 'root';//Variável com usuario do BD
	$senha = '123456';//Variável com senha do BD

	//Abrimos a conexão com o BD e colocamos essa conexão na variável %conexãoDB
    $conexaoDB = new PDO("mysql:host=$servidor;dbname=$nome_banco_dados;port=3306", $usuario, $senha);

    //Configuramos a conexão para gerar um ERRO quando algum script SQL não executar com sucesso
    $conexaoDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Configuramos o banco de dados no modo UTF8
    $conexaoDB->exec("set names utf8");

    //Retorna a conexão feita no BD
    return $conexaoDB;
}
//Função para executar um select no BD
//Exige um parâmetro chamado $script que deverá conter o script SELECT
function executar_select($script){
	echo $script;
	$con = get_conexao();//Criamos um variável $con que receberá a conexão aberta com o BD
	
	$sql = $con->prepare($script);//Criamos uma outra variável $sql que irá preparar a conexão para a execução do script

	$sql->execute();//A variável $sql executará o script BD

	return $sql->fetchAll();//A função retornará todo resultado obtido pela variável $sql
}
?>