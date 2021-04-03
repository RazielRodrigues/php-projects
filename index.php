<h1>Definindo uma classe: atributos, metodos e invocação</h1>

    <?php
    class Cliente {

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
    ?>

<hr>

<h1>Desafio: classe data</h1>

    class Data{

        public $dia = 1;
        public $mes = 2;
        public $ano = 1970;

        public function apresentar(): string{
            return "{$this->dia}/{$this->mes}/{$this->ano}";
        }

    }

    $calendario = new Data();
    $calendario->dia = 1;
    $calendario->mes = 1;
    $calendario->ano = 1999;
    echo $calendario->apresentar();
    
<hr>

<h1>Construtor e destrutor</h1>

class  Pessoa{

    public $nome;
    public $idade;

    // Função que é chamada assim que a instancia é criada
    // se no __construct os parametros forem obrigatorios,
    // será necessarios passar eles diretamente pra instancia
    function __construct(string $vulgo, int $idade = 18)
    {
        // Definindo as variaveis da classe com o parametro vindo da instancia
        $this->nome = $vulgo;
        $this->idade = $idade;

    }

    // Executado quando o objeto é destruido
    function __destruct()
    {
        echo 'Liberado';
    }

    public function apresentar()
    {
        return "Nome: {$this->nome} Idade : {$this->idade}<br>";
    }

}
$borracheiro = new Pessoa("Carlos oliveira", 20);
echo $borracheiro->apresentar();
unset($borracheiro);

<hr>

<h1>Herança</h1>

<?php

class Pessoa{

public $nome;
public $idade;

    function __construct(string $vulgo, int $idade = 18)
    {
        $this->nome = $vulgo;
        $this->idade = $idade;
        echo 'Pessoa CRIADO';

    }

    function __destruct()
    {
        echo 'Pessoa Liberada';
    }

    public function apresentar()
    {
        return "Nome: {$this->nome} Idade : {$this->idade}<br>";
    }

}

/*
//! Pessoa = classe pai
//! Usuario = classe filho
//? Nem toda pessoa tem um login
//! Jeito sem herança
class Usuario extends Pessoa{

    public $login;

    //! Nome e idade so são parametros da função nao são considerados variaveis padrão da classe!
    //! Jeito sem herança
    function __construct($login, $idade, $nome){
        $this->login = $login;
        $this->idade = $idade;
        $this->nome = $nome;
        echo 'Usuario CRIADO';
    }

    function __destruct(){
        echo 'Usuario liberado';
    }

    // ? Ato de sobrescrever um metodo pois na classe pessoa tambem existe
    // ? uma função com o mesmo comportamento, e mesmos atributos (jeito sem herança)
    // ? Caso queira nao precisa definir nada aqui de apresentar pois vai puxar a função
    // ? que ja existe em Pessoa. isso pode gerar incosistencia.
    function apresentar($nome, $idade, $login){
        echo "apresentando com o @{$this->login} {$this->nome} {$this->idade}";
    }

}

$user = new Usuario('raziel', 22, 'rznight');
$user->apresentar();

*/

class Usuario extends Pessoa{

    public $login;

    function __construct($login, $nome, $idade){
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo 'User CRIADO!<br>';
    }

    function __destruct(){
        echo 'Usuario ja era';
        parent::__destruct();
    }

    function apresentarLogin(){
        echo "@{$this->login}<br>";
        echo parent::apresentar();
    }

}

$user = new Usuario('RZ', 'raziel', 22);
$user->apresentarLogin();
var_dump($user);
// $user = null;

var_dump($user);
?>