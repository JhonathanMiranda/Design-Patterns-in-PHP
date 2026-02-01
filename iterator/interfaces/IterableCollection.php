<?php

namespace DesignPatterns\Iterator\interfaces;

interface IterableCollection
{
    public function getSingleStepIterator();
    public function getDoubleStepIterator();
}
