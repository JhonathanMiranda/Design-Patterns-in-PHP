<?php

namespace DesignPatterns\Observer\traits;

trait Customer
{
    public function declareUpdate(string $name, array $data): void
    {
        echo "$name foi notificado do produto: " . $data['name'];
        echo " por R$" . $data['price'];
        echo " na " . $data['libraryName'] . PHP_EOL;
    }
}
