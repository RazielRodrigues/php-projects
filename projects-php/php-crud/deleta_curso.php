<?php 

include 'db.php';

$ID_CURSOS = $_GET['ID_CURSOS'];


$query = "DELETE FROM CURSOS WHERE ID_CURSOS = $ID_CURSOS";


mysqli_query($conexao ,$query);


header('location:index.php?pagina=cursos');

?>