<?php
echo '<pre>';

// require __DIR__ . '/Tv.php';
require __DIR__ . '/Kibiras.php';


// $tv1 = new Tv(55);

// print_r($tv1->showList());
// var_dump($tv1);


$kibiras1 = new Kibiras;
$kibiras2 = new Kibiras;

$kibiras1->prideti1Akmeni();
$kibiras1->prideti1Akmeni();
$kibiras1->prideti1Akmeni();

$kibiras2->prideti1Akmeni();
$kibiras2->pridetiDaugAkmenu(15);

echo '1: ' . $kibiras1->kiekPririnktaAkmenu();
echo "\n";
echo '2: ' . $kibiras2->kiekPririnktaAkmenu();
echo "\n";
echo 'Akmenu kiekis visuose kibiruose: ' . $kibiras1->isVisoAkmenu();