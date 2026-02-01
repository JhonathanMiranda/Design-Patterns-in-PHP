<?php

namespace DesignPatterns\AbstractFactory\entities\victorian;

use DesignPatterns\AbstractFactory\interfaces\Table;

class VictorianTable implements Table
{
    public function putOnTop(string $objectName): string
    {
        return "Putting " . $objectName . " on a victorian table.";
    }
}
