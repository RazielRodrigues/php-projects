<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - MAIN CONCEPTS AND C.R.U.D PROJECTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./projects-php/php-form/index.php">PHP FORM</a>
            <a class="navbar-brand" href="./projects-php/php-chat/index.php">PHP CHAT</a>
            <a class="navbar-brand" href="./projects-php/php-todo/index.php">PHP TODO</a>
            <a class="navbar-brand" href="./projects-php/php-oo/index.php">PHP ORIENTED OBJECT PT.1</a>
            <a class="navbar-brand" href="./projects-php/php-oo-2/index.php">PHP ORIENTED OBJECT PT.2</a>
        </div>
    </nav>
    <!-- <a href="./projects-php/php-search/index.php">PHP SEARCH ENGINE (UNDER CONSTRUCTION)</a> -->
    <!-- <h2><a href="./projects-php/innout/public/index.php">IN N OUT</a></h2> -->
    <!-- <a href="./projects-php/php-crud/index.php">CRUD</a> -->

    <div class="container m-5">
        <p class="lead">
        PHP (um acrônimo recursivo para "PHP: Hypertext Preprocessor", originalmente Personal Home Page) é uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento de aplicações presentes e atuantes no lado do servidor, capazes de gerar conteúdo dinâmico na World Wide Web.[3] Figura entre as primeiras linguagens passíveis de inserção em documentos HTML, dispensando em muitos casos o uso de arquivos externos para eventuais processamentos de dados.
        </p>
    </div>

    <div class="container">


        <p>&quot;A orientação a objetos é um paradigma de programação onde os softwares interpretao a vida real.&quot;</p>
        <h2 id="conceitos">Conceitos de orietanção a objetos em PHP</h2>
        <h2 id="classe">Classe</h2>
        <pre><code>-<span class="ruby"> uma classe é um molde.
</span>    -<span class="ruby"> <span class="hljs-symbol">ex:</span> Cliente é uma classe
</span>
-<span class="ruby"> uma classe contém atributos e metodos
</span>    -<span class="ruby"> atributo é tudo aquilo que define a classe
</span>        -<span class="ruby"> <span class="hljs-symbol">ex:</span> cada pessoa tem uma idade e nome (atributo)
</span>    -<span class="ruby"> metodo é tudo aquilo que a classe executa
</span>        -<span class="ruby"> <span class="hljs-symbol">ex:</span> imprimir nome da pessoa e a idade (metodo)</span>
</code></pre>
        <h2 id="objeto">Objeto</h2>
        <pre><code>- um objeto é a instancia <span class="hljs-keyword">de</span> uma classe

- para instanciar um objeto <span class="hljs-keyword">se</span> usa a palavra <span class="hljs-string">"new"</span>

- feito isso voce tem uma copia <span class="hljs-keyword">de</span> tudo <span class="hljs-keyword">que</span> tem dentro da Classe <span class="hljs-keyword">de</span> tal <span class="hljs-keyword">forma</span>
<span class="hljs-keyword">que</span> seja possivel alterar <span class="hljs-keyword">e</span> usar os atributos <span class="hljs-keyword">e</span> metodos da classe atraves desse
objeto a traves <span class="hljs-keyword">de</span> <span class="hljs-string">"-&gt;"</span>
</code></pre>
        <h2 id="encapsulamento">Encapsulamento</h2>
        <pre><code>-<span class="ruby"> o ato de encapsular é saber o que pode/precisa ser visto publicamente ou apenas interno
</span>
-<span class="ruby"> para definir isso usamos os modificadores de acesso
</span>    -<span class="ruby"> <span class="hljs-symbol">public:</span> pode ser acessado de todos os lugares <span class="hljs-keyword">do</span> codigo que instanciem a classe
</span>    -<span class="ruby"> <span class="hljs-symbol">protected:</span> pode ser acessado dentro da classe e classes de herança
</span>    -<span class="ruby"> <span class="hljs-symbol">private:</span> so pode ser acessado pela propria classe
</span>
-<span class="ruby"> atributos e funções recebem os modificadores</span>
</code></pre>
        <h2 id="heran-a">Herança</h2>
        <pre><code>- a herança é baseado em hierarquias é a pergunta é sempre <span class="hljs-string">"é um?"</span>

- a ideia é pensar em diversos metodos e atributos que possam ser comuns
entre uma hierarquia de objetos, pensando sempre em como eles vão se relacionar.
- por exemplo eu poderia ter essa classe


<span class="hljs-class"><span class="hljs-keyword">Class</span> <span class="hljs-title">Animal</span></span>{

    <span class="hljs-keyword">public</span> $respirar;
    <span class="hljs-keyword">public</span> $idade;

    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">respirar</span><span class="hljs-params">()</span>: <span class="hljs-title">int</span></span>{
        <span class="hljs-keyword">if</span>(<span class="hljs-keyword">$this</span>-&gt;idade &lt; <span class="hljs-number">120</span>&gt;){
            <span class="hljs-keyword">$this</span>-&gt;resipirar++;
            <span class="hljs-keyword">return</span> $respirar;
        }
    }

}

depois uma classe:

<span class="hljs-class"><span class="hljs-keyword">Class</span> <span class="hljs-title">Anfibio</span></span>{
    <span class="hljs-keyword">public</span> $aquatico;

    <span class="hljs-keyword">protected</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">check</span><span class="hljs-params">()</span>: <span class="hljs-title">string</span>
    </span>{
        <span class="hljs-keyword">if</span>(<span class="hljs-keyword">$this</span>-&gt;aquatico){
            <span class="hljs-keyword">return</span> <span class="hljs-string">'Anfibio'</span>;
        }
    }

}

- dessa forma anfibio pode herdar de animal mas animal nao herda de anfibio
pois nem todos os animais sao aquaticos.
</code></pre>
        <p><img class="img-fluid" src="images/heranca.png"></p>
        <p><small>Uma questão de herança bem logica aqui baseado em arvore, esse deve ser o pensamento.</small></p>
        <p><img class="img-fluid" src="images/heranca2.png"></p>
        <p><small>Nem sempre hierarquia esta ligado com Herança</small></p>
        <h2 id="polimorfismo">Polimorfismo</h2>
        <pre><code>-<span class="ruby"> php nao tem sobrecarga de metodo (metodos com o mesmo nome)
</span>    -<span class="ruby"> alternativa usar os parametros <span class="hljs-keyword">do</span> construtor com ...
</span>        -<span class="ruby"> function __construct($a, ...) {}
</span>
-<span class="ruby"> php usa tipos dinamicos e nao estaticos
</span>
-<span class="ruby"> polimorfismo é quando voce usa uma superclasse como <span class="hljs-string">"Animal"</span>
</span>em varios objetos, em linguagens tipadas é passado direto na tipagem
da variavel, em php é passado por uma função.
    -<span class="ruby"> <span class="hljs-symbol">java:</span>
</span>        -<span class="ruby"> int x = <span class="hljs-number">1</span>; <span class="hljs-regexp">//</span> tipagem
</span>        -<span class="ruby"> Animal c = new Anfibio(); <span class="hljs-regexp">//</span> instanciando um objeto anfibio que vai herdar tudo de Animal
</span>        -<span class="ruby"> c = new Mamifero(); <span class="hljs-regexp">//</span> Mudando pra mamifero pq mamifero também é animal
</span>    -<span class="ruby"> <span class="hljs-symbol">php:</span>
</span>        -<span class="ruby"> $x = <span class="hljs-number">1</span> ?? <span class="hljs-string">'dinamico'</span>; <span class="hljs-regexp">//</span> tipagem
</span>        -<span class="ruby"> function analisar(Animal $bichoEstranho) {...} /<span class="hljs-regexp">/ passando o parametro como função, 
</span></span>        assim pode usar como quiser o parametro dentro da função instanciando diversos objetos.
</code></pre>
        <h3 id="definindo-uma-classe-atributos-metodos-e-invoca-o">Definindo uma classe: atributos, metodos e invocação</h3>
        <pre><code><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Cliente</span> </span>{

    <span class="hljs-comment">// atributos da classe cliente, estão com visibilidade </span>
    <span class="hljs-comment">// public ou seja pode ser acessados de varios lugares</span>
    <span class="hljs-keyword">public</span> $nome = <span class="hljs-string">'Anonimo'</span>;
    <span class="hljs-keyword">public</span> $idade = <span class="hljs-number">18</span>;

    <span class="hljs-comment">// um metodo de interação da classe</span>
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">apresentar</span><span class="hljs-params">()</span></span>{
        <span class="hljs-keyword">return</span> <span class="hljs-string">"Nome: {$this-&gt;nome} Idade : {$this-&gt;idade}&lt;br&gt;"</span>;
    }


}

<span class="hljs-comment">// nova instancia da classe</span>
$c1 = <span class="hljs-keyword">new</span> Cliente;

<span class="hljs-comment">// setando os elementos da classe</span>
$c1-&gt;nome = <span class="hljs-string">'Raziel'</span>;
$c1-&gt;idade = <span class="hljs-number">22</span>;

<span class="hljs-comment">//chamando um metodo da classe</span>
<span class="hljs-keyword">echo</span> $c1-&gt;apresentar();
</code></pre>
        <hr>

        <h3 id="metodos-classe-constructor-e-destructor">Metodos classe: constructor e destructor</h3>
        <pre><code>- <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">__contruct</span><span class="hljs-params">($a,$b,...)</span></span>{}
    - chamada imediatamente com a nova instancia
    - caso o metodo constructor precise de parametros, 
    esses parametrros, deverão ser passados junto com o nee
    ex: $borracheiro = <span class="hljs-keyword">new</span> Pessoa(<span class="hljs-string">'Alexandre'</span>, <span class="hljs-number">20</span>);

- <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">__destruct</span><span class="hljs-params">()</span></span>{}
    - é invocada assim que o objeto é destruido
    ex: <span class="hljs-keyword">unset</span>($borracheiro) ou $borracheiro = <span class="hljs-keyword">null</span>

<span class="hljs-class"><span class="hljs-keyword">class</span>  <span class="hljs-title">Pessoa</span></span>{

    <span class="hljs-keyword">public</span> $nome;
    <span class="hljs-keyword">public</span> $idade;

    <span class="hljs-comment">// Função que é chamada assim que a instancia é criada</span>
    <span class="hljs-comment">// se no __construct os parametros forem obrigatorios,</span>
    <span class="hljs-comment">// será necessarios passar eles diretamente pra instancia</span>
    <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">__construct</span><span class="hljs-params">(string $vulgo, int $idade = <span class="hljs-number">18</span>)</span>
    </span>{
        <span class="hljs-comment">// Definindo as variaveis da classe com o parametro vindo da instancia</span>
        <span class="hljs-keyword">$this</span>-&gt;nome = $vulgo;
        <span class="hljs-keyword">$this</span>-&gt;idade = $idade;

    }

    <span class="hljs-comment">// Executado quando o objeto é destruido</span>
    <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">__destruct</span><span class="hljs-params">()</span>
    </span>{
        <span class="hljs-keyword">echo</span> <span class="hljs-string">'Liberado'</span>;
    }

    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">apresentar</span><span class="hljs-params">()</span>
    </span>{
        <span class="hljs-keyword">return</span> <span class="hljs-string">"Nome: {$this-&gt;nome} Idade : {$this-&gt;idade}&lt;br&gt;"</span>;
    }

}

$borracheiro = <span class="hljs-keyword">new</span> Pessoa(<span class="hljs-string">"Carlos oliveira"</span>, <span class="hljs-number">20</span>);
<span class="hljs-keyword">echo</span> $borracheiro-&gt;apresentar();
<span class="hljs-keyword">unset</span>($borracheiro);
</code></pre>
        <hr>

        <h3 id="static">Static</h3>
        <pre><code>-<span class="ruby"> Variaveis estaticas são como padrões default da classe
</span>    -<span class="ruby"> geralmente usado com constantes, ou varaveis que não vão mudar durante a criação <span class="hljs-keyword">do</span> objeto
</span>
-<span class="ruby"> para acessar variaveis ou metodos estaticos não é necessario instanciar um objeto
</span>-<span class="ruby"> para definir que é estatico se <span class="hljs-symbol">usa:</span> static $var / static function a(){}
</span>-<span class="ruby"> não se acessa com o $this se acessa com self::$static
</span>    -<span class="ruby"> echo <span class="hljs-string">"nao estatica = {$this-&gt;naoStatic}&lt;br&gt;"</span>;
</span>    -<span class="ruby"> echo <span class="hljs-string">"estatica = "</span>.self::$static.<span class="hljs-string">"&lt;br&gt;"</span>;
</span>
-<span class="ruby"> Dentro de uma função static so se consegue acessar membros estaticos
</span>
-<span class="ruby"> Para acessar membros <span class="hljs-symbol">estaticos:</span>
</span>    -<span class="ruby"> echo A::$static , <span class="hljs-string">'&lt;hr&gt;'</span>; <span class="hljs-regexp">//</span>? Acesar diretamente pela classe
</span>    -<span class="ruby"> A::mostrarStaticA(); <span class="hljs-regexp">//</span>? Acesar diretamente pela classe
</span>-<span class="ruby"> Lembrando que o ideal é acessar mebros de classe com essa notação uma vez que deixa mais claro
</span>    -<span class="ruby"> $objA-&gt;mostrarStaticA(); da pra acessar instanciando um objeto e fazendo dessa forma, mas não é ideal.
</span>
-<span class="ruby"> Logo que mebros staticos fazem parte da classe e nao <span class="hljs-keyword">do</span> objeto,
</span>-<span class="ruby"> deixando de livre acesso pra fora <span class="hljs-keyword">do</span> codigo, claro depende <span class="hljs-keyword">do</span> nivel de acesso
</span>-<span class="ruby"> Tambem é possivel alterar os valores dos membros da classe.
</span>    -<span class="ruby"> A::$static = <span class="hljs-string">'&lt;hr&gt;valor alterado do membro da classe '</span>;
</span>    -<span class="ruby"> echo A::$static;</span>
</code></pre>
        <h3 id="interface">interface</h3>
        <pre><code>- Uma <span class="hljs-class"><span class="hljs-keyword">interface</span> é <span class="hljs-title">responsavel</span> <span class="hljs-title">por</span> <span class="hljs-title">definir</span> <span class="hljs-title">de</span> <span class="hljs-title">forma</span> <span class="hljs-title">obrigatoria</span> <span class="hljs-title">metodos</span> <span class="hljs-title">que</span> <span class="hljs-title">uma</span> <span class="hljs-title">classe</span> <span class="hljs-title">deve</span> <span class="hljs-title">ter</span>.

- <span class="hljs-title">Na</span> <span class="hljs-title">logica</span> <span class="hljs-title">de</span> <span class="hljs-title">interface</span> é <span class="hljs-title">possivel</span>:
    - <span class="hljs-title">Implementar</span> <span class="hljs-title">diversas</span> <span class="hljs-title">interfaces</span> <span class="hljs-title">em</span> <span class="hljs-title">uma</span> <span class="hljs-title">classe</span>
    - <span class="hljs-title">uma</span> <span class="hljs-title">interface</span> <span class="hljs-title">pode</span> <span class="hljs-title">herdar</span> <span class="hljs-title">de</span> <span class="hljs-title">outra</span> <span class="hljs-title">interface</span>
    - <span class="hljs-title">A</span> <span class="hljs-title">interface</span> é <span class="hljs-title">uma</span> <span class="hljs-title">forma</span> <span class="hljs-title">de</span> <span class="hljs-title">definir</span> <span class="hljs-title">como</span> <span class="hljs-title">a</span> <span class="hljs-title">classe</span> <span class="hljs-title">deve</span> <span class="hljs-title">ser</span> <span class="hljs-title">moldada</span>.
    - <span class="hljs-title">Uma</span> <span class="hljs-title">classe</span> <span class="hljs-title">que</span> <span class="hljs-title">respeita</span> <span class="hljs-title">a</span> <span class="hljs-title">sua</span> <span class="hljs-title">interface</span> <span class="hljs-title">pode</span> <span class="hljs-title">ser</span> <span class="hljs-title">chamada</span> <span class="hljs-title">de</span> <span class="hljs-title">classe</span> <span class="hljs-title">concreta</span>.


        <span class="hljs-title">interface</span> <span class="hljs-title">Animal</span></span>{
        <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">respirar</span><span class="hljs-params">()</span></span>;
        }

        <span class="hljs-class"><span class="hljs-keyword">interface</span> <span class="hljs-title">Mamifero</span></span>{
            <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">mamar</span><span class="hljs-params">()</span></span>;
        }

        <span class="hljs-class"><span class="hljs-keyword">interface</span> <span class="hljs-title">Felino</span></span>{
            <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">correr</span><span class="hljs-params">()</span></span>;
        }

        <span class="hljs-comment">//! Um canino é um animal mamifero então faz sentido herdar essas interfaces</span>
        <span class="hljs-class"><span class="hljs-keyword">interface</span> <span class="hljs-title">Canino</span> <span class="hljs-keyword">extends</span> <span class="hljs-title">Animal</span>, <span class="hljs-title">Mamifero</span></span>{
            <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">latir</span><span class="hljs-params">()</span> : string</span>;
        }


- Agora dentro da classe cachorro será obrigatorio
- implmentar os metodos das interfaces: Canino, Animal e Mamifero.
- caso os metodos nao sejam implementados, vai gerar um erro.

        class Cachorro <span class="hljs-keyword">implements</span> Canino{
            <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">respirar</span><span class="hljs-params">()</span></span>{
                <span class="hljs-keyword">return</span> <span class="hljs-string">'irei usar oxigenio'</span>;
            }

            <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">latir</span><span class="hljs-params">()</span>: string</span>{
                <span class="hljs-keyword">return</span> <span class="hljs-string">'AU AU'</span>;
            }

            <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">mamar</span><span class="hljs-params">()</span></span>{
                <span class="hljs-keyword">return</span> <span class="hljs-string">'tomar leite'</span>;
            }

            <span class="hljs-comment">//! Essa função em termos de nome é o mesmo nome da interface de felio</span>
            <span class="hljs-comment">//! Mas como eu nao implementei essa interface nao vai gerar erro nem se eu apagar essa função</span>
            <span class="hljs-comment">//! ou deixar ela com o mesmo nome da outra</span>
            <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">correr</span><span class="hljs-params">()</span></span>{
                <span class="hljs-keyword">return</span> <span class="hljs-string">'vruun'</span>;
            }
        }
</code></pre>
        <h3 id="classes-abstratas">Classes abstratas</h3>
        <pre><code>-<span class="ruby"> Uma classe abstrata nao pode ser instanciada
</span>-<span class="ruby"> Uma classe abstrata serve basicmaente para ser herdada, essa seria uma <span class="hljs-string">"Super classe asbtrata"</span>
</span>-<span class="ruby"> É possivel alterar a visibilidade de uma função de classe abstrata sempre subir o nivel protected &gt; public
</span>-<span class="ruby"> Pode ser definido apenas o corpo da função e seus parametros, tipagem, visibilidade
</span>-<span class="ruby"> Classes abstratas podem ter herança
</span>
-<span class="ruby"> Classes concretas podem herdar classes abstratas, sempre relação de um pra um.
</span>-<span class="ruby"> Quando voce implementa uma classe abstrata dentro de uma concreta voce é obrigado
</span>-<span class="ruby"> A definir os metodos pré existentes nas classes abstratas herdadas senao da erro.
</span>
-<span class="ruby"> Caso eu queira é possivel alterar o nivel de visibilidade como havia dito
</span>-<span class="ruby"> Se executar com public da certo.
</span>-<span class="ruby"> Mas nao é possivel abaixar o nivel de acesso.</span>
</code></pre>
        <h3 id="modificador-final">Modificador Final</h3>
        <pre><code>- Uma classe/metodo com o modificador final nao pode ser herdada/alterado
serve principalmente para evitar <span class="hljs-keyword">que</span> metodos <span class="hljs-keyword">ou</span> classes sejam alteradas
por regras <span class="hljs-keyword">de</span> negocios.

- Toda vez <span class="hljs-keyword">que</span> alguem tentar alterar esse membro com final será notificado pelo
proprio codigo <span class="hljs-keyword">de</span> <span class="hljs-keyword">que</span> <span class="hljs-keyword">n</span>ão é possivel alterar, dai causa a pergunta:
<span class="hljs-string">"Sera que é melhro alterar o metodo ou a classe original ?"</span>

- Evita bastante complicação em trechos <span class="hljs-keyword">de</span> codigo <span class="hljs-keyword">que</span> <span class="hljs-keyword">n</span>ão devem ser alterados.
</code></pre>
        <h3 id="traits">Traits</h3>
        <pre><code>- com traits é possivel criar funções <span class="hljs-keyword">e</span> atributos <span class="hljs-keyword">e</span> usar dentro <span class="hljs-keyword">de</span> uma classe sem extender nada
- <span class="hljs-keyword">de</span> <span class="hljs-keyword">forma</span> <span class="hljs-keyword">que</span> seja mais flexivel a sua utilização pois nao <span class="hljs-keyword">se</span> amarra <span class="hljs-keyword">no</span> conceito <span class="hljs-keyword">de</span> hierarquia
- para chamar <span class="hljs-keyword">as</span> traits <span class="hljs-keyword">se</span> usa a palavra <span class="hljs-string">"use"</span>
- tambem é possivel ter modificadores <span class="hljs-keyword">de</span> acesso dentro <span class="hljs-keyword">de</span> traits: public, protected <span class="hljs-keyword">e</span> private.
- é muito bom pra reusar codigo

- voce nao consegue acessar os metodos das traits diretamente, apenas dentro <span class="hljs-keyword">de</span> uma classe
<span class="hljs-keyword">ou</span> apartir <span class="hljs-keyword">de</span> um objeto <span class="hljs-keyword">de</span> instancia da classe.
    - <span class="hljs-keyword">ex</span>: var_dump(validacao-&gt;validarString(' ')); <span class="hljs-comment">// gera erro</span>
    - <span class="hljs-keyword">ex</span> (certo): 
</code></pre>
        <h3 id="metodos-magicos">Metodos magicos</h3>
        <pre><code>-<span class="ruby"> metodos magicos não uma coisa padrão então deve pensar bem antes de usar
</span>
-<span class="ruby"> __construct
</span>-<span class="ruby"> __destruct
</span>
-<span class="ruby"> __toString
</span>    -<span class="ruby"> Esse metodo transforma o contexto <span class="hljs-keyword">do</span> objeto em string de forma que,
</span>    -<span class="ruby"> seja possivel renderizar o objeto apontando para $this
</span>    -<span class="ruby"> Transforma os atributos em string
</span>
-<span class="ruby"> __get
</span>    -<span class="ruby"> o metodo get é ativado quando nao existe o atributo na classe
</span>    -<span class="ruby"> e mesmo assim voce tenta acessar. ou seja ali embaixo eu tentei
</span>    -<span class="ruby"> acessar nome completo e nao existe esse atributo declarado.
</span>    -<span class="ruby"> agora o que vai acontecer e que pro metodo __get será enviado essa informaçao
</span>    -<span class="ruby"> ou seja <span class="hljs-string">"nomeCompleto"</span>.
</span>    -<span class="ruby"> Com isso é possivel manipular essas requisições de atributos que não existem.
</span>
-<span class="ruby"> __set
</span>    -<span class="ruby"> O metodo __set cria novos atributos quando eles não existem de forma que os parametros são
</span>    -<span class="ruby"> atr = nome <span class="hljs-keyword">do</span> atributo que não existe
</span>    -<span class="ruby"> val = valor dado a esse atributo
</span>
-<span class="ruby"> __call
</span>    -<span class="ruby"> __call é chamado quando tenta executar um metodo que não existe
</span>    -<span class="ruby"> caso voce passe parametros para esse metodo os parametros
</span>    -<span class="ruby"> vão se tornar um array dentro dessa função.
</span>    -<span class="ruby"> Tem a mesma ideia de manipular dos outros metodos</span>
</code></pre>
        <h3 id="polimorfismo">Polimorfismo</h3>
        <pre><code>- O segredo está em qual parametro voce vai passar para a <span class="hljs-function"><span class="hljs-keyword">fun</span>ção</span>
- como eu passei Comida qualquer classe que tenha herança de Comida
- será aceita pela <span class="hljs-function"><span class="hljs-keyword">fun</span>ção.</span>
- Ou seja serve para amarrar os tipos qur vão entrar na <span class="hljs-function"><span class="hljs-keyword">fun</span>ção</span>
- Mas o PHP já é uma linguagens que trabalha assim naturalmente.

<span class="hljs-keyword">public</span> function comer(Comida $comida){
    $<span class="hljs-keyword">this</span>-&gt;peso += $comida-&gt;peso;
}
</code></pre>
        <h2 id="php-orienta-o-a-objetos">PHP: Orientação a objetos</h2>
        <p>Orientação a objetos se trata de simular a vida real em programação, tratando literalmente como um objeto o código.</p>
        <h2 id="classes-modificadores-e-fun-es">Classes, modificadores e funções</h2>
        <p>A palavra reservada &quot;class&quot; no PHP cria uma classe, um objeto é uma instancia de uma classe, uma classe possui atributos e por sua vez metodos que definem o que de fato aquela classe faz e possui. Então um objeto serve para poder definir e usar os metodos que vem da classe por exemplo: Pessoa é uma classe, toda pessoa tem a propriedade nome e a função de respirar, entretanto nem toda pessoa tem o mesmo nome e nem toda pessoa respira na mesma velocidade essas &quot;particularidades&quot; são definidas no objeto.</p>
        <pre><code><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Pessoa</span>{</span>
    $NomePessoa;
}
</code></pre>
        <p>Os objetos são instancias de uma classe para instanciar um objeto é usado a palavra &quot;new&quot; ou seja você basicamente esta dizendo que uma váriavel, tem todas as propriedades e todas os metodos de uma classe, sendo possível usar os metodos da classe e também definir as suas propriedades para cada novo objeto que voce cria por exemplo: Eu Raziel sou uma pessoa então eu Raziel estendo a classe pessoa, o Raziel é um objeto da classe pessoa. em termos de código é igual a:</p>
        <pre><code><span class="hljs-built_in">$raziel</span> = <span class="hljs-keyword">new</span> Pessoa()<span class="hljs-comment">;</span>
</code></pre>
        <p>Quandos se declara atributos e metodos dentro de classe é necessário declarar os modificadores de acesso que é o que controla a visibilidade das propriedades e metodos dessa classe. Para isso temos algumas palavras reservadas que definem isso são elas:</p>
        <pre><code><span class="hljs-keyword">public</span> - com o <span class="hljs-keyword">public</span> é possível acessar propriedades e metodos da classe dentro ou fora dela.
<span class="hljs-keyword">private</span> - com o <span class="hljs-keyword">private</span> deixa tudo fechado ou seja só pode ser acessado dentro da classe.
<span class="hljs-keyword">protected</span> - O <span class="hljs-keyword">protected</span> é a mesma coisa que o <span class="hljs-keyword">private</span>, a execção e que metodos e atributos com esse modificador conseguem ser acessados de classes que herdam da classe pai. Conceito de herança.
</code></pre>
        <p>Para acessar uma propriedade de um objeto basta usar:</p>
        <pre><code><span class="hljs-variable">$raziel</span>-&gt;NomePessoa;
</code></pre>
        <p>(Pensando que estamos acessando com um modificador publico, e chamando a váriavel de outro arquivo)</p>
        <p>E quando usar o modificador protected?</p>
        <p>Pense no caso do saldo, se você tem um saldo de 2000 reais e ai voce deixa ele publico seria possivel alterar de 2000 para 0 ou seja os modificadores são importantes para esse tipo de controle.</p>
        <h3 id="conceito-de-metodos-dentro-de-classes">Conceito de metodos dentro de classes</h3>
        <p>Os metodos servem para adicionar ações dentro de uma classe eles também possuem os modificadores de acesso, para construir um metodo é a mesma sintaxe, entretando com o modificador na frente:</p>
        <pre><code><span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">falarOla</span><span class="hljs-params">()</span></span>{
    <span class="hljs-keyword">return</span> <span class="hljs-string">'olá'</span>;
}
</code></pre>
        <p>Para acessar um metodo de uma classe basta usar:</p>
        <pre><code><span class="hljs-keyword">echo</span> $raziel-&gt;falarOla();
</code></pre>
        <p>e caso fosse com parametros seria:</p>
        <pre><code><span class="hljs-keyword">echo</span> $raziel-&gt;falarOla(<span class="hljs-string">'ola, tudo bem?'</span>);
</code></pre>
        <p>O metodo construtor ele é sempre executado quando você instancia um novo objeto de uma classe, em código fica:</p>
        <pre><code><span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">__construct</span><span class="hljs-params">()</span></span>{
    <span class="hljs-keyword">echo</span> <span class="hljs-string">'eu sou o construtor'</span>;
}
</code></pre>
        <p>Em uma classe não se define as váriaveis, pois, o objetivo da orientação objeto é criar coisas dinamicas, e para fazer isso se usa o metodo construtor, para isso se deve passar como parametro as propriedades que queremos setar. É importante ressaltar que quando você está trabalhando com orientação a objetos, a gente nao deixa as propriedades serem trocadas externamente, para isso se deve criar metodos que alterem essas propriedades.</p>
        <p>E como fazer isso?</p>
        <p>Imagine o cenario de um banco, onde estamos trabalhando com saldo, quais são as formas de alterar o saldo de uma conta? ou com deposito ou com saque, então para isso se deve criar dois metodos que manipulem essa propriedade.</p>
        <h2 id="datetime-manipula-o-de-dados-datas-e-horas">Datetime, manipulação de dados, datas e horas</h2>
        <p>A classe DateTime serve para manipular datas e formatalas dentro dos padrões necessarios caso queira visualizar as especificações basta olhar na documentação do PHP:</p>
        <p><a href="https://www.php.net/manual/pt_BR/class.datetime.php">https://www.php.net/manual/pt_BR/class.datetime.php</a></p>
        <p>Para instanciar uma novo objeto dessa classe se utiliza:</p>
        <pre><code><span class="hljs-keyword">new</span> <span class="hljs-type"></span>$data = <span class="hljs-keyword">new</span> <span class="hljs-type">DateTime</span>();
</code></pre>
        <p>Com esse metodo ja temos acesso a data e hora em que roda o PHP.</p>
        <p>Para formatar a data usamos o metodo format() com os devidos dados de formatação:</p>
        <pre><code><span class="hljs-title">echo</span> $<span class="hljs-class"><span class="hljs-keyword">data</span>-&gt;format('<span class="hljs-title">d</span>-<span class="hljs-title">m</span>-<span class="hljs-title">y'</span>);</span>
<span class="hljs-title">echo</span> $<span class="hljs-class"><span class="hljs-keyword">data</span>-&gt;format('<span class="hljs-type">D</span>-<span class="hljs-type">M</span>-<span class="hljs-type">Y</span>');</span>
</code></pre>
        <p>Temos também a classe DateInterval essa classe tem metodos de intervalo de tempos, por exemplo se quisermos adicionar ou subtrair intervalos de tempo de datas basta usarmos:</p>
        <pre><code>$intervalo = <span class="hljs-keyword">new</span> <span class="hljs-type">DateInterval</span>(<span class="hljs-string">'PT5M'</span>);
</code></pre>
        <p>Os parametros de quantidade de intervalo de tempo que queremos adcionar são passados diretamente no metodo construtor da classe, existem diversos parametros que podem ser consultados aqui:</p>
        <p><a href="https://www.php.net/manual/pt_BR/class.dateinterval.php">https://www.php.net/manual/pt_BR/class.dateinterval.php</a></p>
        <p>No exemplo acima estamos querendo colocar um intervalo de 5 minutos na data esse intervalo pode ser adicionado ou subtraido da data através dos metodos:</p>
        <pre><code>add<span class="hljs-comment">()</span> e <span class="hljs-keyword">sub</span><span class="hljs-comment">()</span>
</code></pre>
        <p>Ficando assim:</p>
        <pre><code>$data = new DateTime();
$intervalo = new DateInterval(<span class="hljs-string">'PT5M'</span>);

$data-&gt;add($intervalo);
var_dump($data);

$data-&gt;<span class="hljs-function"><span class="hljs-keyword">sub</span></span>($intervalo);
var_dump($data);
</code></pre>
        <h2 id="exce-es-em-php">Exceções em PHP</h2>
        <p>Quando a aplicação apresenta um comportamento inesperado nos trabalhamos com exceções, ela intemrrompe o funcionamento do código e nós podemos coletar diversos dados com as exceções e para isso usamos a classe Exception que pode ser vista aqui:</p>
        <p><a href="https://www.php.net/manual/pt_BR/class.exception">https://www.php.net/manual/pt_BR/class.exception</a></p>
        <p>Para lançar uma essa usamos a sua instaciação e passamos a mensagem que desejamos em seu construtor ficando assim:</p>
        <pre><code><span class="hljs-keyword">throw</span> <span class="hljs-keyword">new</span> <span class="hljs-type">Exception</span>(<span class="hljs-string">"Error Processing Request"</span>);
</code></pre>
        <p>Sempre que se usa uma exceção o código para de funcionar e lança um fatal error quando a exceção é usada sem captura (try e catch), exceções também são usadas para evitar validações com condicionais, como no exemplo abaixo:</p>
        <pre><code>//A função recebe o<span class="hljs-built_in"> array </span>usuario como parametro, em seguida faz uma verificação para saber se algum dos indices desse<span class="hljs-built_in"> array </span>estão vazios, caso estejam vai lançar a exceção de campos nao preenchidos. Senão retorna verdade e continua executando o código

function validarUsuario(array $usuario)
{
   <span class="hljs-built_in"> if </span>(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
       <span class="hljs-built_in"> throw </span>new Exception(<span class="hljs-string">"Campos obrigatorios não foram preenchidos!"</span>);
    }
   <span class="hljs-built_in"> return </span>true;
}

//Aqui declaramos o<span class="hljs-built_in"> array </span>e não passamos o parametro nome, justamente para forçar o erro

$usuario = [
'codigo' =&gt; 1,
'nome' =&gt; '',
'idade' =&gt; 43,
];

//Chamando a função validarUsuario e passando o<span class="hljs-built_in"> array </span>usuario como parametro para a função

validarUsuario($usuario);
</code></pre>
        <h3 id="capturando-exce-es-com-try-e-catch">Capturando exceções com Try e Catch</h3>
        <p>Como o próprio nome já diz Try vem de tentar ou seja irá tentar executar uma coisa e se der errado o catch vai pegar o motivo que fez isso dar errado então adicionamos o seguinte bloco de código no codígo de cima, buscando melhorar a sua perfomance:</p>
        <pre><code><span class="hljs-comment">//Aqui o try verifica se a função retorna "true"</span>

$status = <span class="hljs-keyword">false</span>; <span class="hljs-comment">//usada no finally</span>

<span class="hljs-keyword">try</span>{
    validarUsuario($usuario);

<span class="hljs-comment">//Aqui o catch pega a exceção que foi lançada e a mensagem relacionada a ela com o metodo getMessage() da mesma forma que usamos o metodo getMessage() podemos usar outros metodos dessa classe que auxiliem na hora de mostrar o porque dessa exceção, entretanto mesmo lançando a exceção o codigo continua rodando, e para que nao continue rodando é importante adicionar algum metodo de parada de codigo como o die(), return false, break etc</span>

} <span class="hljs-keyword">catch</span> (<span class="hljs-keyword">Exception</span> $e) {
    <span class="hljs-keyword">echo</span> $e-&gt;getMessage();

<span class="hljs-comment">//O bloco finally executa o finalmente da situação e serve para identificar o fluxo e como o mesmo está funcionando, para saber o status das exceções usamos uma variavel $status que armazena primeiramente como false, caso os erros sejam lançados, armazenamos o estado nessa variavel e através da técnica "cast" trasnformamos essa variavel em int para retornar 0 e 1 invés de false ou true, isso é muito bom para ir controlando o fluxo e verificando se esta tudo correndo bem.</span>

}<span class="hljs-keyword">finally</span>{
    <span class="hljs-keyword">echo</span> <span class="hljs-string">"&lt;br&gt;&lt;br&gt;Status da operação = "</span>.(int)$status;
    <span class="hljs-keyword">die</span>();
}
</code></pre>
        <h2 id="banco-de-dados-pdo-com-php">Banco de dados PDO com PHP</h2>
        <p>PDO é uma abstração de como usar banco de dados em orientação a objetos utilizando data objects:</p>
        <p><a href="https://www.php.net/manual/pt_BR/book.pdo.php">https://www.php.net/manual/pt_BR/book.pdo.php</a></p>
        <p>Com o PDO nós não precisamos saber o que de fato está acontecendo no banco de dados, basta utilizar os metodos da classe PDO que o PHP faz o restante independente do banco de dados que vamos usar, a classe PDO auxilia a gente nisso, para lidar com banco de dados e suas operações básicas apelidadas de &quot;CRUD&quot; primeiro precisamos conectar com o banco de dados como no exemplo:</p>
        <pre><code><span class="hljs-comment">//Declarando a variavel que vai receber a classe PDO</span>
$conexaoDB = <span class="hljs-keyword">null</span>;

<span class="hljs-comment">//Try para tentar a conexão</span>
<span class="hljs-keyword">try</span> {

    <span class="hljs-comment">//Instanciando um novo objeto da classe PDO o primeiro parametro é o nome do DB que esta sendo usado, em seguida o HOST (Número de IP) em que se encontra. O Segundo parametro o nome da base de dados, terceiro o user dela, e depois a senha do DB.</span>

    $conexaoDB = <span class="hljs-keyword">new</span> PDO(<span class="hljs-string">'mysql:host=localhost;dbname=pdo'</span> , <span class="hljs-string">'root'</span> , <span class="hljs-string">''</span>);

} <span class="hljs-keyword">catch</span> (<span class="hljs-keyword">Exception</span> $e) {

    <span class="hljs-comment">//Catch para caso haja algum erro em seguida o die</span>
    <span class="hljs-keyword">echo</span> $e-&gt;getMessage();

    <span class="hljs-keyword">die</span>();
}

<span class="hljs-comment">//Teste da variavel</span>
var_dump($conexaoDB);

<span class="hljs-comment">//Return dos dados da conexão para ser usado depois</span>
<span class="hljs-keyword">return</span> $conexaoDB;
</code></pre>
        <h3 id="opera-es-de-crud-com-pdo-">Operações de CRUD com PDO:</h3>
        <p>Após a conexão, nós podemos executar as operações do banco de dados para isso vamos usar uma sequencia de metodos:</p>
        <p>Utilização com delete:</p>
        <pre><code>// 1 - Salvar o arquivo de conexão dentro de uma variavel
$conexaoDB = require 'connect.php';

// 2 - Criar o SQL que deseja ser efetuado (<span class="hljs-keyword">insert</span>, <span class="hljs-keyword">update</span>, <span class="hljs-keyword">delete</span>) <span class="hljs-keyword">no</span> parametro de <span class="hljs-keyword">values</span> nós usamos o <span class="hljs-string">'?'</span> que siginifica um misterio de valor que mais a frente será decodificado pelo metodo <span class="hljs-keyword">prepare</span>
$<span class="hljs-keyword">delete</span> = <span class="hljs-string">'delete from produtos where id = ?'</span>;

// 3 - Aqui a gente instancia o metodo <span class="hljs-keyword">prepare</span> da classe PDO através <span class="hljs-keyword">do</span> objeto conexãoDB (que está pronto para ser usado <span class="hljs-keyword">no</span> arquivo connect.db) o metodo <span class="hljs-keyword">prepare</span> serve para <span class="hljs-string">"preparar o SQL"</span> da <span class="hljs-keyword">query</span> que queremos executar a fim de evitar que ocorram <span class="hljs-keyword">SQL</span> injection por isso passamos o <span class="hljs-string">'?'</span> na <span class="hljs-keyword">query</span> logo porque o metodo descriptografa isso.
$<span class="hljs-keyword">prepare</span> = $conexaoDB-&gt;<span class="hljs-keyword">prepare</span>($<span class="hljs-keyword">delete</span>);

// 4 - Aqui usamos o bindParam que é um metodo da PDO, que evita que a query receba ataques para usa ele devemos passar os parametros da tabela que queremos defender e sinalizar a ordem deles como o primeiro parametro <span class="hljs-keyword">do</span> metodo ou seja se tivesse <span class="hljs-number">2</span> parametros usariamos dois metodos bind e assim por diante
$<span class="hljs-keyword">prepare</span>-&gt;bindParam(<span class="hljs-number">1</span>, $_GET[<span class="hljs-string">'id'</span>]);

// 5 - Execução <span class="hljs-keyword">do</span> <span class="hljs-keyword">SQL</span> <span class="hljs-keyword">no</span> DB
$<span class="hljs-keyword">prepare</span>-&gt;<span class="hljs-keyword">execute</span>();

// 6 - Contagem das linhas que foram afetadas na tabela
echo $<span class="hljs-keyword">prepare</span>-&gt;rowCount();
</code></pre>
        <p>Utilização com insert:</p>
        <pre><code>$conexaoDB = <span class="hljs-keyword">require</span> <span class="hljs-string">'connect.php'</span>;
$insert = <span class="hljs-string">'insert into produtos(descricao) values(?)'</span>;

$prepare = $conexaoDB-&gt;prepare($insert);

$prepare-&gt;bindParam(<span class="hljs-number">1</span>, $_GET[<span class="hljs-string">'descricao'</span>]);
$prepare-&gt;execute();

<span class="hljs-keyword">echo</span> $prepare-&gt;rowCount();
</code></pre>
        <p>Utilização com update:</p>
        <pre><code>$conexaoDB = <span class="hljs-keyword">require</span> <span class="hljs-string">'connect.php'</span>;
$update = <span class="hljs-string">'update produtos set descricao = ? where id = ?'</span>;

$prepare = $conexaoDB-&gt;prepare($update);

$prepare-&gt;bindParam(<span class="hljs-number">1</span>, $_GET[<span class="hljs-string">'descricao'</span>]);
$prepare-&gt;bindParam(<span class="hljs-number">2</span>, $_GET[<span class="hljs-string">'id'</span>]);

$prepare-&gt;execute();

<span class="hljs-keyword">echo</span> $prepare-&gt;rowCount();
</code></pre>
        <p>Utilização do select:</p>
        <pre><code>$conexaoDB = <span class="hljs-keyword">require</span> <span class="hljs-string">'connect.php'</span>;

$select = <span class="hljs-string">'select * from produtos'</span>;

<span class="hljs-keyword">echo</span> <span class="hljs-string">"&lt;h2&gt; listagem produtos: &lt;/h2&gt;&lt;hr&gt;"</span>;

<span class="hljs-keyword">foreach</span> ($conexaoDB-&gt;query($select) <span class="hljs-keyword">as</span> $key =&gt; $value) {
    <span class="hljs-keyword">echo</span> <span class="hljs-string">'&lt;br&gt;'</span>.<span class="hljs-string">'ID:'</span>. $value[<span class="hljs-string">'id'</span>].<span class="hljs-string">'&lt;br&gt;'</span>.<span class="hljs-string">'Descricao:'</span>.$value[<span class="hljs-string">'descricao'</span>].<span class="hljs-string">'&lt;hr&gt;'</span>;
</code></pre>
        <p>}</p>
        <p>Após passar para essa estrutura fica facil para transformar tudo em OO.</p>


        <p><img class="img-fluid" src="UC-01a02f43-a465-4d80-9d6b-904360fa9ec9.jpg"></p>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>