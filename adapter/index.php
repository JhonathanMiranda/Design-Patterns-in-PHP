<?php

require_once __DIR__ . '/../autoload.php';

use DesignPatterns\Adapter\adapters\AdaptadorCuboBuraco;
use DesignPatterns\Adapter\entities\{
    BuracoRedondo,
    Cilindro,
    Cubo
};

$buraco = new BuracoRedondo(5);
$cilindro = new Cilindro(5, 10);
$cubo = new Cubo(4);

$buraco->cabe($cilindro)
    ? print "Cilindro cabe no buraco redondo" . PHP_EOL
    : print "Cilindro não cabe no buraco redondo" . PHP_EOL;

$adaptadorCubo = new AdaptadorCuboBuraco($cubo);

$buraco->cabe($adaptadorCubo)
    ? print "Cubo cabe no buraco redondo" . PHP_EOL
    : print "Cubo não cabe no buraco redondo" . PHP_EOL;
