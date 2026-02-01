<?php

namespace DesignPatterns\AbstractFactory\interfaces;

use DesignPatterns\AbstractFactory\interfaces\{
    Chair,
    Sofa,
    Table
};

interface FurnitureFactory
{
    public function createChair(): Chair;
    public function createSofa(): Sofa;
    public function createTable(): Table;
}
