<?php 

include 'database.php';

$dado = $_POST['dado_deletar'];

$queryDelete = "DELETE FROM ANOTACAO WHERE ID_ANOTACAO = $dado";

if (mysqli_query($conexao,$queryDelete)) {
	echo "Deletado com sucesso";
	header('location:../index.php?pagina=home');
}else{
	echo "<h1>ERRO NA HORA DE DELETAR: ". mysqli_error($conexao)."</h1>";
}

mysqli_query($conexao, $queryDeletar);