<?php

namespace DesignPatterns\Builder\builders;

use DesignPatterns\Builder\interfaces\ResidenceBuilder;
use DesignPatterns\Builder\entities\Residence;

class CityResidenceBuilder implements ResidenceBuilder
{
    private Residence $residence;

    public function __construct()
    {
        $this->residence = new Residence();
    }

    public function buildFoundation(): void
    {
        $this->residence->setFoundation('concreto');
    }

    public function buildWalls(): void
    {
        $this->residence->setWalls('alvenaria');
    }

    public function buildRoof(): void
    {
        $this->residence->setRoof('telha de fibrocimento');
    }

    public function getResidence(): Residence
    {
        return $this->residence;
    }
}
