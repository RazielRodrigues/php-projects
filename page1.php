<h1>Membros estaticos</h1>

<?php 

class A{
    //? do objeto
    public $naoStatic = 'Variavel de instancia (vindo do objeto)';

    //? geralmente usado com constantes, ou varaveis que não vão mudar durante a criação do objeto
    public static $static = 'Variavel de classe (estatica)';

    //? diferença dos acessos
    public function mostrarA(){
        echo "nao estatica = {$this->naoStatic}<br>";
        // tentativa 1 nao se acessa pelo $this pois this se referencia ao valor do objeto que instanciou
        // echo " estatica = {$this->static}";
        // tentativa 2 nao funciona interpolação
        // echo " estatica = {self::$static}";
        // tentativa 3 acessado por concatenação
        echo "estatica = ".self::$static."<br>";
    }

    //! Dentro de uma função static so se consegue acessar membros esaticos
    public static function mostrarStaticA(){
        // echo "nao estatica = {$this->naoStatic}<br>";
        echo "estatica = ".self::$static."<br>";
    }

}

// ! Comentando pra mostrar a diferança entre acessar coisas estaticas linha 36
// $objA = new A();
// $objA->mostrarA();

//!  $objA->mostrarStaticA(); da pra acessar instanciando um objeto e fazendo dessa forma, mas não é ideal.

//! acessando funções estaticas
//! membros e funções estaticas nao é necessario instanciar um objeto para chamar 
echo A::$static , '<hr>'; //? Acesar diretamente pela classe
A::mostrarStaticA(); //? Acesar diretamente pela classe
//! Lembrando que o ideal é acessar mebros de classe com essa notação uma vez que deixa mais claro
//! Logo que mebros staticos fazem parte da classe e nao do objeto,
//! deixando de livre acesso pra fora do codigo, claro dependen do nivel de acesso

//? Tambem é possivel alterar os valores dos membros da classe.
A::$static = '<hr>valor alterado do membro da classe ';
echo A::$static;