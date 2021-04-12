<h1>Metodos magicos</h1>
<?php
class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome,$idade){
        echo 'invocado <BR>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo 'liberado <BR>';
    }

    public function __toString(){
       return "{$this->nome} tem {$this->idade} anos";
    }

    public function apresentar(){
        echo $this . "<BR>";
    }
    
}

$pessoa = new Pessoa('raziel', 22);
$pessoa->apresentar();