<?php 

$servidor='us-cdbr-east-05.cleardb.net';
$user = 'bfff28e7229e4b';
$senha = 'bef6c00e';
$db = 'heroku_201a8405690d62f';

$conexao = mysqli_connect($servidor,$user,$senha,$db);


$query = "SELECT * FROM CURSOS";
$consulta_cursos = mysqli_query($conexao, $query);

$query = "SELECT * FROM ALUNOS";
$consulta_alunos = mysqli_query($conexao,$query);

// $query = "

// SELECT ALUNOS.NOME_ALUNOS, CURSOS.NOME_CURSOS 
// FROM ALUNOS, CURSOS, ALUNOS_CURSOS
// WHERE ALUNOS_CURSOS.ID_ALUNOS = ALUNOS.ID_ALUNOS 
// AND ALUNOS_CURSOS.ID_CURSO = CURSOS.ID_CURSO

// ";

$query = "

    SELECT ALUNOS.NOME_ALUNOS, CURSOS.NOME_CURSOS
    FROM ALUNOS_CURSOS, ALUNOS, CURSOS 
    WHERE ALUNOS_CURSOS.ID_ALUNOS = ALUNOS.ID_ALUNOS 
    AND ALUNOS_CURSOS.ID_CURSOS = CURSOS.ID_CURSOS;

";

$consulta_matriculas = mysqli_query($conexao,$query);


