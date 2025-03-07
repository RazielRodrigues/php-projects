<?php

Class Professor {
    function ensinar(){
        echo '<br>ensinando geral...';
    }
}

class ProfessorFisica extends Professor{
    function ensinar(){
        echo '<br>ensinando fisica...';
    }
    

    // Quebram o conceito de liskov
    // colocar esse metodo e deixar vazio?
    // function ensinar(){}
    
    // lançar uma expection
    // function ensinar(){
    //     throw new Exception;
    // }

    // trocar o tipo de retorno
    // function ensinar(){
    //     return 123;
    // }

}

$professor = new Professor();
$professorFisica = new ProfessorFisica();

function professorEnsina(Professor $professor){
    $professor->ensinar();
}

professorEnsina($professor);
professorEnsina($professorFisica);