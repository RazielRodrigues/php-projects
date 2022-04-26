<?php 
include 'model/database.php';
include 'views/header.php';

    if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
    }else{
        $pagina = 'home';
    }

    switch ($pagina) {
        case $pagina == 'inserir':
                include 'views/inserir.php';
            break;
        case $pagina == 'atualizar':
                include 'views/atualizar.php';
            break;       
        default:
                include 'views/home.php';
            break;
    }

include 'views/footer.php';
?>