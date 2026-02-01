<?php

namespace DesignPatterns\Iterator\iterators;

use DesignPatterns\Iterator\interfaces\{
    Iterator,
    IterableCollection
};

class SingleStepIterator implements Iterator
{
    private const STEP = 1;

    private IterableCollection $collection;
    private int $currentIndex = -1;

    public function __construct(IterableCollection $collection)
    {
        $this->collection = $collection;
    }

    public function current()
    {
        $rawCollection = $this->collection->getRaw();

        if ($this->currentIndex >= count($rawCollection)) {
            return null;
        }

        return $rawCollection[$this->currentIndex];
    }
    public function next()
    {
        $rawCollection = $this->collection->getRaw();

        if ($this->currentIndex < count($rawCollection)) {
            $this->currentIndex += self::STEP;
        }

        return $this->current();
    }
}
