<?php

require_once __DIR__ . '/../autoload.php';

use DesignPatterns\Builder\directors\ResidenceDirector;
use DesignPatterns\Builder\builders\{
    AdobeResidenceBuilder,
    CityResidenceBuilder,
    RibeirinhoResidenceBuilder
};

$director = new ResidenceDirector();

$adobeBuilder = new AdobeResidenceBuilder();
$director->setBuilder($adobeBuilder);
$adobeResidence = $director->makeAResidence();

$cityBuilder = new CityResidenceBuilder();
$director->setBuilder($cityBuilder);
$cityResidence = $director->makeAResidence();

$ribeirinhoBuilder = new RibeirinhoResidenceBuilder();
$director->setBuilder($ribeirinhoBuilder);
$ribeirinhoResidence = $director->makeAResidence();


echo $adobeResidence->declareResidence() . PHP_EOL;
echo $cityResidence->declareResidence() . PHP_EOL;
echo $ribeirinhoResidence->declareResidence() . PHP_EOL;
