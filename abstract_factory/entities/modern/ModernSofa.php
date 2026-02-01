<?php

namespace DesignPatterns\AbstractFactory\entities\modern;

use DesignPatterns\AbstractFactory\interfaces\Sofa;

class ModernSofa implements Sofa
{
    public function layOn(): string
    {
        return "Lying on a modern sofa.";
    }
}
