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

<?php

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
    
?>

<hr>

<h1>Construtor e destrutor</h1>

<?php

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

?>

<hr>

<h1>...</h1>