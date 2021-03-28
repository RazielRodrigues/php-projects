<?php




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