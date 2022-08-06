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
echo '<br><br>Uzduotis nr. 2c ----- <br><br>';

$sumOfSameIndex = range(0, 4);

foreach ($array as $index => $arr) {
    foreach($arr as $ind => $num) {
        $sumOfSameIndex[$ind] += $num;
    }
}
print_r($sumOfSameIndex);

// 2d Visus masyvus “pailginkite” iki 7 elementų
echo '<br><br>Uzduotis nr. 2d ----- <br><br>';

foreach($array as &$arr) {
    $arr[]=rand(5, 25);
    $arr[]=rand(5, 25);
}
unset($arr);

print_r($array);

// 2e Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai
echo '<br><br>Uzduotis nr. 2e ----- <br><br>';

$arraySum = range(0, 9);

foreach($array as $ind => $arr) {
    foreach ($arr as $index => $val) {
        $arraySum[$ind] += $val;
    }
}

print_r($arraySum);

// 3. Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).

$arrayOfLetters = [];

foreach(range(0, 9) as $arr) {
    $masyvas = [];
    foreach(range(0, rand(2, 20)) as $val) {
        $masyvas[]=chr(rand(65,90));
    }
    $arrayOfLetters[] = $masyvas;
}

foreach($arrayOfLetters as &$arr) {
    sort($arr);
}
unset($arr);

print_r($arrayOfLetters);