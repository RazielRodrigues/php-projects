# PHP OO

A orientação a objetos é um paradigma de programação
onde os softwares interpretao a vida real.

# Conceitos

### Classe

    - uma classe define um tipo dentro da linguagem, é um molde.
    - ex: Cliente é uma classe
    - uma classe contém atributos e metodos
        - atributos e metodos possuem visibilidade dentro de uma classe (niveis de acesso)
        - ex: cada pessoa tem uma idade e nome
        - ex: imprimir nome da pessoa e a idade

### Objeto

    - um objeto é a instancia de uma classe
    - para instanciar um objeto voce usa a palavra $variavel = new NomeDaClasse()
    - feito isso voce tem uma copia de tudo que tem dentro da Classe de tal forma
    que seja possivel alterar e usar os atributos e metodos da classe atraves desse
    objeto


#### Definindo uma classe. atributos, metodos e invocação

    class Cliente {

        // atributos da classe cliente, estão com visibilidade 
        // public ou seja pode ser acessados de varios lugares
        public $nome = 'Anonimo';
        public $idade = 18;

        // um metodo de interação da classe
        public function apresentar(){
            return "Nome: {$this->nome} Idade : {$this->idade}<br>";
        }


    }

    // nova instancia da classe
    $c1 = new Cliente;

    // setando os elementos da classe
    $c1->nome = 'Raziel';
    $c1->idade = 22;

    //chamando um metodo da classe
    echo $c1->apresentar();

<hr>