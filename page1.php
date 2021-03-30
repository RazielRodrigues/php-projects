<?php
echo "<a href='index.php'>index</a>";

function executar($a, $b, $op, $funcao) {
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado <br>";
}

$soma = function(int $a, int $b): int{
 return $a + $b;
};
// echo $soma(2, 3);

$multiplicacao = function(int $a, int $b): int{
    return $a * $b;
};
// echo $multiplicacao(2, 3);

executar(2, 3, '+', $soma);
executar(2, 3, '*', $multiplicacao);
?>
<?php

/*
Clojure é uma classe que representa as funções anonimas
Callable é o tipo do metodo = is_callable()


Pode ser passado como tipagem de uma função isso ajuda pq
evita de não ser passado funções como parametro ex: executar



*/

// função clojure
$soma1 = function(int $a, int $b): int{
    return $a + $b;
};

// função callable
function soma2(int $a, int $b): int{
    return $a + $b;
};

echo $soma(1, 5);
echo is_callable($soma1);

var_dump($soma1);


function executar2($a, $b, $op, Callable $funcao) {
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado <br>";
}


function executar52($a, $b, $op, Closure $funcao) {
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado <br>";
}

function somaRecursivaAte(int $numero): int{
    //Condição de parada
    if($numero === 1){
        return 1;
    }else{
        return $numero + somaRecursivaAte($numero - 1);
    }
}

echo somaRecursivaAte(10);


echo 'DESAFIO RECURSÃO <BR> <BR>';

/*

$arr = [];

>1
>2
>>3
>>4
>>5
>6
>>7
>>>8
>>>9
>10

mostrar onde os numeros estão de acordo com o nivel deles 
dentro do array e fazer representar os niveis com simboloo

*/

