<?php

namespace DesignPatterns\AbstractFactory\entities\modern;

use DesignPatterns\AbstractFactory\interfaces\Chair;

class ModernChair implements Chair
{
    public function sitOn(): string
    {
        return "Sitting on a modern chair.";
    }
}
