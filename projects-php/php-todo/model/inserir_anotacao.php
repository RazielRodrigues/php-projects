<?php 

include 'database.php';

$anotacaoUsuario = $_POST['anotacaoUsuario'];

$queryInsert = "INSERT INTO ANOTACAO(ID_ANOTACAO, CONTEUDO)
VALUES(DEFAULT,'$anotacaoUsuario')";

mysqli_query($conexao, $queryInsert);

header('location:../index.php?pagina=home');