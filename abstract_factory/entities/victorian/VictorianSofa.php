<?php

namespace DesignPatterns\AbstractFactory\entities\victorian;

use DesignPatterns\AbstractFactory\interfaces\Sofa;

class VictorianSofa implements Sofa
{
    public function layOn(): string
    {
        return "Lying on a victorian sofa.";
    }
}
