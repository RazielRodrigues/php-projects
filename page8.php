<h1>Polimorfismo:</h1>
<?php

//! conceito mais presente em linguagens tipadas
//! No php se passa o tipo pela função.

//? Classe abstrata pois será apenas usada de superclasse
abstract class Comida {
    public $peso;
}

abstract class Bebida{
    public $peso;
}

class Arroz extends Comida{}

class ArrozAgrega extends Arroz{}

class Feijão extends Comida{}

class Sorvete extends Comida{}

class Suco extends Bebida{};

class Pessoa {

    public $peso;

    function __construct($peso){
        $this->peso = $peso;
    }


    /*
        ? O segredo está em qual parametro voce vai passar para a função
        ? como eu passei Comida qualquer classe que tenha herança de Comida
        ? será aceita pela função.

        ? Ou seja serve para amarrar os tipos qur vão entrar na função
        ? Mas o PHP já é uma linguagens que trabalha assim naturalmente.

    */
    public function comer(Comida $comida){
        $this->peso += $comida->peso;
    }

}

$almoco = new Arroz();
$almoco->peso = 0.20;

$janta = new ArrozAgrega();
$janta->peso = 0.10;

$ceia = new Sorvete();
$ceia->peso = 1.50;

$suco = new Suco();
$suco->peso = 0.20;

$raziel = new Pessoa(65.00);
$raziel->comer($almoco);
$raziel->comer($janta);
$raziel->comer($ceia);


//! gera erro $raziel->comer($suco);
echo $raziel->peso;