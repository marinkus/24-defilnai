<?php

require __DIR__ . '/Pinigine.php';

echo "<pre>";
$wallet1 = new Pinigine;

$wallet1->ideti(10);
$wallet1->ideti(2);
$wallet1->ideti(1);

echo $wallet1->skaiciuoti();
