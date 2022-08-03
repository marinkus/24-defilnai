<h2>Homework 2. Stringai (movie edition)</h2>

<?php
/* 1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą. */
echo 'Uzduotis nr. 1 --------------- <br>';

$actorName = 'Johnny';
$actorSurname = 'Depp';

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

/* 4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti. */
echo '<br><br> Uzduotis nr. 4 --------------- <br>';
/* 5. Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti. */
echo '<br><br> Uzduotis nr. 5 --------------- <br>';
/* 6. Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti. */
echo '<br><br> Uzduotis nr. 6 --------------- <br>';
/* 7. Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”. */
echo '<br><br> Uzduotis nr. 7 --------------- <br>';
/* 8. Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.*/
echo '<br><br> Uzduotis nr. 8 --------------- <br>';
/* 9. Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”. */
echo '<br><br> Uzduotis nr. 9 --------------- <br>';
/* 10. Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai. */
echo '<br><br> Uzduotis nr. 10 --------------- <br>';