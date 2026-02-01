<?php

require_once __DIR__ . '/../autoload.php';

use DesignPatterns\Observer\subscribers\{
    Lawyer,
    Geek,
    Otaku
};
use DesignPatterns\Observer\libraries\{
    FinadaSaraiva,
    Leitura
};

$leitura = new Leitura();
$finadaSaraiva = new FinadaSaraiva();

$geek = new Geek();
$lawyer = new Lawyer();
$otaku = new Otaku();

$manga = 'Naruto-Vol-1';
$vadeMecum = 'Vade-Mecum-2026';
$comic = 'Homem-Aranha-Vol-1';

$leitura->subscribe($otaku, $manga);
$leitura->subscribe($geek, $manga);

$leitura->subscribe($geek, $comic);

$leitura->subscribe($lawyer, $vadeMecum);
$finadaSaraiva->subscribe($lawyer, $vadeMecum);

// ---

$leitura->notifyProduct($manga, 9.90);
$leitura->notifyProduct($comic, 12.90);
$leitura->notifyProduct($vadeMecum, 199.90);
$finadaSaraiva->notifyProduct($vadeMecum, 189.90);
