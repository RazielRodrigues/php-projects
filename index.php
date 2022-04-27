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

    <div class=" m-5">
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="background.png" alt="" srcset="">  
            </div>
            <div class="col-md-6">
                <p class="lead">
                        PHP (a recursive acronym for "PH Preprocessor", P Home Page) is an original interpreted language, it can only be used on the server side, it can just be content that exists on the World Wide Web. [3] Figures enter as original document programming languages, dispensing in many cases of using external files for processing capable of data processing.
                </p>
            </div>
        </div>
    </div>

    <div class="container shadow-lg p-3 mb-5 bg-body rounded">
        <h2 id="concepts">Concepts</h2>
        <h2 id="class">Class</h2>
        <pre><code>-<span class="ruby"> a <span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">is</span> <span class="hljs-title">a</span> <span class="hljs-title">template</span>.</span>
</span>    -<span class="ruby"> <span class="hljs-symbol">ex:</span> Customer is a <span class="hljs-class"><span class="hljs-keyword">class</span></span>
</span>
-<span class="ruby"> a <span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">contains</span> <span class="hljs-title">attributes</span> <span class="hljs-title">and</span> <span class="hljs-title">methods</span></span>
</span>    -<span class="ruby"> attribute is everything that defines the <span class="hljs-class"><span class="hljs-keyword">class</span></span>
</span>        -<span class="ruby"> <span class="hljs-symbol">ex:</span> each person has an age <span class="hljs-keyword">and</span> name (attribute)
</span>    -<span class="ruby"> method is everything the <span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">executes</span></span>
</span>        -<span class="ruby"> <span class="hljs-symbol">ex:</span> print person<span class="hljs-string">'s name and age (method)</span></span>
</code></pre>
        <h2 id="object">Object</h2>
        <pre><code>- <span class="hljs-keyword">an</span> object is <span class="hljs-keyword">an</span> instance <span class="hljs-keyword">of</span> <span class="hljs-keyword">a</span> class

- <span class="hljs-built_in">to</span> instantiate <span class="hljs-keyword">an</span> object, use <span class="hljs-keyword">the</span> <span class="hljs-built_in">word</span> <span class="hljs-string">"new"</span>

- done that you have <span class="hljs-keyword">a</span> copy <span class="hljs-keyword">of</span> everything inside <span class="hljs-keyword">the</span> Class <span class="hljs-keyword">in</span> such <span class="hljs-keyword">a</span> way
that <span class="hljs-keyword">it</span> is possible <span class="hljs-built_in">to</span> change <span class="hljs-keyword">and</span> use <span class="hljs-keyword">the</span> attributes <span class="hljs-keyword">and</span> methods <span class="hljs-keyword">of</span> <span class="hljs-keyword">the</span> class through this
object <span class="hljs-keyword">with</span> <span class="hljs-string">"-&gt;"</span>
</code></pre>
        <h2 id="encapsulation">encapsulation</h2>
        <pre><code>-<span class="ruby"> the act of encapsulating is knowing what can/needs to be seen publicly <span class="hljs-keyword">or</span> just internally
</span>
-<span class="ruby"> to set this we use access modifiers
</span>    -<span class="ruby"> <span class="hljs-symbol">public:</span> can be accessed from anywhere <span class="hljs-keyword">in</span> the code that instantiates the <span class="hljs-class"><span class="hljs-keyword">class</span></span>
</span>    -<span class="ruby"> <span class="hljs-symbol">protected:</span> can be accessed within <span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">and</span> <span class="hljs-title">inheritance</span> <span class="hljs-title">classes</span></span>
</span>    -<span class="ruby"> <span class="hljs-symbol">private:</span> can only be accessed by the <span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">itself</span></span>
</span>
-<span class="ruby"> attributes <span class="hljs-keyword">and</span> functions receive the modifiers</span>
</code></pre>
        <h2 id="heritage">Heritage</h2>
        <pre><code>- inheritance <span class="hljs-keyword">is</span> based on hierarchies the question <span class="hljs-keyword">is</span> always <span class="hljs-string">"is it one?"</span>

- the idea <span class="hljs-keyword">is</span> to think of several methods and attributes that may be common
between a hierarchy of objects, always thinking about how they will relate.
- <span class="hljs-keyword">for</span> example I could have <span class="hljs-keyword">this</span> <span class="hljs-class"><span class="hljs-keyword">class</span>


<span class="hljs-title">Class</span> <span class="hljs-title">Animal</span> </span>{

    <span class="hljs-keyword">public</span> $breathe;
    <span class="hljs-keyword">public</span> $age;

    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">breathe</span><span class="hljs-params">()</span>: int</span>{
        <span class="hljs-keyword">if</span>($<span class="hljs-keyword">this</span>-&gt;age &lt; <span class="hljs-number">120</span>&gt;){
            $<span class="hljs-keyword">this</span>-&gt;breathe++;
            <span class="hljs-keyword">return</span> $breathe;
        }
    }

}

then a <span class="hljs-class"><span class="hljs-keyword">class</span>:

<span class="hljs-title">Class</span> <span class="hljs-title">Amphibian</span> </span>{
    <span class="hljs-keyword">public</span> $aquatic;

    <span class="hljs-keyword">protected</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">check</span><span class="hljs-params">()</span>: string
    </span>{
        <span class="hljs-keyword">if</span>($<span class="hljs-keyword">this</span>-&gt;aquatic){
            <span class="hljs-keyword">return</span> <span class="hljs-string">'Amphibious'</span>;
        }
    }

}

- so an amphibian can inherit from an animal but an animal does not inherit from an amphibian
because not all animals are aquatic.
</code></pre>
        <p><img class="img-fluid" src="images/heranca.png"></p>
        <p><small>A very logical inheritance question here based on tree, that should be the thought.</small></p>
        <p><img class="img-fluid" src="images/heranca2.png"></p>
        <p><small>Hierarchy is not always linked with Inheritance</small></p>
        <h2 id="polymorphism">Polymorphism</h2>
        <pre><code>- php has no method overhead (methods <span class="hljs-keyword">with</span> <span class="hljs-keyword">the</span> same name)
    - alternative use constructor parameters <span class="hljs-keyword">with</span> ...
        - <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">__construct</span>($<span class="hljs-title">a</span>, ...) {}</span>

- php uses dynamic <span class="hljs-keyword">and</span> <span class="hljs-keyword">not</span> static types

- polymorphism is when you use <span class="hljs-keyword">a</span> superclass like <span class="hljs-string">"Animal"</span>
<span class="hljs-keyword">in</span> many objects, <span class="hljs-keyword">in</span> typed languages ​​<span class="hljs-keyword">it</span> is passed directly <span class="hljs-keyword">in</span> <span class="hljs-keyword">the</span> typing
<span class="hljs-keyword">of</span> <span class="hljs-keyword">the</span> <span class="hljs-built_in">variable</span>, <span class="hljs-keyword">in</span> php <span class="hljs-keyword">it</span> is passed <span class="hljs-keyword">by</span> <span class="hljs-keyword">a</span> <span class="hljs-function"><span class="hljs-keyword">function</span>.</span>
    - java:
        - int x = <span class="hljs-number">1</span>;<span class="hljs-comment"> // typing</span>
        - Animal c = <span class="hljs-built_in">new</span> Amphibio();<span class="hljs-comment"> // instantiating an amphibious object that will inherit everything from Animal</span>
        - c = <span class="hljs-built_in">new</span> Mammal();<span class="hljs-comment"> // Changing to mammal because mammal is also an animal</span>
    - php:
        - $x = <span class="hljs-number">1</span> ?? <span class="hljs-string">'dynamic'</span>;<span class="hljs-comment"> // typing</span>
        - <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">analyze</span>(<span class="hljs-title">Animal</span> $<span class="hljs-title">bichoEstranho</span>) {...} // <span class="hljs-title">passing</span> <span class="hljs-title">the</span> <span class="hljs-title">parameter</span> <span class="hljs-title">as</span> <span class="hljs-title">a</span> <span class="hljs-title">function</span>,</span>
        so you can use <span class="hljs-keyword">the</span> parameter <span class="hljs-keyword">as</span> you want inside <span class="hljs-keyword">the</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">instantiating</span> <span class="hljs-title">several</span> <span class="hljs-title">objects</span>.</span>
</code></pre>
        <h3 id="defining-a-class-attributes-methods-and-invocation">Defining a class: attributes, methods and invocation</h3>
        <pre><code><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Customer</span> </span>{

    <span class="hljs-comment">// attributes of the client class, are visible</span>
    <span class="hljs-comment">// public i.e. it can be accessed from several places</span>
    <span class="hljs-keyword">public</span> $name = <span class="hljs-string">'Anonymous'</span>;
    <span class="hljs-keyword">public</span> $age = <span class="hljs-number">18</span>;

    <span class="hljs-comment">// a class interaction method</span>
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">present</span><span class="hljs-params">()</span></span>{
        <span class="hljs-keyword">return</span> <span class="hljs-string">"Name: {$this-&gt;name} Age : {$this-&gt;age}&lt;br&gt;"</span>;
    }


}

<span class="hljs-comment">// new class instance</span>
$c1 = <span class="hljs-keyword">new</span> Customer;

<span class="hljs-comment">// setting the elements of the class</span>
$c1-&gt;name = <span class="hljs-string">'Raziel'</span>;
$c1-&gt;age = <span class="hljs-number">22</span>;

<span class="hljs-comment">// calling a class method</span>
<span class="hljs-keyword">echo</span> $c1-&gt;display();
</code></pre>
        <hr>

        <h3 id="class-methods-constructor-and-destructor">Class methods: constructor and destructor</h3>
        <pre><code>- <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">__construct</span><span class="hljs-params">($a,$b,...)</span></span>{}
    - called immediately with the <span class="hljs-keyword">new</span> instance
    - <span class="hljs-keyword">if</span> the constructor method needs parameters,
    these parameters must be passed along with the nee
    ex: $borracheiro = <span class="hljs-keyword">new</span> Person(<span class="hljs-string">'Alexandre'</span>, <span class="hljs-number">20</span>);

- <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">__destruct</span><span class="hljs-params">()</span></span>{}
    - is invoked <span class="hljs-keyword">as</span> soon <span class="hljs-keyword">as</span> the object is destroyed
    ex: <span class="hljs-keyword">unset</span>($borracheiro) <span class="hljs-keyword">or</span> $borracheiro = <span class="hljs-keyword">null</span>

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Person</span> </span>{

    <span class="hljs-keyword">public</span> $name;
    <span class="hljs-keyword">public</span> $age;

    <span class="hljs-comment">// Function that is called as soon as the instance is created</span>
    <span class="hljs-comment">// if in __construct the parameters are mandatory,</span>
    <span class="hljs-comment">// it will be necessary to pass them directly to the instance</span>
    <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">__construct</span><span class="hljs-params">(string $common, int $age = <span class="hljs-number">18</span>)</span>
    </span>{
        <span class="hljs-comment">// Defining the class variables with the parameter coming from the instance</span>
        <span class="hljs-keyword">$this</span>-&gt;name = $common;
        <span class="hljs-keyword">$this</span>-&gt;age = $age;

    }

    <p><img class="img-fluid w-50" src="UC-01a02f43-a465-4d80-9d6b-904360fa9ec9.jpg"></p>
</code></pre>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>