<?php

interface EntregaInterface
{
    public function localizacao();
    public function status();
}

interface EntregaMotoInterface extends EntregaInterface
{
    public function minutos();
}

interface EntregaCarroInterface extends EntregaInterface
{
    public function horas();
}

class EntregaCarro implements EntregaCarroInterface
{
    public function localizacao(){
        echo '<h3>São Paulo</h3>';
    }
    public function status(){
        echo '<h3>indo até você</h3>';
    }
    public function horas(){
        echo '<h3>4 horas...</h3>';
    }
}

class EntregaMoto implements EntregaMotoInterface
{
    public function localizacao(){
        echo '<h3>marydota</h3>';
    }
    public function status(){
        echo '<h3>indo até você</h3>';
    }
    public function minutos(){
        echo '<h3>15 minutos...</h3>';
    }
}