<?php

namespace DesignPatterns\AbstractFactory\interfaces;

interface Table
{
    public function putOnTop(string $objectName): string;
}
