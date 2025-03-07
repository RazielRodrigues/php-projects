<?php

interface Aves
{
    public function setLocalizacao($longitude, $latitude);
    public function setAltitude($altitude);
    public function renderizar();
}

class Papagaio implements Aves
{
    public function setLocalizacao($longitude, $latitude)
    {
        echo "x: {$longitude}, y: {$latitude}";
    }
    
    public function setAltitude($altitude)
    {
        echo "x: {$altitude}";
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
        echo "x: {$longitude}, y: {$latitude}";
    }
    
    // A Interface Aves está forçando a Classe Pinguim a implementar esse método.
    // Isso viola o príncipio ISP
    // e o de liskov pois esta obrigando a ter
    // uma função que nao vai usar ou seja que nao tem nada
    public function setAltitude($altitude)
    {
        //Não faz nada...  Pinguins são aves que não voam!
    }
    
    public function renderizar()
    {
        echo "pinguim";
    }
}


