<h1>Metodos magicos</h1>
var_dump(

);
/*
    ? ...
*/
<?php
class Pessoa{
    public $nome;
    public $idade;

    public function __construct($nome,$idade){
        echo 'invocado <BR>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function __destruct(){
        echo 'liberado <BR>';
    }

    /*
        ? Esse metodo transforma o contexto do objeto em string de forma que,
        ? seja possivel renderizar o objeto apontando para $this
        ? Transforma os atributos em string
    */
    public function __toString(){
       return "{$this->nome} tem {$this->idade} anos";
    }

    //! Acessando objeto apenas com o this
    public function apresentar(){
        echo $this . "<BR>";
    }

    /*
        ? ...
    */
    public function __get($atr){
        echo "Não declarado: {$atr}";
    }
    
}

$pessoa = new Pessoa('raziel', 22);
//? teste toString: $pessoa->apresentar();

$pessoa->nomeCompleto;
var_dump(



);