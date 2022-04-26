<?php 
session_start();

include 'db.php';

include 'header.php';

// if(isset($_SESSION['login'])){
	if (isset($_GET['pagina'])) {
		$pagina = $_GET['pagina'];
	}else{
		$pagina = 'cursos';
	}
// }else{
// 	$pagina = 'home';
// }





switch ($pagina) {
	case $pagina == 'cursos':
		include 'views/cursos.php';
		break;

	case $pagina == 'alunos':
		include 'views/alunos.php';
		break;

	case $pagina == 'matriculas':
		include 'views/matriculas.php';
		break;

	case $pagina == 'inserir_novo_curso':
		include 'views/inserir_novo_curso.php';
		break;

	case $pagina == 'inserir_novo_aluno':
	include 'views/inserir_novo_aluno.php';
		break;

	case $pagina == 'inserir_matriculas':
		include 'views/inserir_matriculas.php';
		break;

	default:
		include 'views/home.php';
		break;
}

# Chamando views com if
// if ($pagina == 'cursos') {
// 	include 'views/cursos.php';
// }else if ($pagina == 'alunos') {
// 	include 'views/alunos.php';
// }else if ($pagina == 'matriculas') {
// 	include 'views/matriculas.php';
// }else if($pagina == 'inserir_novo_curso'){
// 	include 'views/inserir_novo_curso.php';
// }else if($pagina == 'inserir_novo_aluno'){
// 	include 'views/inserir_novo_aluno.php';
// }else if($pagina == 'inserir_matriculas'){
// 	include 'views/inserir_matriculas.php';
// }else{
// 	include 'views/home.php';
// }





// include 'footer.php';

?>