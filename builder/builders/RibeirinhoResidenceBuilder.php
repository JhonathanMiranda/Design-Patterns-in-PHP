<?php

namespace DesignPatterns\Builder\builders;

use DesignPatterns\Builder\interfaces\ResidenceBuilder;
use DesignPatterns\Builder\entities\Residence;

class RibeirinhoResidenceBuilder implements ResidenceBuilder
{
    private Residence $residence;

    public function __construct()
    {
        $this->residence = new Residence();
    }

    public function buildFoundation(): void
    {
        $this->residence->setFoundation('estacas de madeira');
    }

    public function buildWalls(): void
    {
        $this->residence->setWalls('tábuas de madeira');
    }

    public function buildRoof(): void
    {
        $this->residence->setRoof('telha de alumínio');
    }

    public function getResidence(): Residence
    {
        return $this->residence;
    }
}
