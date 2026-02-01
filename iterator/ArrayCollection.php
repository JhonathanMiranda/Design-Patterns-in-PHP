<?php

namespace DesignPatterns\Iterator;

use DesignPatterns\Iterator\interfaces\IterableCollection;
use DesignPatterns\Iterator\iterators\{
    SingleStepIterator,
    DoubleStepIterator
};

class ArrayCollection implements IterableCollection
{
    private array $items = [];

    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function getRaw(): array
    {
        return $this->items;
    }

    public function getSingleStepIterator()
    {
        return new SingleStepIterator($this);
    }

    public function getDoubleStepIterator()
    {
        return new DoubleStepIterator($this);
    }
}
