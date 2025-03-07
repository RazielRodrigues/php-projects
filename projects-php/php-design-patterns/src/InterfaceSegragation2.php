<?php

interface Aves
{
    public function setLocalizacao($longitude, $latitude);
    public function renderizar();
}

interface AvesQueVoam extends Aves
{
    public function setAltitude($altitude);
}

class Papagaio implements AvesQueVoam
{
    public function setLocalizacao($longitude, $latitude)
    {
        echo "{$longitude} {$latitude}";
    }
    
    public function setAltitude($altitude)
    {
        echo "{$altitude}";
    }
    
    public function renderizar()
    {
        echo "papagaio";
    }
}

class Pinguim implements Aves
{
    public function setLocalizacao($longitude, $latitude)
    {
        echo "{$longitude} {$latitude}";
    }
    
    public function renderizar()
    {
        echo "pinguim!";
    }
}

$pinguim = new Pinguim();
$pinguim->setLocalizacao(100, 200);
$pinguim->renderizar();