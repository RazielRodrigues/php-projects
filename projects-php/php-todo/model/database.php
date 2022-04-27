<?php 

//Informações do server
$servidor='us-cdbr-east-05.cleardb.net';
$user = 'bfff28e7229e4b';
$senha = 'bef6c00e';
$db = 'heroku_201a8405690d62f';

//Criando conexão com o banco de dados
$conexao = new mysqli($servidor, $user, $senha, $db);

//Checando a conexão
if (!$conexao) {
		die("<h1>Ops! erro de conexao" . $conexao->connect_error . "</h1>");
}
