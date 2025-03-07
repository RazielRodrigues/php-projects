<?php

/** 
 * Esses primeiros blocos de codigo não estão seguindo o SOLID
 * Pois temos classes que tem muito acoplamento na classe que
 */
class ContratoClt
{
    public function salario()
    {
        echo '<br> salario';
    }
}

class Estagio
{
    public function bolsaAuxilio()
    {
        echo '<br> bolsaAuxilio';
    }
}

class PJ
{
    public function notafiscal()
    {
        echo '<br> notafiscal';
    }
}

class FolhaDePagamento
{
    protected $saldo;

    public function calcular($funcionario)
    {
        // se eu for adicionar mais um tipo de contrato
        // por exemplo freelance, vai precisar adicionar
        // outro if pra saber qual regra de negocio chamar
        // isso causa o conceito de acoplamento
        if ($funcionario instanceof ContratoClt) {
            $this->saldo = $funcionario->salario();
        } else if ($funcionario instanceof Estagio) {
            $this->saldo = $funcionario->bolsaAuxilio();
        } else if ($funcionario instanceof PJ) {
            $this->saldo = $funcionario->notafiscal();
        }
    }
}




$estagiario = new Estagio();
$empregado = new ContratoClt();
$pj = new PJ();

$folhaDePagamento = new FolhaDePagamento();
$folhaDePagamento->calcular($estagiario);
$folhaDePagamento->calcular($empregado);
$folhaDePagamento->calcular($pj);

echo '<hr>';

/** 
 * O conceito de open and closed esta muito perceptivel aqui
 * caso ele nao estive presente veriamos diversos if dentro da
 * folha de pagmento, invez disso foi usado uma interface
 * para fazer o codigo entender sem a necessidade de if, ou melhor
 * sem a classe que consome saber qual é a regra de negocio
 */

interface Remuneravel
{
    public function remuneracao();
}

class ContratoClt2 implements Remuneravel
{
    public function remuneracao()
    {
        echo '<br> ContratoClt2';
    }
}

class Estagio2 implements Remuneravel
{
    public function remuneracao()
    {
        echo '<br> Estagio2';
    }
}

class PJ2 implements Remuneravel
{
    public function remuneracao()
    {
        echo '<br> PJ2';
    }
}

class FolhaDePagamento2
{
    protected $saldo;

    public function calcular(Remuneravel $funcionario)
    {
        $this->saldo = $funcionario->remuneracao();
    }
}

$estagiario = new Estagio2();
$empregado = new ContratoClt2();
$pj = new PJ2();

$folhaDePagamento = new FolhaDePagamento2();
$folhaDePagamento->calcular($estagiario);
$folhaDePagamento->calcular($empregado);
$folhaDePagamento->calcular($pj);
