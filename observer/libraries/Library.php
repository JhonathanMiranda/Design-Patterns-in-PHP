<?php

namespace DesignPatterns\Observer\libraries;

use DesignPatterns\Observer\interfaces\Subscriber;

class Library
{
    protected $libraryName;
    private $subscribers = [];

    public function subscribe(Subscriber $subscriber, string $productName): void
    {
        if (!isset($this->subscribers[$productName])) {
            $this->subscribers[$productName] = [];
        }

        $this->subscribers[$productName][] = $subscriber;
    }

    public function unsubscribe(Subscriber $subscriber, string $productName): void
    {
        if (!isset($this->subscribers[$productName])) {
            return;
        }

        foreach ($this->subscribers[$productName] as $key => $sub) {
            if ($sub === $subscriber) {
                unset($this->subscribers[$productName][$key]);
            }
        }
    }

    public function notifyProduct(string $productName, float $price): void
    {
        if (!isset($this->subscribers[$productName])) {
            return;
        }

        $data = [
            'libraryName' => $this->libraryName,
            'name' => $productName,
            'price' => $price,
        ];

        foreach ($this->subscribers[$productName] as $subscriber) {
            $subscriber->update($data);
        }
    }
}
