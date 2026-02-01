<?php

namespace DesignPatterns\Observer\interfaces;

interface Subscriber
{
    public function update(array $data): void;
}
