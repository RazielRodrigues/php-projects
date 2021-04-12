<h1>Metodos magicos</h1>
<?php
class Pessoa{
    public $nome;
    public $idade;

    public function __construct($nome,$idade){
        echo 'invocado <hr>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function __destruct(){
        return 'liberado <hr>';
    }

    /*
        ? Esse metodo transforma o contexto do objeto em string de forma que,
        ? seja possivel renderizar o objeto apontando para $this
        ? Transforma os atributos em string
    */
    public function __toString(){
       return "{$this->nome} tem {$this->idade} anos";
    }

    //! Acessando objeto apenas com o $this pois o objeto inteiro virou uma string
    public function apresentar(){
        echo $this . "<hr>";
    }

    /*
        ? o metodo get é ativado quando nao existe o atributo na classe
        ? e mesmo assim voce tenta acessar. ou seja ali embaixo eu tentei
        ? acessar nome completo e nao existe esse atributo declarado.
        ? agora o que vai acontecer e que pro metodo __get será enviado essa informaçao
        ? ou seja "nomeCompleto".

        ! Com isso é possivel manipular essas requisições de atributos que não existem.
    */
    public function __get($atr){
        echo "Tentando acessar atributo não declarado: {$atr} quer fazer algo? <hr>";
    }

    /*
        ? O metodo __set cria novos atributos quando eles não existem de forma que os parametros são
        ? atr = nome do atributo que não existe
        ? val = valor dado a esse atributo
    */
    public function __set($atr, $val){
        echo "Criando atributo não declarado: {$atr} / {$val}";
    }
    
    /*
        ? __call é chamado quando tenta executar um metodo que não existe
        ? caso voce passe parametros para esse metodo os parametros
        ? vão se tornar um array dentro dessa função.

        ! Tem a mesma ideia de manipular dos outros metodos
    */
    public function __call($metodo, $params){
        echo "tentando executar metodo inexistente: {$metodo} com os parametros:";
        print_r($params);
    }

}

$pessoa = new Pessoa('Raziel', 22);
//? teste toString: $pessoa->apresentar() ou echo $pessoa;
//? teste __get: $pessoa->nomeCompleto;
//? teste __set: $pessoa->nomeCompleto = "Raziel Rodrigues";
//? teste 1 __call: $pessoa->exec();
//? teste 2 __call: $pessoa->exec(true, 123, 'abc', ['teste',234,false]); //? Passando com parametros
// ! metodos magicos não uma coisa padrão então deve pensar bem antes de usar