<h2>Homework: Masyvai</h2>

<?php

echo '<pre>';
// 1. Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

echo '<br><br>Uzduotis nr. 1 ----- <br><br>';
$firstArray = range(0, 29);

foreach ($firstArray as &$value) {
    $value = rand(5, 25);
}
unset($value);

print_r($firstArray);

// 2. Naudodamiesi 1 uždavinio masyvu:
// 2. a) Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
echo '<br><br>Uzduotis nr. 2a ----- <br><br>';
$countHigherThan10 = 0;
foreach ($firstArray as $value) {
    if ($value > 10) {
        $countHigherThan10++;
    }
}
echo $countHigherThan10;

// 2. b) Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
echo '<br><br>Uzduotis nr. 2b ----- <br><br>';
$maxValueIndex = array_search(max($firstArray), $firstArray);
$maxValue = max($firstArray);
echo "Index: $maxValueIndex, value: $maxValue";

// 2. c) Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
echo '<br><br>Uzduotis nr. 2c ----- <br><br>';
$sumOfEven = 0;
foreach ($firstArray as $value) {
    if ($value % 2 === 0) {
        $sumOfEven += $value;
    }
}
echo $sumOfEven;

// 2. d) Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
echo '<br><br>Uzduotis nr. 2d ----- <br><br>';
$secondArray = [];
foreach ($firstArray as $index => $value) {
    $secondArray[] = $value - $index;
}
print_r($secondArray);

// 2. e) Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
echo '<br><br>Uzduotis nr. 2e ----- <br><br>';
for ($i = 0; $i < 10; $i++) {
    $secondArray[] = rand(5, 25);
}
print_r($secondArray);


// 2. f) Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
echo '<br><br>Uzduotis nr. 2f ----- <br><br>';
$arrOfEven = [];
$arrOfOdd = [];

foreach ($secondArray as $index => $value) {
    if ($index % 2 == 0) {
        $arrOfEven[] = $value;
    } else {
        $arrOfOdd[] = $value;
    }
}
print_r($arrOfEven);
print_r($arrOfOdd);

// 2. g) Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
echo '<br><br>Uzduotis nr. 2g ----- <br><br>';

foreach ($firstArray as $index => &$value) {
    if ($index % 2 == 0 && $value > 15) {
        $value = 0;
    }
}
unset($value);
print_r($firstArray);

// 2. h) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
echo '<br><br>Uzduotis nr. 2h ----- <br><br>';

$saugiklis = 0;
for ($i = 0; $i < count($firstArray); ++$i) {
    if ($firstArray[$i] > 0 && $saugiklis === 0) {
        echo "$i $firstArray[$i]\n";
        $saugiklis++;
    }
}

// 2. i) Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;
echo '<br><br>Uzduotis nr. 2i ----- <br><br>';

for ($i = 0; $i < count($firstArray); $i++) {
    if ($i % 2 === 0) {
        unset($firstArray[$i]);
    }
}
print_r($firstArray);

// 3. Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.
echo '<br><br>Uzduotis nr. 3 ----- <br><br>';

