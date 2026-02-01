<?php

namespace DesignPatterns\AbstractFactory\entities\victorian;

use DesignPatterns\AbstractFactory\interfaces\Chair;

class VictorianChair implements Chair
{
    public function sitOn(): string
    {
        return "Sitting on a victorian chair.";
    }
}
