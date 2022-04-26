<?php 

include 'db.php';

$ID_ALUNOS = $_GET['ID_ALUNOS'];


$query = "DELETE FROM ALUNOS WHERE ID_ALUNOS = $ID_ALUNOS";


mysqli_query($conexao ,$query);


header('location:index.php?pagina=alunos');

?>