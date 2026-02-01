<?php

namespace DesignPatterns\Adapter\entities;

class Cilindro
{
    protected $raio;
    protected $altura;

    public function __construct($raio, $altura)
    {
        $this->raio = $raio;
        $this->altura = $altura;
    }

    public function getRaio()
    {
        return $this->raio;
    }

    public function getVolume()
    {
        return pi() * pow($this->raio, 2) * $this->altura;
    }
}
