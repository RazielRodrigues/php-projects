<h1>Classes abstratas</h1>
<?php 

//! Uma classe abstrata nao pode ser instanciada
//! Uma classe abstrata serve basicmaente para ser herdada, essa seria uma "Super classe asbtrata"
//! É possivel alterar a visibilidade de uma função de classe abstrata sempre subir o nivel protected > public

abstract class Abstrata {
    
    //? Pode ser definido apenas o corpo da função e seus parametros, tipagem, visibilidade
    abstract public function metodo1();
    abstract protected function metodo2($parametro);

}

//? Classes abstratas podem ter herança
abstract class FilhaAbstrata extends Abstrata{

    //? Modificando o metodo da classe Abstrata e executando ele por override mesmo
    public function metodo1() {
        echo 'executando metodo 1 herdado de abstrata em Filha abstrata <hr>';
    }

    //? Esse metodo vai ser acessado na concreta
    abstract public function metodo3();

}

//! Classes concretas podem herdar classes abstratas, sempre relação de um pra um.
//! Quando voce implementa uma classe abstrata dentro de uma concreta voce é obrigado
//! A definir os metodos pré existentes nas classes abstratas herdadas senao da erro.
class Concreta extends FilhaAbstrata{

    //! Metodo Abstrata
    public function metodo1(){
        echo "Executando metodo 1 da classe {Abstrata} dentro de Concreta <hr>";
        echo "Executando metodo 1 com parent ou seja pegando da classe Filha Abstrata, pois usou extends <hr>";
        parent::metodo1();
    }

    //! Metodo Abstrata

    /*
    ? Caso eu queira é possivel alterar o nivel de visibilidade como havia dito
    ? Se executar com public da certo.
    ? Mas nao é possivel abaixar o nivel de acesso.
    public function metodo2($parametro){
    */
    protected function metodo2($parametro){
        echo "Executando metodo 2, com  o parametro ( $parametro ) esse metodo é herdado da classe Abstrata <hr>";
    }

    //! Metodo Filha Abstrata
    public function metodo3(){ 
        echo "Executando metodo 3 que vem da classe FilhaAbstrata <hr>";

        //? Alterando o metodo2 interno
        $this->metodo2('interno');
    }


}


$c = new Concreta();
$c->metodo1();
$c->metodo3();

echo "Dumps:";

var_dump($c);
var_dump($c instanceof Concreta);
var_dump($c instanceof Abstrata);
var_dump($c instanceof FilhaAbstrata);