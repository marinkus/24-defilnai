<h2>Homework 2. Stringai (movie edition)</h2>

<?php
/* 1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą. */
echo 'Uzduotis nr. 1 --------------- <br>';

$actorName = 'Sasha';
$actorSurname = 'Grey';

if (strlen($actorName) > strlen($actorSurname)) {
    echo $actorName;
} else {
    echo $actorSurname;
};

/* 2. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms. */

echo '<br><br> Uzduotis nr. 2 --------------- <br>';
echo strtoupper($actorName);
echo '<br>';
echo strtolower($actorSurname);

/* 3. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti. */

echo '<br><br> Uzduotis nr. 3 --------------- <br>';
$fullActorName = $actorName . ' ' . $actorSurname;
echo $fullActorName;

/* 4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti. */

echo '<br><br> Uzduotis nr. 4 --------------- <br>';

$mixedName = $actorName[strlen($actorName)-3].$actorName[strlen($actorName)-2].$actorName[strlen($actorName)-1].$actorSurname[strlen($actorSurname)-3].$actorSurname[strlen($actorSurname)-2].$actorSurname[strlen($actorSurname)-1];
echo $mixedName;

/* 5. Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti. */

echo '<br><br> Uzduotis nr. 5 --------------- <br>';
$anAmericanInParis = 'An American in Paris';
echo strtr($anAmericanInParis, ['a' => '*', 'A' => '*']);

/* 6. Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti. */

echo '<br><br> Uzduotis nr. 6 --------------- <br>';
$letterCount = 0;
for ($i = 0; $i < strlen($anAmericanInParis); $i++) {
   if ($anAmericanInParis[$i] == 'a' || $anAmericanInParis[$i] == 'A') {
    $letterCount++;
   };
};
echo $letterCount;


/* 7. Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”. */

echo '<br><br> Uzduotis nr. 7 --------------- <br>';

echo preg_replace('#[aeiou]+#i', '', $anAmericanInParis);

$movieName1 = "Breakfast at Tiffany's";
$movieName2 = '2001: A Space Odyssey';
$movieName3 = "It's a Wonderful Life";
echo preg_replace('#[aeiouy]+#i', '', $movieName1);
echo '<br>';
echo preg_replace('#[aeiouy]+#i', '', $movieName2);
echo '<br>';
echo preg_replace('#[aeiou]+#i', '', $movieName3);
echo '<br>';

/* 8. Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.*/

echo '<br><br> Uzduotis nr. 8 --------------- <br>';

$starWars = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';

echo "$starWars <br>";
echo preg_replace('/[^0-9]/', '', $starWars);

/* 9. Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”. */

echo '<br><br> Uzduotis nr. 9 --------------- <br>';
$wordsWithoutCommas = strtr("Don't Be a Menace to South Central While Drinking Your Juice in the Hood", array('.' => '', ',' => ''));
$words = explode(' ', $wordsWithoutCommas);
$wordCount = 0;

for ($i = 0; $i < count($words); $i++) {
    if (strlen($words[$i]) <= 5) {
        $wordCount++;
    };
};
echo $wordCount;
echo '<br>';

$wordsWithoutCommas2 = strtr("Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale", array('.' => '', ',' => ''));
$words2 = explode(' ', $wordsWithoutCommas2);
$wordCount2 = 0;

for ($i = 0; $i < count($words2); $i++) {
    if (mb_strlen($words2[$i]) <= 5) {
        $wordCount2++;
    };
};
echo $wordCount2;

/* 10. Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai. */

echo '<br><br> Uzduotis nr. 10 --------------- <br>';

$arrayOfLetters = array_merge(range('A', 'Z'), range('a', 'z'));
$randomString = $arrayOfLetters[rand(0, 51)] . $arrayOfLetters[rand(0, 51)] . $arrayOfLetters[rand(0, 51)];
echo $randomString;

/* 11. PAPILDOMAS. Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. (reikės masyvo) */

echo '<br><br> Uzduotis nr. 11 --------------- <br>';

$mergedArraysOfWords = array_merge($words, $words2);

$indexes = range(0, 23);
shuffle($indexes);
$stringOfRandomWords = '';

for ($i = 0; $i < 10; $i++) {
    $stringOfRandomWords = $stringOfRandomWords . ' ' . $mergedArraysOfWords[$indexes[$i]];
};
echo $stringOfRandomWords;