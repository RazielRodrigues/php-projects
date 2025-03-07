<?php

# https: //www.php.net/manual/en/language.generators.syntax.php

/**
 * Então vendo que o for não ia ser a melhor solução sempre
 * os criadores do PHP decidiram implementar os Generator,
 * generators sao basicamente funções que retornam o resultado
 * de algo iteravel sem precisar salvar o resultado da iteração
 * em uma variavel, uma vez que o generator logo após
 * iterar já colhe o resultado ou seja não sendo mais
 * necessario fazer o famoso $array[] = $value;
 */

echo '<h1> Generators: </h1> <hr>';

# USO BÁSICO
function yieldCall()
{
    for ($i = 0; $i < 10; $i++) {
        yield $i;
    }
}

$generator = yieldCall();
var_dump($generator);

foreach ($generator as $value) {
    echo $value;
}

echo '<hr>';

$csv = 'nome;raziel';

function parserYield($input)
{
    foreach (explode(';', $input) as $key => $value) {
        yield uniqid() => $value;
    }
}

foreach (parserYield($csv) as $key => $value) {
    echo ($key);
    echo '<hr>';
    echo $value;
}

echo '<hr>';

function &genYield()
{
    $value = 3;

    while ($value > 0) {
        yield $value;
    }
}

foreach (genYield() as &$key) {
    echo (--$key);
}

echo '<hr>';

class Test
{
}

function y()
{
    yield 3;
    yield 4;
}

function x()
{
    yield 1;
    yield from y();
}


$x = x();

foreach ($x as $value) {
    var_dump($value);
}

$x->getReturn();

var_dump(is_array($x->getReturn()));

echo '<hr>';

echo '<h1> Exemplo benchmark: </h1> <hr>';


function forEachOnly()
{
    $numeros = [];
    foreach (range(1, 1000000) as $value) {
        $numeros[] = $value;
    }

    echo "Memory peak usage FOREACH: " . memory_get_peak_usage(true) . " bytes \n";
}

function generatorCall()
{
    foreach (range(1, 1000000) as $value) {
        yield $value;
    }
}

function generatorOnly()
{
    foreach (generatorCall() as $value) {
        $value;
    }
    echo "Memory peak usage GENERATOR: " . memory_get_peak_usage(true) . " bytes \n";
}

#forEachOnly();
#generatorOnly();
