<?php

namespace DesignPatterns\Observer\subscribers;

use DesignPatterns\Observer\interfaces\Subscriber;
use DesignPatterns\Observer\traits\Customer;

class Otaku implements Subscriber
{
    use Customer;

    public function update(array $data): void
    {
        $this->declareUpdate('Otaku', $data);
    }
}
