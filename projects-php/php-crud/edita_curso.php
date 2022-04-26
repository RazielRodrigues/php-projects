<?php 

include 'db.php';

$ID_CURSOS = $_POST['ID_CURSOS'];
$NOME_CURSOS = $_POST['NOME_CURSOS'];
$CARGA_HORARIA = $_POST['CARGA_HORARIA'];


$query = "UPDATE CURSOS SET NOME_CURSOS = '$NOME_CURSOS', CARGA_HORARIA = $CARGA_HORARIA
		WHERE ID_CURSOS = $ID_CURSOS

			";


mysqli_query($conexao ,$query);


header('location:index.php?pagina=cursos');

?>