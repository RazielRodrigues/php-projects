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
$arr = [1,2,[3,4,5], 6,[7,[8,9]], 10];
// var_dump($arr);

function buscaArr(array $arr, int $i){
    //condição
    if(in_array($i, $arr, true)){
        echo $i;

        if($i < 10){
            $i++;
            return buscaArr($arr, $i);
        }

    }
}
buscaArr($arr, 1);
/*

$arr = [1,2,[3,4,5], 6,[7,[8,9]], 10];

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


/*
! geralmente é usado quando quer quebrar as funções em mais pedaçoes deixando dessa forma
! ex: usar os resultados do parametro da funcao x na funcao y assim voce consegue usar um mesmo parametro para 
! resolver outra coisa com a outra função. 

*/
function soma($a){
    //alogiritmo 30seg
    //! para usar o parametro a é necessario usar a palavra use e especificar o parametro dentro dos paranteses
    return function($b) use ($a) {
        return $a + $b;
    };
}

//! chamando a função e especificando os parametros a primeira chamada () e a segunda ()
//! é equivalente ao parametro $b da segunda função ou seja a função de retorno.

echo '<hr/>'.soma(13)(3);

$doisMais = soma(2);

echo $doisMais(10);









echo '<hr/>';
echo '<hr/>';

$notas = [1.2, 9.8, 2.4];
$notasFinais1 = [];

foreach($notas as $nota){
    $notasFinais1[] = round($nota);
}
print_r($notasFinais1);

// $notasFinais2 = array_map(round, $notas);
// print_r($notasFinais2);


$aprovados = [];

foreach($notas as $nota){
    if($nota >= 7){
        $aprovados = $nota;
    }
}

// function aprovados($nota){
//     return $nota >= 7;
// }
// $fil = array_filter($notas, aprovados($nota));

<?php
echo "<a href='page1.php'>page1</a>";
$a = 'Nossa';
$Nossa = 'Eu';
$Eu = 'consegui';
$consegui = 'respoonder';
$respoonder = 'esse';
$esse = 'desafio';
//echo "nossa eu cconsegui responder esse desafio!";
// $a
echo "<br>";
echo "{$a}";
echo "<br>";
echo "{$$a}";
echo "<br>";
echo "{$$$a}";
echo "<br>";
echo "{$$$$a}";
echo "<br>";
echo "{$$$$$a}";
echo "<br>";
echo "{$$$$$$a}";
echo "<br>";
echo "<br>";
echo "<br>";

echo "PONTEIROS:";
echo "<br>";
$variavel = 'valor inicial...variavel';
var_dump($variavel);
//atribuição por valor
$variavelValor = $variavel;
var_dump($variavelValor);
$variavelValor = 'agora recebeu outro valor...';
var_dump($variavel);
var_dump($variavelValor);
//atribuição por ponteiro
// 1. A variavel $ponteiro tem o poder de substituir o que se encontra em 
// $variavel pois foi atribuida o &
$ponteiro = &$variavel;
var_dump($ponteiro);
// 2. dessa forma se o valor da variavel $ponteiro for alterado, o valor da $variavel também será.
$ponteiro = 'mesma referencia';
var_dump($variavel);
// echo "$variavel $ponteiro";
const constante = 'constante!';
echo constante;
define('ola','ola');
echo ola .'Ternario:';

// $status = $idade >= 18 ? 'maior de idade ' : 'menor de idade';
// echo $status;
// () = condição
// if = ?
// else = :
$idade = 19;
echo $idade !== false ? var_dump(true) : var_dump(false);


function somaCompleta(...$numeros){
    $soma = 0;
    foreach($numeros as $n){
        $soma += $n;
    }
    return $soma;
}

// Somando os numeros em serie
// print_r(somaCompleta(1,2,3));

// passa os valores do array
// $arr = [1,2,7];
// print_r(somaCompleta(...$arr));


// passa o array: ero
// $arr = [8,2,1];
// print_r(somaCompleta($arr));

function membros($titular, ...$dependentes){
    echo "titular: $titular <hr>";
    if($dependentes){
        foreach($dependentes as $d) echo "dependente $d <br>";
    }
}

membros('Raziel', 'Ana', 'igor');

