<?php

// interface Bolo
// {
//     public function misturar();
//     public function assar();
// }

// class BoloCenoura implements Bolo
// {
//     public function misturar()
//     {
//         echo '<br> misturar por 5 minutos';
//     }
//     public function assar()
//     {
//         echo '<br> assar por 50 minutos';
//     }
// }

// class BoloChocolate implements Bolo
// {
//     public function misturar()
//     {
//         echo '<br> misturar por 2 minutos';
//     }
//     public function assar()
//     {
//         echo '<br> assar por 30 minutos';
//     }
// }

// class Sobremesa {
//     function levarSobremesa(Bolo $bolo){
//         $bolo->misturar();
//         $bolo->assar();
//     }
// }

class BoloCenoura
{
    public function misturar()
    {
        echo '<br> misturar por 5 minutos';
    }
    public function assar()
    {
        echo '<br> assar por 50 minutos';
    }
}

class BoloChocolate
{
    public function misturar()
    {
        echo '<br> misturar por 2 minutos';
    }
    public function assar()
    {
        echo '<br> assar por 30 minutos';
    }
}

class Sobremesa {
    function levarSobremesa($bolo){
        if ($bolo instanceof BoloCenoura) {
            $bolo->assar();
            // if ($bolo->assar()) {
                echo ' cenoura é mais caro';
            // }
            return;
        }
        $bolo->misturar();
        $bolo->assar();
    }
}

$bolo = new BoloCenoura();
$sobremesa = new Sobremesa();

$sobremesa->levarSobremesa($bolo);