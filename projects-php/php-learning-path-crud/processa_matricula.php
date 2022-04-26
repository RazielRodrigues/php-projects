<?php  

include 'db.php';

$id_aluno = $_POST['escolhe_aluno'];
$id_curso = $_POST['escolhe_curso'];

$query = "



INSERT INTO `alunos_cursos` (`ID_ALUNOS_CURSOS`, `ID_CURSOS`, `ID_ALUNOS`) 

VALUES (NULL, $id_curso, $id_aluno)

";


mysqli_query($conexao, $query);
header('location:index.php?pagina=matriculas');

