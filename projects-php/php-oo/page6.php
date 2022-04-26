<h1>Traits</h1>
<?php

/*
    - com traits é possivel criar funções e atributos e usar dentro de uma classe sem extender nada
    - de forma que seja mais flexivel a sua utilização pois nao se amarra no conceito de hierarquia
    - para chamar as traits se usa a palavra "use"
    - tambem é possivel ter modificadores de acesso dentro de traits: public, protected e private.
    - é muito bom pra reusar codigo
    - voce nao consegue acessar os metodos das traits diretamente, apenas dentro de uma classe
    ou apartir de um objeto de instancia da classe.
        - ex: var_dump(validacao->validarString(' ')); // gera erro
        - ex (certo): 

*/
trait validacao{

    public $a = 'Valor A';
    public function validarString($str){
        return isset($str) && $str !== '';
    }

    public function myNull($p){
        return empty($p);
    }

}

trait validacaoMelhor{
    public $b = 'Valor B';
    private $c = 'Valor Privado da trait validacaoMelhor';

    public function validarStringMelhor($str){
        return isset($str) && trim($str);
    }

    public function myNull($p){
        return empty($p);
    }

}

class Usuario {

    use validacao, validacaoMelhor{
        validacaoMelhor::myNull insteadof validacao;
        // validacao::myNull insteadof validacaoMelhor;
        validacao::myNull as myNull2;
    }

    public function imprimirC(){
        return $this->c;
    }

}

//? tentando acessar direto pelo nome da trait
// var_dump(validacao->validarString(' '));

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
var_dump($usuario->validarStringMelhor(' '));
echo $usuario->a, '<hr>', $usuario->b;
echo '<hr>',$usuario->imprimirC();
$s = '';
var_dump($usuario->myNull($s));