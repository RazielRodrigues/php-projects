<?php  

include 'db.php';


$conexao = mysqli_connect($servidor,$user,$senha,$db);

$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

$query = "

INSERT INTO CURSOS(NOME_CURSOS, CARGA_HORARIA)
VALUES ('$nome_curso',$carga_horaria)

";


mysqli_query($conexao, $query);



header('location:index.php?pagina=cursos');

