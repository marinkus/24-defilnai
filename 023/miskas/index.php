<?php
echo '<pre>';
require __DIR__ . '/Grybas.php';
require __DIR__ . '/Krepsys.php';

$kosikas = new Krepsys;

while($kosikas->deti(new Grybas)) {
}

var_dump($kosikas);