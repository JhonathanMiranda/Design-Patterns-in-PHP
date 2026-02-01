<?php

namespace DesignPatterns\Builder\builders;

use DesignPatterns\Builder\interfaces\ResidenceBuilder;
use DesignPatterns\Builder\entities\Residence;

class AdobeResidenceBuilder implements ResidenceBuilder
{
    private Residence $residence;

    public function __construct()
    {
        $this->residence = new Residence();
    }

    public function buildFoundation(): void
    {
        $this->residence->setFoundation('terra batida');
    }

    public function buildWalls(): void
    {
        $this->residence->setWalls('adobe');
    }

    public function buildRoof(): void
    {
        $this->residence->setRoof('palha');
    }

    public function getResidence(): Residence
    {
        return $this->residence;
    }
}
