<?php 

include 'database.php';

$anotacaoUsuario = $_POST['anotacaoUsuario'];

$queryInsert = "INSERT INTO anotacao(id_anotacao, conteudo)
VALUES(default,'$anotacaoUsuario')";

mysqli_query($conexao, $queryInsert);

header('location:../index.php?pagina=home');