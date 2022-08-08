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

$letters = range('A', 'D');
$arrOfLetters = [];

foreach(range(1, 200) as $_) {
    $arrOfLetters[] = $letters[rand(0, 3)];
}

print_r($arrOfLetters);

// $countOfLetters = ['A' => 0, 'B' => 0, 'C' => 0, 'D' => 0];
$countA = 0;
$countB = 0;
$countC = 0;
$countD = 0;

foreach ($arrOfLetters as $letter) {
    if ($letter == 'A') {
        $countA++;
    } elseif ($letter == 'B') {
        $countB++;
    } elseif ($letter == 'C') {
        $countC++;
    } elseif ($letter == 'D') {
        $countD++;
    }
}
echo "<br>A: $countA, B: $countB, C: $countC, D: $countD\n";

// 4. Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
echo '<br><br>Uzduotis nr. 4 ----- <br><br>';

sort($arrOfLetters);
print_r($arrOfLetters);

// 5. Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.
echo '<br><br>Uzduotis nr. 5 ----- <br><br>';

$arrOfLetters1 = [];

while (count($arrOfLetters1) < 200) {
    $arrOfLetters1[] = $letters[rand(0, 3)];
}


$arrOfLetters2 = [];

while (count($arrOfLetters2) < 200) {
    $arrOfLetters2[] = $letters[rand(0, 3)];
}


$arrOfLetters3 = [];

while (count($arrOfLetters3) < 200) {
    $arrOfLetters3[] = $letters[rand(0, 3)];
}
$mixedArray = [];
for ($i =0; $i < 200; $i++) {
    $mixedArray[] = $arrOfLetters1[$i] . $arrOfLetters2[$i] . $arrOfLetters3[$i];
}
$arrayUnique = array_unique($mixedArray);
print_r($arrayUnique);


// 6. Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).
echo '<br><br>Uzduotis nr. 6 ----- <br><br>';

$arrHundred1 = [];
$arrHundred2 = [];

while (count($arrHundred1) < 100) {
    $number = rand(100, 999);
    if (!in_array($number, $arrHundred1)) {
        $arrHundred1[] = $number;
    }
}
print_r($arrHundred1);

echo '<br><br>';

while (count($arrHundred2) < 100) {
    $number = rand(100, 999);
    if (!in_array($number, $arrHundred2)) {
        $arrHundred2[] = $number;
    }
}
print_r($arrHundred2);
echo '<br><br>';

// 7. Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.
echo '<br><br>Uzduotis nr. 7 ----- <br><br>';

$arrayFrom1and2 = [];

foreach ($arrHundred1 as $value) {
    if (!in_array($value, $arrHundred2)) {
        $arrayFrom1and2[] = $value;
    }
}

print_r($arrayFrom1and2);
echo '<br><br>';

// 8. Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.

echo '<br><br>Uzduotis nr. 8 ----- <br><br>';
$repeatedNumbers = [];
foreach ($arrHundred1 as $value) {
    if (in_array($value, $arrHundred2)) {
        $repeatedNumbers[] = $value;
    }
}

print_r($repeatedNumbers);
echo '<br><br>';

// 9. Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.

echo '<br><br>Uzduotis nr. 9 ----- <br><br>';

$valuesAsIndexes = [];


foreach ($arrHundred1 as $index => $value) {
    $valuesAsIndexes[$value]=$arrHundred2[$index];
}

print_r($valuesAsIndexes);

// 10. Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.

echo '<br><br>Uzduotis nr. 10 ----- <br><br>';

$array10 = [rand(5, 25), rand(5, 25)];

for ($i = 2; $i <10; $i++) {
    $array10[] = $array10[$i-2] + $array10[$i-1];
}

print_r($array10);

// 11. Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300. Reikšmes kurios tame masyve yra ne unikalios pergeneruokite iš naujo taip, kad visos reikšmės masyve būtų unikalios. Išrūšiuokite masyvą taip, kad jo didžiausia reikšmė būtų masyvo viduryje, o einant nuo jos link masyvo pradžios ir pabaigos reikšmės mažėtų. Paskaičiuokite pirmos ir antros masyvo dalies sumas (neskaičiuojant vidurinės). Jeigu sumų skirtumas (modulis, absoliutus dydis) yra didesnis nei | 30 | rūšiavimą kartokite. (Kad sumos nesiskirtų viena nuo kitos daugiau nei per 30)

echo '<br><br>Uzduotis nr. 11 ----- <br><br>';

$array101 = [];


while (count($array101) < 101) {
    $array101[] = rand(0, 300);
}

foreach ($array101 as &$value) {
    if (in_array($value, $array101)) {
        $value = rand(0, 300);
    }
}
unset($value);

print_r($array101);
echo '<br><br><br><br>';
// $test = array_unique($array101);
// print_r($test);

sort($array101);


$arrOne = [];
$arrTwo = [];

foreach ($array101 as $index => $value) {
    if ($index % 2 == 0) {
        $arrOne[] = $value;
    } else {
        $arrTwo[] = $value;
    }
}
rsort($arrTwo);

$sortedArray = array_merge($arrOne, $arrTwo);
print_r($sortedArray);

