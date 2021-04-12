<h1>Polimorfismo:</h1>
<?php

//! conceito mais presente em linguagens tipadas

abstract class Comida {
 public $peso;
}

class Arroz extends Comida{}

class ArrozAgrega extends Arroz{}

class Feijão extends Comida{}

class Sorvete extends Comida{}

class Pessoa {

    public $peso;

    function __construct($peso){
        $this->peso = $peso;
    }

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

$raziel = new Pessoa(65.00);
$raziel->comer($almoco);
$raziel->comer($janta);
$raziel->comer($ceia);

echo $raziel->peso;