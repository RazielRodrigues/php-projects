<h1>OBJECT ORIENTED</h1>

<hr>

<?php
class Cliente {

    // atributos
    public $nome = 'Anonimo';
    public $idade = 18;


    public function apresentar(){
        return "Nome: {$this->nome} Idade : {$this->idade}<br>";
    }


}

$c1 = new Cliente;
$c1->nome = 'Raziel';
$c1->idade = 22;

echo $c1->apresentar();