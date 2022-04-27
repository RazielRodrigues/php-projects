<?php

include 'database.php';

$novoTexto = $_POST['novoTexto'];
$id_anotacao = $_POST['id_anotacao'];

$queryUpdate = "UPDATE ANOTACAO SET CONTEUDO ='$novoTexto' WHERE ID_ANOTACAO = $id_anotacao";

if (mysqli_query($conexao,$queryUpdate)) {
	echo "Deletado com sucesso";
	header('location:../index.php?pagina=home');
}else{
	echo "<h1>ERRO NA HORA DE DELETAR: ". mysqli_error($conexao)."</h1>";
}