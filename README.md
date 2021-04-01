"A orientação a objetos é um paradigma de programação onde os softwares interpretao a vida real."

# Conceitos

## Classe

    - uma classe define é um molde.
        - ex: Cliente é uma classe
    - uma classe contém atributos e metodos
        - atributo é tudo aquilo que define a classe
            - ex: cada pessoa tem uma idade e nome (atributo)
        - metodo é tudo aquilo que a classe executa
            - ex: imprimir nome da pessoa e a idade (metodo)

## Objeto

    - um objeto é a instancia de uma classe
    - para instanciar um objeto voce usa a palavra $variavel = "new" NomeDaClasse()
    - feito isso voce tem uma copia de tudo que tem dentro da Classe de tal forma
    que seja possivel alterar e usar os atributos e metodos da classe atraves desse
    objeto a traves de $variavel->metodo();

## Encapsulamento
    
    - o ato de encapsular é saber o que pode/precisa ser visto publicamente ou apenas interno
    - para definir isso usamos os modificadores de acesso
        - public: pode ser acessado de todos os lugares do codigo que instanciem a classe
        - protected: pode ser acessado dentro da classe e classes de herança
        - private: so pode ser acessado pela propria classe
    - atributos e funções recebem os modificadores

## Herança

    - a herança é baseado em hierarquias é a pergunta é sempre "é um?"

    <img src="images/heranca.png">

    - nem sempre hierarquia esta ligado com Herança

    <img src="images/heranca2.png">



#### Definindo uma classe: atributos, metodos e invocação

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

#### Metodos classe: constructor e destructor

    - function __contruct($a,$b,...){}
        - chamada imediatamente com a nova instancia
        - caso o metodo constructor precise de parametros, 
        esses parametrros, deverão ser passados junto com o nee
        ex: $borracheiro = new Pessoa('Alexandre', 20);

    - function __destruct(){}
        - é invocada assim que o objeto é destruido
        ex: unset($borracheiro) ou $borracheiro = null

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

#### ....