<?php

namespace DesignPatterns\Adapter\entities;

use DesignPatterns\Adapter\entities\Cilindro;

class BuracoRedondo
{
    private $raio;

    public function __construct($raio)
    {
        $this->raio = $raio;
    }

    public function getRaio()
    {
        return $this->raio;
    }

    public function cabe(Cilindro $cilindro): bool
    {
        return $cilindro->getRaio() <= $this->raio;
    }
}
