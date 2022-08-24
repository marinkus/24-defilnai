<?php

require __DIR__ . '/vendor/autoload.php';


$book1 = new Petro\Read;
$book2 = new Zigmo\Read;

echo $book1->funBook();
echo '<br>';
echo $book2->sadBook();