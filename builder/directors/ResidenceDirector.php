<?php

namespace DesignPatterns\Builder\directors;

use DesignPatterns\Builder\interfaces\ResidenceBuilder;

class ResidenceDirector
{
    private ResidenceBuilder $builder;

    public function setBuilder(ResidenceBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function makeAResidence()
    {
        $this->builder->buildFoundation();
        $this->builder->buildWalls();
        $this->builder->buildRoof();

        return $this->builder->getResidence();
    }
}
