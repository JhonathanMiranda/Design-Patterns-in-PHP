<?php

require_once __DIR__ . '/../autoload.php';

use DesignPatterns\AbstractFactory\factories\{
    ModernFurnitureFactory,
    VictorianFurnitureFactory
};

// Try switching between different factories to see different furniture styles
$factory = new ModernFurnitureFactory();
// $factory = new VictorianFurnitureFactory();

$chair = $factory->createChair();
$sofa = $factory->createSofa();
$table = $factory->createTable();

echo $chair->sitOn() . PHP_EOL;
echo $sofa->layOn() . PHP_EOL;
echo $table->putOnTop('apple') . PHP_EOL;
