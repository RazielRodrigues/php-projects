<h1>Visibilidade (Encapsulamento)</h1>

<?php 


class A {

    //! Pode ser acessado de qualquer parte do codigo
    public $publico = 'Publico';
    //! Por herança e dentro da classe
    protected $protegido = 'Protegido';
    //! So pode ser acessado dentro da propria classe
    private $privado = 'Privado';

    public function mostrarA(){
        //! Acessando o metodo pq ele esta dentro da classe A
        $this->naoMostrar();

        echo "Class a) Publico = {$this->publico} <br>";
        echo "Class a) Protegido = {$this->protegido} <br>";
        echo "Class a) Privado = {$this->privado} <hr>";
    }

    private function naoMostrar(){
        echo "Nao mostrar <br>";
    }

    protected function vaiPorHerança(){
        echo "Por herança";
    }

}

$a = new A();
$a->mostrarA();

//! Aqui da erro porque o metodo é privado
// $a->naoMostrar();


//? Sempre pensar no maior nivel de restribilidade das varaveisi e metodos dentro de uma classe,
//? isso demonstra maturidade no seu codigo

class B extends A{
    public function mostrarB() {
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        echo "Class B) Privado = {$this->privado}<br>";
        parent::vaiPorHerança();
    }
}

$b = new B();
//! Chamar usando B cnonceito de herança
// $b->mostrarA();
$b->mostrarB();
// $b->naoMostrar();
