<?php

require_once __DIR__ . '/../autoload.php';

use DesignPatterns\Iterator\ArrayCollection;

$collection = new ArrayCollection([
    'a',
    'b',
    'c',
    'd',
    'e',
    'f',
    'g',
    'h',
    'i',
    'j',
    'k',
    'l',
    'm',
    'n',
    'o'
]);

$singleStepIterator = $collection->getSingleStepIterator();
while ($item = $singleStepIterator->next()) {
    echo $item . ' ';
}
echo PHP_EOL;

$doubleStepIterator = $collection->getDoubleStepIterator();
while ($item = $doubleStepIterator->next()) {
    echo $item . ' ';
}
echo PHP_EOL;
