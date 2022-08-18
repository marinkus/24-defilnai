<?php

require __DIR__ . '/Nso.php';
require __DIR__ . '/Tv.php';


echo '<pre>';


// $nso1 = new Nso;
// $nso2 = new Nso;


$tv1 = new Tv('Black', '40"');
$tv2 = new Tv('Silver', '58"');
$tv3 = new Tv('White', '65"');

// $tv2->color = 'black';
// $tv3->color = 'indigo';

// $tv2->size = '25"';

// var_dump($tv1);
// var_dump($tv2);
// var_dump($tv3);

echo $tv1->showParameters();
echo $tv2->showParameters();
echo $tv3->showParameters();

echo $tv2->size;