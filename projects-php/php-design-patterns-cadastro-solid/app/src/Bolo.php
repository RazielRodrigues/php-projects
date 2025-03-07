<?php

interface BoloInterface
{
    public function assar();
    public function misturar();
}

interface BoloCenouraInterface extends BoloInterface
{
    public function cobertura();
}

interface BoloChocolateInterface extends BoloInterface
{
    public function calda();
}

class Bolo implements BoloInterface
{
    public function assar()
    {
        echo '<h2>assar</h2>';
    }
    public function misturar()
    {
        echo '<h2>misturar</h2>';
    }
    public function servir()
    {
        echo '<h2>servir normal</h2>';
    }
}

class BoloCenoura extends Bolo implements BoloCenouraInterface
{
    public function assar()
    {
        echo '<h2>assar 45 minutos</h2>';
    }
    public function misturar()
    {
        echo '<h2>misturar 10 minutos</h2>';
    }
    public function cobertura()
    {
        echo '<h2>cobertura 10 gramas</h2>';
    }
}

class BoloChocolate extends Bolo implements BoloChocolateInterface
{
    public function assar()
    {
        echo '<h2>assar 34 minutos</h2>';
    }
    public function misturar()
    {
        echo '<h2>misturar 2 minutos</h2>';
    }
    public function calda()
    {
        echo '<h2>calda 200 ml</h2>';
    }
    public function servir()
    {
        echo '<h2>servir no prato</h2>';
    }
}