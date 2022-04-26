<img src="UC-01a02f43-a465-4d80-9d6b-904360fa9ec9.jpg">

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

# PHP: Orientação a objetos

Orientação a objetos se trata de simular a vida real em programação, tratando literalmente como um objeto o código.

## Classes, modificadores e funções

A palavra reservada "class" no PHP cria uma classe, um objeto é uma instancia de uma classe, uma classe possui atributos e por sua vez metodos que definem o que de fato aquela classe faz e possui. Então um objeto serve para poder definir e usar os metodos que vem da classe por exemplo: Pessoa é uma classe, toda pessoa tem a propriedade nome e a função de respirar, entretanto nem toda pessoa tem o mesmo nome e nem toda pessoa respira na mesma velocidade essas "particularidades" são definidas no objeto.

	class Pessoa{
		$NomePessoa;
	}

Os objetos são instancias de uma classe para instanciar um objeto é usado a palavra "new" ou seja você basicamente esta dizendo que uma váriavel, tem todas as propriedades e todas os metodos de uma classe, sendo possível usar os metodos da classe e também definir as suas propriedades para cada novo objeto que voce cria por exemplo: Eu Raziel sou uma pessoa então eu Raziel estendo a classe pessoa, o Raziel é um objeto da classe pessoa. em termos de código é igual a:

	$raziel = new Pessoa();

Quandos se declara atributos e metodos dentro de classe é necessário declarar os modificadores de acesso que é o que controla a visibilidade das propriedades e metodos dessa classe. Para isso temos algumas palavras reservadas que definem isso são elas:

	public - com o public é possível acessar propriedades e metodos da classe dentro ou fora dela.
	private - com o private deixa tudo fechado ou seja só pode ser acessado dentro da classe.
	protected - O protected é a mesma coisa que o private, a execção e que metodos e atributos com esse modificador conseguem ser acessados de classes que herdam da classe pai. Conceito de herança.

Para acessar uma propriedade de um objeto basta usar:
	
	$raziel->NomePessoa;

(Pensando que estamos acessando com um modificador publico, e chamando a váriavel de outro arquivo)

E quando usar o modificador protected?

Pense no caso do saldo, se você tem um saldo de 2000 reais e ai voce deixa ele publico seria possivel alterar de 2000 para 0 ou seja os modificadores são importantes para esse tipo de controle.

### Conceito de metodos dentro de classes

Os metodos servem para adicionar ações dentro de uma classe eles também possuem os modificadores de acesso, para construir um metodo é a mesma sintaxe, entretando com o modificador na frente:

	public function falarOla(){
		return 'olá';
	}

Para acessar um metodo de uma classe basta usar:

	echo $raziel->falarOla();

e caso fosse com parametros seria:

	echo $raziel->falarOla('ola, tudo bem?');

O metodo construtor ele é sempre executado quando você instancia um novo objeto de uma classe, em código fica:

	public function __construct(){
		echo 'eu sou o construtor';
	}

Em uma classe não se define as váriaveis, pois, o objetivo da orientação objeto é criar coisas dinamicas, e para fazer isso se usa o metodo construtor, para isso se deve passar como parametro as propriedades que queremos setar. É importante ressaltar que quando você está trabalhando com orientação a objetos, a gente nao deixa as propriedades serem trocadas externamente, para isso se deve criar metodos que alterem essas propriedades.

E como fazer isso?

Imagine o cenario de um banco, onde estamos trabalhando com saldo, quais são as formas de alterar o saldo de uma conta? ou com deposito ou com saque, então para isso se deve criar dois metodos que manipulem essa propriedade.


## Datetime, manipulação de dados, datas e horas

A classe DateTime serve para manipular datas e formatalas dentro dos padrões necessarios caso queira visualizar as especificações basta olhar na documentação do PHP:

https://www.php.net/manual/pt_BR/class.datetime.php

Para instanciar uma novo objeto dessa classe se utiliza:

	new $data = new DateTime();

Com esse metodo ja temos acesso a data e hora em que roda o PHP.

Para formatar a data usamos o metodo format() com os devidos dados de formatação:

	echo $data->format('d-m-y');
	echo $data->format('D-M-Y');

Temos também a classe DateInterval essa classe tem metodos de intervalo de tempos, por exemplo se quisermos adicionar ou subtrair intervalos de tempo de datas basta usarmos:

	$intervalo = new DateInterval('PT5M');

Os parametros de quantidade de intervalo de tempo que queremos adcionar são passados diretamente no metodo construtor da classe, existem diversos parametros que podem ser consultados aqui:

https://www.php.net/manual/pt_BR/class.dateinterval.php

No exemplo acima estamos querendo colocar um intervalo de 5 minutos na data esse intervalo pode ser adicionado ou subtraido da data através dos metodos:

	add() e sub()

Ficando assim:


	$data = new DateTime();
	$intervalo = new DateInterval('PT5M');
	
	$data->add($intervalo);
	var_dump($data);

	$data->sub($intervalo);
	var_dump($data);

## Exceções em PHP

Quando a aplicação apresenta um comportamento inesperado nos trabalhamos com exceções, ela intemrrompe o funcionamento do código e nós podemos coletar diversos dados com as exceções e para isso usamos a classe Exception que pode ser vista aqui:

https://www.php.net/manual/pt_BR/class.exception

Para lançar uma essa usamos a sua instaciação e passamos a mensagem que desejamos em seu construtor ficando assim:

	throw new Exception("Error Processing Request");

Sempre que se usa uma exceção o código para de funcionar e lança um fatal error quando a exceção é usada sem captura (try e catch), exceções também são usadas para evitar validações com condicionais, como no exemplo abaixo:

	//A função recebe o array usuario como parametro, em seguida faz uma verificação para saber se algum dos indices desse array estão vazios, caso estejam vai lançar a exceção de campos nao preenchidos. Senão retorna verdade e continua executando o código

	function validarUsuario(array $usuario)
	{
		if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
			throw new Exception("Campos obrigatorios não foram preenchidos!");
		}
		return true;
	}

	//Aqui declaramos o array e não passamos o parametro nome, justamente para forçar o erro

	$usuario = [
	'codigo' => 1,
	'nome' => '',
	'idade' => 43,
	];

	//Chamando a função validarUsuario e passando o array usuario como parametro para a função

	validarUsuario($usuario);


### Capturando exceções com Try e Catch

Como o próprio nome já diz Try vem de tentar ou seja irá tentar executar uma coisa e se der errado o catch vai pegar o motivo que fez isso dar errado então adicionamos o seguinte bloco de código no codígo de cima, buscando melhorar a sua perfomance:

	
	//Aqui o try verifica se a função retorna "true"

	$status = false; //usada no finally

	try{
		validarUsuario($usuario);

	//Aqui o catch pega a exceção que foi lançada e a mensagem relacionada a ela com o metodo getMessage() da mesma forma que usamos o metodo getMessage() podemos usar outros metodos dessa classe que auxiliem na hora de mostrar o porque dessa exceção, entretanto mesmo lançando a exceção o codigo continua rodando, e para que nao continue rodando é importante adicionar algum metodo de parada de codigo como o die(), return false, break etc

	} catch (Exception $e) {
		echo $e->getMessage();

	//O bloco finally executa o finalmente da situação e serve para identificar o fluxo e como o mesmo está funcionando, para saber o status das exceções usamos uma variavel $status que armazena primeiramente como false, caso os erros sejam lançados, armazenamos o estado nessa variavel e através da técnica "cast" trasnformamos essa variavel em int para retornar 0 e 1 invés de false ou true, isso é muito bom para ir controlando o fluxo e verificando se esta tudo correndo bem.

	}finally{
		echo "<br><br>Status da operação = ".(int)$status;
		die();
	}


## Banco de dados PDO com PHP

PDO é uma abstração de como usar banco de dados em orientação a objetos utilizando data objects:

https://www.php.net/manual/pt_BR/book.pdo.php

Com o PDO nós não precisamos saber o que de fato está acontecendo no banco de dados, basta utilizar os metodos da classe PDO que o PHP faz o restante independente do banco de dados que vamos usar, a classe PDO auxilia a gente nisso, para lidar com banco de dados e suas operações básicas apelidadas de "CRUD" primeiro precisamos conectar com o banco de dados como no exemplo:

	//Declarando a variavel que vai receber a classe PDO
	$conexaoDB = null;

	//Try para tentar a conexão
	try {
		
		//Instanciando um novo objeto da classe PDO o primeiro parametro é o nome do DB que esta sendo usado, em seguida o HOST (Número de IP) em que se encontra. O Segundo parametro o nome da base de dados, terceiro o user dela, e depois a senha do DB.

		$conexaoDB = new PDO('mysql:host=localhost;dbname=pdo' , 'root' , '');
	
	} catch (Exception $e) {

		//Catch para caso haja algum erro em seguida o die
		echo $e->getMessage();

		die();
	}

	//Teste da variavel
	var_dump($conexaoDB);

	//Return dos dados da conexão para ser usado depois
	return $conexaoDB;

### Operações de CRUD com PDO:

Após a conexão, nós podemos executar as operações do banco de dados para isso vamos usar uma sequencia de metodos:
	
Utilização com delete:

	// 1 - Salvar o arquivo de conexão dentro de uma variavel
	$conexaoDB = require 'connect.php';
	
	// 2 - Criar o SQL que deseja ser efetuado (insert, update, delete) no parametro de values nós usamos o '?' que siginifica um misterio de valor que mais a frente será decodificado pelo metodo prepare
	$delete = 'delete from produtos where id = ?';

	// 3 - Aqui a gente instancia o metodo prepare da classe PDO através do objeto conexãoDB (que está pronto para ser usado no arquivo connect.db) o metodo prepare serve para "preparar o SQL" da query que queremos executar a fim de evitar que ocorram SQL injection por isso passamos o '?' na query logo porque o metodo descriptografa isso.
	$prepare = $conexaoDB->prepare($delete);

	// 4 - Aqui usamos o bindParam que é um metodo da PDO, que evita que a query receba ataques para usa ele devemos passar os parametros da tabela que queremos defender e sinalizar a ordem deles como o primeiro parametro do metodo ou seja se tivesse 2 parametros usariamos dois metodos bind e assim por diante
	$prepare->bindParam(1, $_GET['id']);

	// 5 - Execução do SQL no DB
	$prepare->execute();

	// 6 - Contagem das linhas que foram afetadas na tabela
	echo $prepare->rowCount();

Utilização com insert:

	$conexaoDB = require 'connect.php';
	$insert = 'insert into produtos(descricao) values(?)';

	$prepare = $conexaoDB->prepare($insert);

	$prepare->bindParam(1, $_GET['descricao']);
	$prepare->execute();

	echo $prepare->rowCount();

Utilização com update:

	$conexaoDB = require 'connect.php';
	$update = 'update produtos set descricao = ? where id = ?';

	$prepare = $conexaoDB->prepare($update);

	$prepare->bindParam(1, $_GET['descricao']);
	$prepare->bindParam(2, $_GET['id']);

	$prepare->execute();

	echo $prepare->rowCount();

Utilização do select:

	$conexaoDB = require 'connect.php';

	$select = 'select * from produtos';

	echo "<h1> listagem produtos: </h1><hr>";

	foreach ($conexaoDB->query($select) as $key => $value) {
		echo '<br>'.'ID:'. $value['id'].'<br>'.'Descricao:'.$value['descricao'].'<hr>';
}

Após passar para essa estrutura fica facil para transformar tudo em OO.
