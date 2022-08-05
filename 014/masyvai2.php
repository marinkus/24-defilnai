<h2>Homework: Masyvai 2</h2>

<?php

echo '<pre>';
// 1. Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.
echo '<br><br>Uzduotis nr. 1 ----- <br><br>';

$array = [];

foreach (range(0, 9) as $value) {
    $arr = [];
    foreach (range(0, 4) as $value) {
        $arr[] = rand(5, 25);
    }
    $array[] = $arr;
}

print_r($array);

// 2. Naudodamiesi 1 uždavinio masyvu:
// 2a Suskaičiuokite kiek masyve yra elementų didesnių už 10;
echo '<br><br>Uzduotis nr. 2a ----- <br><br>';
$count = 0;

foreach ($array as $arr) {
    foreach($arr as $num) {
        if ($num > 10) {
            $count++;
        }
    }
}
echo $count;

// 2b Raskite didžiausio elemento reikšmę;
echo '<br><br>Uzduotis nr. 2b ----- <br><br>';

$maxValue = 0;

foreach ($array as $arr) {
    foreach($arr as $num) {
        if ($num > $maxValue) {
            $maxValue = $num;
        }
    }
}
echo $maxValue;

// 2c Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)

$sumOfSameIndex = [];

foreach ($array as $index => $arr) {
    foreach($arr as $ind => $num) {
        
    }
}

// 2d Visus masyvus “pailginkite” iki 7 elementų
// 2e Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio
