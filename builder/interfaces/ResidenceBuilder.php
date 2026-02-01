<?php

namespace DesignPatterns\Builder\interfaces;

use DesignPatterns\Builder\entities\Residence;

interface ResidenceBuilder
{
    public function buildFoundation(): void;

    public function buildWalls(): void;

    public function buildRoof(): void;

    public function getResidence(): Residence;
}
