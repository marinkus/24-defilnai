<h1>Kintamieji ir sąlygos</h1>

<?php

/* 1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".
 */
echo 'Uzduotis nr. 1';
echo '<br>';
$vardas = 'Edvinas';
$pavarde = 'Marc';
$gimimoMetai = 1990;
$dabartiniaiMetai = 2022;

$manoAmzius = $dabartiniaiMetai - $gimimoMetai;

echo "Aš esu $vardas $pavarde. Man yra $manoAmzius metai(ų)";
echo '<br>';

/* 2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.
 */
echo 'Uzduotis nr. 2';
echo '<br>';
 $randomNumberOne = rand(0, 4);
 $randomNumberTwo = rand(0, 4);

 echo "Pirmas skaicius: $randomNumberOne";
 echo '<br>';
 echo "Antras skaicius: $randomNumberTwo";
 echo '<br>';

 if ($randomNumberOne > $randomNumberTwo && $randomNumberTwo !== 0) {
    echo $randomNumberOne / $randomNumberTwo;
 } else if ($randomNumberOne < $randomNumberTwo && $randomNumberOne !== 0) {
    echo $randomNumberTwo / $randomNumberOne;
 } else {
    echo 1;
 };

 /* 3. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.
 */
echo 'Uzduotis nr. 3';
echo '<br>';
 $random1 = rand(0, 25);
 $random2 = rand(0, 25);
 $random3 = rand(0, 25);

 $arrayOf3RandomNumbers = array($random1, $random2, $random3);
 sort( $arrayOf3RandomNumbers);

 var_dump( $arrayOf3RandomNumbers);
 echo '<br>';
 var_dump( $arrayOf3RandomNumbers[1]);
 echo '<br>';

 /* 4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 
 */
echo 'Uzduotis nr. 4';
echo '<br>';
 $a = rand(1, 10); //trikampio krastine
 $b = rand(1, 10); //trikampio krastine
 $c = rand(1, 10); //trikampio krastine
echo "a: $a, b: $b, c: $c";
 if (($a + $b) > $c &&
    ($c + $b) > $a &&
    ($a + $c) > $b) {
        echo 'Galima';
    } else {
        echo 'Negalima';
    };
echo '<br>';

/* 5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).
 */

 $randNumber1 = rand(0, 2);
 $randNumber2 = rand(0, 2);
 $randNumber3 = rand(0, 2);
 $randNumber4 = rand(0, 2);

 $countOfZeros = 0;

 if ($randNumber1 === 0) {
    $countOfZeros++;
 } if ($randNumber2 === 0) {
    $countOfZeros++;
 } if ($randNumber3 === 0) {
    $countOfZeros++;
 } if ($randNumber4 === 0) {
    $countOfZeros++;
 };
echo 'Uzduotis nr. 5';
echo '<br>';
 echo "$randNumber1, $randNumber2, $randNumber3, $randNumber4";
 echo '<br>';
 echo $countOfZeros;
 echo '<br>';

/* 6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>
 */
echo 'Uzduotis nr. 6';
echo '<br>';
$randomBetween1and6 = rand(1, 6);

echo "<h$randomBetween1and6>$randomBetween1and6</h$randomBetween1and6>";
echo '<br>';

/* 7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni.  */

echo 'Uzduotis nr. 7';
echo '<br>';

$rand1 = rand(-10, 10);
$rand2 = rand(-10, 10);
$rand3 = rand(-10, 10);

if ($rand1 < 0) {
    echo "<span style='color: green'>$rand1</span>";
} else if ($rand1 === 0) {
    echo "<span style='color: red'>$rand1</span>";
} else if ($rand1 > 0) {
    echo "<span style='color: blue'>$rand1</span>";
};
echo '<br>';
if ($rand2 < 0) {
    echo "<span style='color: green'>$rand2</span>";
} else if ($rand2 === 0) {
    echo "<span style='color: red'>$rand2</span>";
} else if ($rand2 > 0) {
    echo "<span style='color: blue'>$rand2</span>";
};
echo '<br>';
if ($rand3 < 0) {
    echo "<span style='color: green'>$rand3</span>";
} else if ($rand3 === 0) {
    echo "<span style='color: red'>$rand3</span>";
} else if ($rand3 > 0) {
    echo "<span style='color: blue'>$rand3</span>";
};
echo '<br>';

/* 8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.
  */

echo 'Uzduotis nr. 8';
echo '<br>';

$candlesCount = rand(5, 3000);

if ($candlesCount > 2000) {
    echo $candlesCount - ($candlesCount / 100 * 4);
}
else if ($candlesCount > 1000) {
    echo $candlesCount - ($candlesCount / 100 * 3);
}
else if ($candlesCount <= 1000) {
    echo $candlesCount;
};
echo '<br>';

/* 9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.
  */

  echo 'Uzduotis nr. 9';
  echo '<br>';
  
  $randomToHundred1 = rand(0, 100);
  $randomToHundred2 = rand(0, 100);
  $randomToHundred3 = rand(0, 100);
  echo "$randomToHundred1     $randomToHundred2       $randomToHundred3";
  echo '<br>';
  echo round(($randomToHundred1 + $randomToHundred2 + $randomToHundred3) / 3);
  echo '<br>';
  
  $sum = 0;
  $count = 0;
  
  if ($randomToHundred1 >= 10 && $randomToHundred1 <= 90) {
      $sum+=$randomToHundred1;
      $count++;
    };
    if ($randomToHundred2 >= 10 && $randomToHundred2 <= 90) {
        $sum+=$randomToHundred2;
        $count++;
    };
    if ($randomToHundred3 >= 10 && $randomToHundred3 <= 90) {
        $sum+=$randomToHundred3;
    $count++;
};

echo '<br>';
echo round($sum / $count);
echo '<br>';

/* 10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.
*/
echo 'Uzduotis nr. 10';
echo '<br>';

$hours = 4;
$minutes = 15;
$seconds = 0;

echo "$hours : $minutes : $seconds";
echo '<br>';

$addSeconds = rand(0, 300);
$seconds += $addSeconds;


while ($seconds > 60) {
    $seconds -= 60;
    $minutes += 1;
};

echo "$hours : $minutes : $seconds";
echo '<br>';

/* 11. Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm nuo 1000 iki 9999. Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais. Naudoti ciklų ir masyvų NEGALIMA. */

echo 'Uzduotis nr. 11';
echo '<br>';







