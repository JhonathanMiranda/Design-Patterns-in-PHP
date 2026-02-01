<?php

namespace DesignPatterns\Adapter\entities;

class Cubo
{
    private $tamanhoLado;

    public function __construct($tamanhoLado)
    {
        $this->tamanhoLado = $tamanhoLado;
    }

    public function getTamanhoLado()
    {
        return $this->tamanhoLado;
    }

    public function getVolume()
    {
        return pow($this->tamanhoLado, 3);
    }
}
