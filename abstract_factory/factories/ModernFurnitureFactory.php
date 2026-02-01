<?php

namespace DesignPatterns\AbstractFactory\factories;

use DesignPatterns\AbstractFactory\interfaces\FurnitureFactory;
use DesignPatterns\AbstractFactory\entities\modern\{
    ModernChair,
    ModernSofa,
    ModernTable
};

class ModernFurnitureFactory implements FurnitureFactory
{
    public function createChair(): ModernChair
    {
        return new ModernChair();
    }

    public function createSofa(): ModernSofa
    {
        return new ModernSofa();
    }

    public function createTable(): ModernTable
    {
        return new ModernTable();
    }
}
