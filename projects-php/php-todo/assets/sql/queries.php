<?php 

//Informações do server
$servidor='localhost';
$user = 'root';
$senha = '';
$db = 'studiesdb';

//Criando conexão com o banco de dados
$conexao = new mysqli($servidor, $user, $senha, $db);

//Checando a conexão
if (!$conexao) {
		die("<h1>Ops! erro de conexao" . $conexao->connect_error . "</h1>");
}


if (!$conexao) {
		die("<h1>Ops! erro de conexao</h1>" . $conexao->connect_error);
}

$queryAlter = " ALTER TABLE `anotacao` CHANGE `conteudo` `conteudo` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
";

$queryInsert = "INSERT INTO anotacao(id_anotacao, conteudo)
VALUES(default,'oi')";

// verificando se deu certo o SQL
if ($conexao->query($query) === TRUE) {
    echo "SQL Executado!";
} else {
    echo "Error: " . $query . "<br>" . $conexao->error;
}

$querySelect = "SELECT * FROM anotacao";
$resultadoSelect = $conexao->query($querySelect);


if ($resultadoSelect->num_rows > 0) {
	echo "<ul>";
		while ($row = $resultadoSelect->fetch_assoc()) {
			echo "<li>"."Número da anotacao: ". $row["id_anotacao"] ."<br>". "Conteudo: " . $row["conteudo"]."</li>";
		}
	echo "</ul>";
}else{
	echo "Sem resultados";
}






$queryDelete = "DELETE FROM anotacao WHERE id_anotacao = 2";

if (mysqli_query($conexao,$queryDelete)) {
	echo "Deletado com sucesso";
}else{
	echo "ERRO NA HORA DE DELETAR". mysqli_error($conexao);
}




$queryUpdate = "UPDATE anotacao SET conteudo ='mudei o conteudo' WHERE id_anotacao = 1";

if (mysqli_query($conexao,$queryUpdate)) {
	echo "update efetuado";
}else{
	echo "update errado";
}




mysqli_close($conexao);
?>