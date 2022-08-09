<?php
// echo '<pre>';
// echo "start\n";
// $data = require __DIR__ . '/d.php';
// print_r($data);
header("Content-type: text/html; charset=UTF-8");
$data = file_get_contents(__DIR__ . '/labas.txt');
echo $data;


// echo __DIR__; parodo absoliutu kelia

// include 'inc.php';
// include_once 'inc.php'; // nenaudojamas siais laikais, nes buvo skirtas "bardakui"; kad nesidubliuotu tos pacios funkcijos pavadinimo ir pan.
// require __DIR__ . '/inc.php'; // siulaikinis budas, nepadeda net @ jei warning'as yra // __DIR__ . '/../015/kitas.php' i kita aplanka
// echo "end\n";