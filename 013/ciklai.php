<style>
    .linija {
    display: block;
    line-break: anywhere;
    width: 100%;
    }
    .zenklai50 {
    word-wrap:break-word;
    width: 1000px;
    font-size: 20px;
    }
    .kvadratas {
        line-height: 5px;
        font-size: 10px;
    }
    .rombas {
        align-items: center;
        text-align: center;
    }
</style>

<h1>Homework #3. Ciklai</h1>
<?php

// 1. Naršyklėje nupieškite linija iš 400 “*”. 
echo '<br><br>Uzduotis 1 -----<br><br>';

$line = '';
for ($i = 0; $i < 400; $i++) {
    $line = $line . '*';
};
echo $line;
// 1. a) Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
echo '<br><br>Uzduotis 1a -----<br><br>';
echo "<div class='linija'>$line</div>";

// 1. b) Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 
echo '<br><br>Uzduotis 1b -----<br><br>';
echo "<div class='zenklai50'>$line</div>";

// 2. Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.

echo '<br><br>Uzduotis 2 -----<br><br>';

$array300 = [];
$countHigherThen150 = 0;

// while (count($array300) < 300) {
//     $array300[] = rand (0, 300);
// };

for ($i = 0; $i < 300; $i++) {
    $array300[$i] = rand (0, 300);
    if ($array300[$i] > 150) {
        $countHigherThen150++;
    }
};
$numbersArray = [];

echo "Dideni nei 150: $countHigherThen150<br>";
for ($i = 0; $i < count($array300); $i++) {
    if ($array300[$i] <= 275) {
        $numbersArray[] = "<span>$array300[$i]</span>";
    } else {
        $numbersArray[] = "<span style='color: red'>$array300[$i]</span>";
    }
};

echo implode(' ', $numbersArray);

// 3. Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.
echo '<br><br>Uzduotis 3 -----<br><br>';

$randomNumbersDividedBy77 = [];

for ($i = 0; $i < rand(3000, 4000); $i++) {
    if ($i % 77 === 0) {
        $randomNumbersDividedBy77[] = $i;
    }
}
echo implode(',', $randomNumbersDividedBy77);

// 4. Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.

echo '<br><br>Uzduotis 4 -----<br><br>';

$krastine = str_repeat('*', 100);
$kvadratas = '';

for ($i = 0; $i < strlen($krastine); $i++) {
    $kvadratas = $kvadratas . "<div>$krastine</div>";
};

echo "<div class='kvadratas'>$kvadratas</div>";

// 5. Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.

echo '<br><br>Uzduotis 5 -----<br><br>';

echo 'skippppppppp----------<br><br>';

// 6. Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. Suprogramuokite tris skirtingus scenarijus kai monetos metimą stabdome:

// 6. a) Iškritus herbui;

echo '<br><br>Uzduotis 6a -----<br><br>';

$herbasCount1 = 0;
do {
    $x = rand(0, 1);
    if ($x === 0) {
        echo 'H';
        $herbasCount1++;
    } else {
        echo 'S';
    }
} while ($herbasCount1 < 1);

// 6. b) Tris kartus iškritus herbui;

echo '<br><br>Uzduotis 6b -----<br><br>';

$herbasCount2 = 0;

do {
    $x = rand(0, 1);
    if ($x === 0) {
        $herbasCount2++;
        echo 'H';
    } else {
        echo 'S';
    }
} while ($herbasCount2 < 3);

// 6. c) Tris kartus iš eilės iškritus herbui;
echo '<br><br>Uzduotis 6c -----<br><br>';

$herbasCount3 = 0;
do {
    $x = rand(0, 1);
    if ($x === 0) {
        $herbasCount3++;
        echo 'H';
    } else {
        $herbasCount3 = 0;
        echo 'S';
    }
} while ($herbasCount3 < 3);

// 7. Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. Nenaudoti cikle break.

echo '<br><br>Uzduotis 7 -----<br><br>';

$pointsOfKazys= 0;
$pointsOfPetras = 0;

do {
    $randomKazys = rand(5, 25);
    $randomPetras = rand(10, 20);
    $pointsOfKazys += $randomKazys;
    $pointsOfPetras += $randomPetras;
} while ($pointsOfKazys < 222 && $pointsOfPetras < 222);


if ($pointsOfKazys > $pointsOfPetras) {
    echo "Partiją laimėjo: Kazys, surinkęs $pointsOfKazys";
} else {
    echo "Partiją laimėjo: Petras, surinkęs $pointsOfPetras";
};

// 8. Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. Reikia padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis).

echo '<br><br>Uzduotis 8 -----<br><br>';


$romboEilute = "<span>*</span>";
$rombas = "<div>$romboEilute</div>";

for ($i = 0; $i < 21; $i++) {
    if ($i < 11) {
        $rombas = $rombas ."<div style='color: rgb(".rand(0, 255).','.rand(0, 255).','.rand(0, 255).")'>" . str_repeat($romboEilute, $i*2) . '</div>';
    } else {
        $rombas = $rombas ."<div style='color: rgb(".rand(0, 255).','.rand(0, 255).','.rand(0, 255).")'>" . str_repeat($romboEilute, (20-$i)*2) . '</div>';
    }
};

echo "<div class='rombas'>$rombas<div>$romboEilute</div></div>";


// 10. Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
// 10. a) “Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.

echo '<br><br>Uzduotis 10 -----<br><br>';








