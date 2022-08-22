<?php
echo '<pre>';

// require __DIR__ . '/Tv.php';
require __DIR__ . '/Kibiras.php';
require __DIR__ . '/SuperKibiras.php';


// $tv1 = new Tv(55);

// print_r($tv1->showList());
// var_dump($tv1);


// $kibiras1 = Kibiras::naujasKibiras();
// $kibiras2 = Kibiras::naujasKibiras();
// $kibiras2 = unserialize(serialize($kibiras1));
// $kibiras2 = clone($kibiras1);

$kibiras1 = new SuperKibiras;
$kibiras2 = new SuperKibiras;

$kibiras1->prideti1Akmeni();
$kibiras1->prideti1Akmeni();
$kibiras1->prideti1Akmeni();

$kibiras1->prideti2Akmenis();

$kibiras1->pridetiDaugAkmenu(8);

$kibiras2->prideti1Akmeni();
$kibiras2->pridetiDaugAkmenu(15);
$kibiras2->pridetiDaugAkmenu(15);

echo '1: ' . $kibiras1->kiekPririnktaAkmenu();
echo "\n";
echo '2: ' . $kibiras2->kiekPririnktaAkmenu();
echo "\n";
echo 'Akmenu kiekis visuose kibiruose: ' . $kibiras1->isVisoAkmenu();
echo "\n";
echo 'Akmenu kiekis visuose kibiruose: ' . Kibiras::kiekYraAkmenu();