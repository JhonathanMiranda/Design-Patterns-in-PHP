<?php

namespace DesignPatterns\AbstractFactory\factories;

use DesignPatterns\AbstractFactory\interfaces\FurnitureFactory;
use DesignPatterns\AbstractFactory\entities\victorian\{
    VictorianChair,
    VictorianSofa,
    VictorianTable
};

class VictorianFurnitureFactory implements FurnitureFactory
{
    public function createChair(): VictorianChair
    {
        return new VictorianChair();
    }

    public function createSofa(): VictorianSofa
    {
        return new VictorianSofa();
    }

    public function createTable(): VictorianTable
    {
        return new VictorianTable();
    }
}
