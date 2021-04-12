"A orientação a objetos é um paradigma de programação onde os softwares interpretao a vida real."

# Conceitos

## Classe

    - uma classe é um molde.
        - ex: Cliente é uma classe
    
    - uma classe contém atributos e metodos
        - atributo é tudo aquilo que define a classe
            - ex: cada pessoa tem uma idade e nome (atributo)
        - metodo é tudo aquilo que a classe executa
            - ex: imprimir nome da pessoa e a idade (metodo)

## Objeto

    - um objeto é a instancia de uma classe
    
    - para instanciar um objeto se usa a palavra "new"
    
    - feito isso voce tem uma copia de tudo que tem dentro da Classe de tal forma
    que seja possivel alterar e usar os atributos e metodos da classe atraves desse
    objeto a traves de "->"

## Encapsulamento
    
    - o ato de encapsular é saber o que pode/precisa ser visto publicamente ou apenas interno
    
    - para definir isso usamos os modificadores de acesso
        - public: pode ser acessado de todos os lugares do codigo que instanciem a classe
        - protected: pode ser acessado dentro da classe e classes de herança
        - private: so pode ser acessado pela propria classe
    
    - atributos e funções recebem os modificadores

## Herança

    - a herança é baseado em hierarquias é a pergunta é sempre "é um?"
    
    - a ideia é pensar em diversos metodos e atributos que possam ser comuns
    entre uma hierarquia de objetos, pensando sempre em como eles vão se relacionar.
    - por exemplo eu poderia ter essa classe


    Class Animal{

        public $respirar;
        public $idade;

        public function respirar(): int{
            if($this->idade < 120>){
                $this->resipirar++;
                return $respirar;
            }
        }

    }
    
    depois uma classe:

    Class Anfibio{
        public $aquatico;

        protected function check(): string
        {
            if($this->aquatico){
                return 'Anfibio';
            }
        }

    }

    - dessa forma anfibio pode herdar de animal mas animal nao herda de anfibio
    pois nem todos os animais sao aquaticos.

<img src="images/heranca.png">

<small>Uma questão de herança bem logica aqui baseado em arvore, esse deve ser o pensamento.</small>

<img src="images/heranca2.png">

<small>Nem sempre hierarquia esta ligado com Herança</small>

## Polimorfismo

    - php nao tem sobrecarga de metodo (metodos com o mesmo nome)
        - alternativa usar os parametros do construtor com ...
            - function __construct($a, ...) {}
    
    - php usa tipos dinamicos e nao estaticos
    
    - polimorfismo é quando voce usa uma superclasse como "Animal"
    em varios objetos, em linguagens tipadas é passado direto na tipagem
    da variavel, em php é passado por uma função.
        - java:
            - int x = 1; // tipagem
            - Animal c = new Anfibio(); // instanciando um objeto anfibio que vai herdar tudo de Animal
            - c = new Mamifero(); // Mudando pra mamifero pq mamifero também é animal
        - php:
            - $x = 1 ?? 'dinamico'; // tipagem
            - function analisar(Animal $bichoEstranho) {...} // passando o parametro como função, 
            assim pode usar como quiser o parametro dentro da função instanciando diversos objetos.


### Definindo uma classe: atributos, metodos e invocação

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

### Metodos classe: constructor e destructor

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

### Static

    - Variaveis estaticas são como padrões default da classe
        - geralmente usado com constantes, ou varaveis que não vão mudar durante a criação do objeto
    
    - para acessar variaveis ou metodos estaticos não é necessario instanciar um objeto
    - para definir que é estatico se usa: static $var / static function a(){}
    - não se acessa com o $this se acessa com self::$static
        - echo "nao estatica = {$this->naoStatic}<br>";
        - echo "estatica = ".self::$static."<br>";
    
    - Dentro de uma função static so se consegue acessar membros estaticos
    
    - Para acessar membros estaticos:
        - echo A::$static , '<hr>'; //? Acesar diretamente pela classe
        - A::mostrarStaticA(); //? Acesar diretamente pela classe
    - Lembrando que o ideal é acessar mebros de classe com essa notação uma vez que deixa mais claro
        - $objA->mostrarStaticA(); da pra acessar instanciando um objeto e fazendo dessa forma, mas não é ideal.
    
    - Logo que mebros staticos fazem parte da classe e nao do objeto,
    - deixando de livre acesso pra fora do codigo, claro depende do nivel de acesso
    - Tambem é possivel alterar os valores dos membros da classe.
        - A::$static = '<hr>valor alterado do membro da classe ';
        - echo A::$static;
    

### interface

    - Uma interface é responsavel por definir de forma obrigatoria metodos que uma classe deve ter.
    
    - Na logica de interface é possivel:
        - Implementar diversas interfaces em uma classe
        - uma interface pode herdar de outra interface
        - A interface é uma forma de definir como a classe deve ser moldada.
        - Uma classe que respeita a sua interface pode ser chamada de classe concreta.


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

    
    - Agora dentro da classe cachorro será obrigatorio
    - implmentar os metodos das interfaces: Canino, Animal e Mamifero.
    - caso os metodos nao sejam implementados, vai gerar um erro.

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

### Classes abstratas

    - Uma classe abstrata nao pode ser instanciada
    - Uma classe abstrata serve basicmaente para ser herdada, essa seria uma "Super classe asbtrata"
    - É possivel alterar a visibilidade de uma função de classe abstrata sempre subir o nivel protected > public
    - Pode ser definido apenas o corpo da função e seus parametros, tipagem, visibilidade
    - Classes abstratas podem ter herança

    - Classes concretas podem herdar classes abstratas, sempre relação de um pra um.
    - Quando voce implementa uma classe abstrata dentro de uma concreta voce é obrigado
    - A definir os metodos pré existentes nas classes abstratas herdadas senao da erro.

    - Caso eu queira é possivel alterar o nivel de visibilidade como havia dito
    - Se executar com public da certo.
    - Mas nao é possivel abaixar o nivel de acesso.

### Modificador Final

    - Uma classe/metodo com o modificador final nao pode ser herdada/alterado
    serve principalmente para evitar que metodos ou classes sejam alteradas
    por regras de negocios.

    - Toda vez que alguem tentar alterar esse membro com final será notificado pelo
    proprio codigo de que não é possivel alterar, dai causa a pergunta:
    "Sera que é melhro alterar o metodo ou a classe original ?"

    - Evita bastante complicação em trechos de codigo que não devem ser alterados.

### Traits

    - com traits é possivel criar funções e atributos e usar dentro de uma classe sem extender nada
    - de forma que seja mais flexivel a sua utilização pois nao se amarra no conceito de hierarquia
    - para chamar as traits se usa a palavra "use"
    - tambem é possivel ter modificadores de acesso dentro de traits: public, protected e private.
    - é muito bom pra reusar codigo
   
    - voce nao consegue acessar os metodos das traits diretamente, apenas dentro de uma classe
    ou apartir de um objeto de instancia da classe.
        - ex: var_dump(validacao->validarString(' ')); // gera erro
        - ex (certo): 

### Metodos magicos

    - metodos magicos não uma coisa padrão então deve pensar bem antes de usar

    - __construct
    - __destruct

    - __toString
        - Esse metodo transforma o contexto do objeto em string de forma que,
        - seja possivel renderizar o objeto apontando para $this
        - Transforma os atributos em string

    - __get
        - o metodo get é ativado quando nao existe o atributo na classe
        - e mesmo assim voce tenta acessar. ou seja ali embaixo eu tentei
        - acessar nome completo e nao existe esse atributo declarado.
        - agora o que vai acontecer e que pro metodo __get será enviado essa informaçao
        - ou seja "nomeCompleto".
        - Com isso é possivel manipular essas requisições de atributos que não existem.

    - __set
        - O metodo __set cria novos atributos quando eles não existem de forma que os parametros são
        - atr = nome do atributo que não existe
        - val = valor dado a esse atributo

    - __call
        - __call é chamado quando tenta executar um metodo que não existe
        - caso voce passe parametros para esse metodo os parametros
        - vão se tornar um array dentro dessa função.
        - Tem a mesma ideia de manipular dos outros metodos

### Polimorfismo

    - O segredo está em qual parametro voce vai passar para a função
    - como eu passei Comida qualquer classe que tenha herança de Comida
    - será aceita pela função.
    - Ou seja serve para amarrar os tipos qur vão entrar na função
    - Mas o PHP já é uma linguagens que trabalha assim naturalmente.

    public function comer(Comida $comida){
        $this->peso += $comida->peso;
    }