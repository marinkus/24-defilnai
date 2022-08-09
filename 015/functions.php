<h2>Homework: Funkcijos</h2>

<?php
echo '<pre>';

// 1. Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;
echo '<br><br>Uzduotis nr. 1 ----- <br><br>';

function headingConstructor($a = 'Heading') {
    return "<h1>$a</h1>";
}

// echo headingConstructor('Labas rytas');


// 2. Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;
echo '<br><br>Uzduotis nr. 2 ----- <br><br>';

function headingGenerator($text, $tag) {
    return "<h$tag>$text</h$tag>";
}

// echo headingGenerator('Lbbbbbbbbb', 3);

// 3. Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback();
echo '<br><br>Uzduotis nr. 3 ----- <br><br>';

$string = md5(time()); // labai "idomi" uzduotis ir jos sprendimas
    function randomStringCut(string $str) {
        return preg_replace_callback('/\d+/', fn($match) => headingConstructor($match[0]), $str);
    }
// echo randomStringCut($string);

// 4. Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;
echo '<br><br>Uzduotis nr. 4 ----- <br><br>';

function wholeNumbs(int $integer) {
    $wholeNumbers = [];
    foreach(range(1, $integer) as $int) {
        if ($int !== 1 && $integer !== $int && $integer % $int == 0) {
            $wholeNumbers[] = $int;
        }
    }
    return $wholeNumbers;
}
// print_r(wholeNumbs(99));

// 5. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.
echo '<br><br>Uzduotis nr. 5 ----- <br><br>';

$arr = [];
foreach(range(1, 100) as $_) {
    $arr[] = rand(33, 77);
}

$sorted = [];
foreach($arr as $int) {
    $sorted[] = wholeNumbs($int);
}

function sortByArrCount($a, $b) {
    return count($b) <=> count($a);
}
usort($sorted, 'sortByArrCount');
// print_r($sorted);


// 6. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.
echo '<br><br>Uzduotis nr. 6 ----- <br><br>';
$arr2 = [];
foreach(range(1, 100) as $_) {
    $arr2[] = rand(333, 777);
}

function deleteNums(array &$array) {
    foreach($array as $index => &$num) {
        if (count(wholeNumbs($num)) !== 0) {
            unset($array[$index]);
        }
    }
    return $array;
}
unset($array);
unset($num);
// print_r(deleteNums($arr2));


// 7. Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;
echo '<br><br>Uzduotis nr. 7 ----- <br><br>';


function generateArray($int) {
    $arr = [];
    $number = rand(10, 20);
    if ($int == 0) {
        foreach(range(1, $number) as $_) {
            if ($_ < $number) {
                $arr[] = rand(0, 10);
            } elseif ($_ == $number) {
                $arr[] = 0;
            }
        }
    } elseif ($int > 0) {
        foreach(range(1, $number) as $_) {
            if ($_ < $number) {
                $arr[] = rand(0, 10);
            } elseif ($_ == $number) {
                $arr[] = generateArray($int - 1);
            }
    }
}
    return $arr;
}

// print_r(generateArray(rand(10, 20)));


// 8. Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą. Skaičiuoti reikia visuose masyvuose ir submasyvuose.
echo '<br><br>Uzduotis nr. 8 ----- <br><br>';

function sumArray($arr) {
    $sum = 0;
    foreach ($arr as $num) {
    if (!is_array($num)) {
          $sum += $num;
        } else {
            $sum += sumArray($num);
        }
    }
    return $sum;
}

// echo sumArray(generateArray(10));


// 9. Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33. Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti elemento. 
echo '<br><br>Uzduotis nr. 9 ----- <br><br>';

$arr3 = [];
foreach(range(1, 3) as $_) {
    $arr3[] = rand(1, 33);
}


function funFunc($arr) {
    foreach($arr as $num) {
        if ((count(wholeNumbs($arr[count($arr) - 1])) == 0) &&
        (count(wholeNumbs($arr[count($arr) - 2])) == 0) &&
        (count(wholeNumbs($arr[count($arr) - 3])) == 0) ) {
            return $arr;
        }
        elseif ((count(wholeNumbs($arr[count($arr) - 1])) !== 0) ||
            (count(wholeNumbs($arr[count($arr) - 2])) !== 0) ||
            (count(wholeNumbs($arr[count($arr) - 3])) !== 0) ) {
                $arr[] = rand(1, 33);
                return funFunc($arr);
            }
    }
}
print_r(funFunc($arr3));

// 10. Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 100. Jeigu tokio didelio masyvo (ne atskirai mažesnių) pirminių skaičių vidurkis mažesnis už 70, suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite. 
echo '<br><br>Uzduotis nr. 10 ----- <br><br>';

$array10 = [];
foreach(range(1, 3) as $_) {
    $arr3[] = rand(1, 33);
}