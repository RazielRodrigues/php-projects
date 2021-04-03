<h1>Modificador final</h1>
<?php

abstract class Abstrata {

    abstract public function metodo1();

    //? Definindo esse metodo como final ele nao poderá ser modificado
    //? mesmo que seja herdado dentro de qualquer contexto.
    //? De forma que ele pode ser executado mas nao mudado.
    //? tentar chamar ele vai gerar um erro
    public final function metodo2(){
        echo "<hr>nao vou mudar pois sou final e to executando da classe Abstrata";
    }

}

class Classe extends Abstrata{

    public function metodo1(){
        echo "<hr>executar metodo 1 da classe {Classe}";
    }

    // public function metodo2(){
    //     echo 'extends metodo 2 final tentando mudar e deu erro';
    // }

}

$classe = new Classe;
$classe->metodo1();

//? vai executar o metodo que foi extendid da classe Abstrata
//? nao ocorreu o override, pois ia gerar erro.
$classe->metodo2();

//? É possivel intanciar uma classe final, mas nao herdala, senão iria gerar um erro igual do metodo.
final class Unica{
    public $attr = '<hr>Valoe dinamico classe Unica';
}

//! Erro de extensão
// class Teste extends Unica{}

//? Instanciando uma classe final, normal.
$unica = new Unica();
echo $unica->attr;