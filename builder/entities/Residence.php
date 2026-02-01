<?php

namespace DesignPatterns\Builder\entities;

class Residence
{
    private $foundation;
    private $walls;
    private $roof;

    public function setFoundation(string $material)
    {
        $this->foundation = $material;
    }

    public function setWalls(string $material)
    {
        $this->walls = $material;
    }

    public function setRoof(string $material)
    {
        $this->roof = $material;
    }

    public function declareResidence(): string
    {
        return "Esta residencia tem fundacao feita de {$this->foundation}, paredes feitas de {$this->walls} e telhado feito de {$this->roof}.";
    }
}
