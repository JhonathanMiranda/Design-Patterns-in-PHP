<?php

namespace DesignPatterns\AbstractFactory\entities\modern;

use DesignPatterns\AbstractFactory\interfaces\Table;

class ModernTable implements Table
{
    public function putOnTop(string $objectName): string
    {
        return "Putting " . $objectName . " on a modern table.";
    }
}
