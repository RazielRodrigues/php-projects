<h1>Interface</h1>

<?php 
/*
Uma interface é responsavel por definir
de forma obrigatoria metodos que uma classe deve ter.

Na logica de interface é possivel
    - Implementar diversas interfaces em uma classe
    - uma interface pode herdar de outra interface

A interface é uma forma de definir como a classe deve ser moldada.

*/
interface Animal{
    function respirar();
}

interface Mamifero{
    function mamar();
}

interface Felino{
    function correr();
}

//! Um canino é um animal mamifero então faz sentido herdar essas interfaces
interface Canino extends Animal, Mamifero{
    function latir() : string;
}


/*
Agora dentro da classe cachorro será obrigatorio
implmentar os metodos das interfaces: Canino, Animal e Mamifero.
caso os metodos nao sejam implementados, vai gerar um erro.

*/
class Cachorro implements Canino{
    function respirar(){
        return 'irei usar oxigenio';
    }

    function latir(): string{
        return 'AU AU';
    }

    function mamar(){
        return 'tomar leite';
    }

    //! Essa função em termos de nome é o mesmo nome da interface de felio
    //! Mas como eu nao implementei essa interface nao vai gerar erro nem se eu apagar essa função
    //! ou deixar ela com o mesmo nome da outra
    function correr(){
        return 'vruun';
    }
}

$animal = new Cachorro();
echo $animal->respirar();
echo $animal->latir();
echo $animal->mamar();

//? Testes para mostrar como funciona as interfaces 
//? e o operador instanceof que retorna bool para quando um objeto nao faz parte da instancia (Felino)
var_dump($animal);
var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Canino);

//! Por conta disso é possivel usar o metodo correr igual
var_dump($animal instanceof Felino);