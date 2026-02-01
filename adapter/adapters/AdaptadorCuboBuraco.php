<?php

namespace DesignPatterns\Adapter\adapters;

use DesignPatterns\Adapter\entities\{
    Cilindro,
    Cubo
};

class AdaptadorCuboBuraco extends Cilindro
{
    private $cubo;

    public function __construct(Cubo $cubo)
    {
        $this->cubo = $cubo;
    }

    public function getRaio()
    {
        return $this->cubo->getTamanhoLado() * sqrt(2) / 2;
    }
}
