<?php

require_once 'Bolo.php';
require_once 'Entrega.php';

class Pedido
{

    private $entrega;
    private $bolo;

    public function __construct(EntregaInterface $entrega, BoloInterface $bolo)
    {
        $this->entrega = $entrega;
        $this->bolo = $bolo;
    }

    public function preparar(){
        $this->bolo->assar();
        $this->bolo->misturar();
    }

    public function entregar(){
        $this->entrega->localizacao();
        $this->entrega->status();
    }

}